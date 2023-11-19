<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\AppBaseController;
use App\Repositories\DashboardRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;

class DashboardController extends AppBaseController
{
    /* @var DashboardRepository */
    public $dashboardRepository;

    /**
     * @param  DashboardRepository  $dashboardRepo
     */
    public function __construct(DashboardRepository $dashboardRepo)
    {
        $this->dashboardRepository = $dashboardRepo;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {

        $dashboardData = $this->dashboardRepository->getClientDashboardData();

        // if($dashboardData['unpaid_invoices']== 0 && $dashboardData['paid_invoices'] == 0){
        if($dashboardData['total_invoices'] == 0){
            $clientPackage = $this->dashboardRepository->getClientDashboardDataSubcription();

            return view('frontend.business_plan',compact("clientPackage"));

        }
        return view('client_panel.dashboard.index')->with($dashboardData);
    }

    public function clientPackages(){

        $dashboardData = $this->dashboardRepository->getClientDashboardData();
        $clientPackage = $this->dashboardRepository->getClientDashboardDataSubcription();
        if($dashboardData['paid_invoices'] != 0){
        $subcription = $this->dashboardRepository->getClientSubcriptionStatus();

        return view('client_panel.packages.index',compact("clientPackage","subcription"));
    }

        return view('client_panel.packages.index',compact("clientPackage"));


    }
}
