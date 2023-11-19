<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Country;
use App\Models\Invoice;
use App\Models\Job;
use App\Models\Package;
use App\Models\Setting;
use App\Models\social_media_setting;
use App\Repositories\InvoiceRepository;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Expectation;

use App\Exports\AdminInvoicesExport;
use App\Http\Requests\CreateInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Mail\InvoicePaymentReminderMail;
use App\Models\Currency;
use App\Models\Payment;
use App\Models\Product;
use App\Repositories\PaymentRepository;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Laracasts\Flash\Flash;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
class HomeController extends AppBaseController
{


    public $invoiceRepository;

    public function __construct(InvoiceRepository $invoiceRepo)
    {
        $this->invoiceRepository = $invoiceRepo;
    }
    public function payments()
    {

        return view('frontend.payments');
    }

    public function price()
    {


        return view('frontend.price');
    }
    public function invoice_store(Request $request)
    {
        $data = $this->invoiceRepository->getSyncList();
        $data['currencies'] = getCurrencies();
        unset($data['statusArr'][0]);
        $subcription = $this->invoiceRepository->subcription($request->all(),$data);
        $SaveSubcription = $this->invoiceRepository->SaveSubcription($request->all());

        try {
            DB::beginTransaction();
            $invoice = $this->invoiceRepository->saveInvoice($subcription);

            if ($request->status != Invoice::DRAFT) {
                $this->invoiceRepository->saveNotification($subcription, $invoice);
                DB::commit();

                return $this->sendResponse($invoice, 'Invoice saved & sent successfully.');
            }
            DB::commit();
        } catch (Expectation $e) {
            DB::rollBack();

            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($invoice, 'Invoice saved successfully.');
    }

    public function Products(){

    return view('frontend.product');
}
    public function task(){

    return view('frontend.task');
}
    public function calender(){

    return view('frontend.calender');
}
public function index(){

   $setting =  Setting::all();
   $social_media =  social_media_setting::all();


    return view('home',compact('setting','social_media'));


}

public function product_and_service(){


    return view('frontend.product_and_service');


}
public function Integrations(){

    return view('frontend.integration');
}

public function knowlage_base(){

    return view('frontend.knowlage_base');
}
public function leads_management(){

    return view('frontend.leads_management');
}
public function message(){

    return view('frontend.message');
}
public function order_management(){

    return view('frontend.order');
}
public function hrm(){
    return view('frontend.hrm');

}
public function utilities(){
    return view('frontend.utilities');
}
public function support(){

    return view('frontend.support');
}
public function suppliers(){
    return view('frontend.suppliers');

}
public function settings(){

    return view('frontend.settings');


}
public function sales(){
    return view('frontend.sales');

}
public function report(){
    return view('frontend.report');

}
public function purchase(){
    return view('frontend.purchase');

}
public function about_us(){
    return view('frontend.about_us');

}
public function account(){
    return view('frontend.account');

}
public function contracts(){
    return view('frontend.contract');

}
public function bussiness_plan(){
    return view('frontend.business-plan');

}
public function contact_us(){

    $countries = Country::all();
    return view('frontend.contact_us',compact("countries"));

}
public function storeContact_us(Request $request)
{

    $request->validate([
        'name' => 'required',
        'country' => 'required',
        'email' => 'required|email',
        'company_name' => 'required',
        'message' => 'required',
    ]);
     $input = $request->all();

        Contact::create($input);


        return redirect()->back()
        ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
}
public function careers(){
 $countries = Country::all();
       $job = Job::all();
    return view('frontend.careers',compact('countries','job'));

}
public function project_management(){
    return view('frontend.project_management');

}
public function explore(){
    return view('frontend.explore');

}
public function privacy_policy(){
    return view('frontend.privacy-policy');

}
public function team(){
    return view('frontend.team');

}
public function term_condition(){
    return view('frontend.term-condition');

}
public function why_choose_us(){
    return view('frontend.why-choose-us');

}
public function affiliate_program(){
    return view('frontend.affiliate-program');

}
public function chat(){
    return view('frontend.chat');

}
public function crm(){
    return view('frontend.crm');

}
public function business(){
    return view('frontend.business');

}
public function data_protection(){
    return view('frontend.data-protection');

}
public function document(){
    return view('frontend.document');

}
public function mission(){
    
    return view('frontend.mission-vision');

}
public function training (){
    
  $packages = Package::get();

    return view('frontend.training',compact('packages'));

}
public function storetraining(Request $request)

{
    $request->validate([
        'name' => 'required',
        'package' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'shift' => 'required',
        'date' => 'required',
    ]);
     $input = $request->all();

   Training::create($input);



        return redirect()->back()
        ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
}

}
