<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Package;
use App\Repositories\PackageRepository;
use Exception;
use Illuminate\Http\Request;
use App\Repositories\DashboardRepository;

use Laracasts\Flash\Flash;


class PackageController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @var PackageRository
     */
    private $packageRepository;

    public function __construct(PackageRepository $packageRepository)
    {
        $this->packageRepository = $packageRepository;
    }



    public function index()
    {
        return view('packages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Currency = Currency::get()->toArray();
        $currencies = [];
        foreach ($Currency as $key => $value) {
            $currencies[] = $Currency[$key];
        }
        return view('packages.create', compact('currencies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        try {
            $this->packageRepository->store($input);
            Flash::success('Package created successfully.');
        } catch (Exception $exception) {
            Flash::error($exception->getMessage());
            return redirect()->route('packages.create')->withInput();
        }
        return redirect(route('packages.index'));
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currency = Currency::get()->toArray();
        $currencies = [];
        foreach ($currency as $key => $value) {

            $currencies[] = $currency[$key];
        }
        $package = Package::findOrFail($id);
        return view('packages.edit', compact('package', 'currencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  public function update(UpdateUserRequest $request, User $user)

    public function update(Request $request, $id)
    {
        try {
            $this->packageRepository->update($request->all(), $id);
            Flash::success('Pacakge updated successfully.');
        } catch (Exception $exception) {
            Flash::error($exception->getMessage());
            return redirect(route('packages.edit', ['user' => $id]))->withInput();
        }

        return redirect(route('packages.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $Package)
    {
        $Package->delete();
        return $this->sendSuccess('Package deleted successfully.');
    }
}
