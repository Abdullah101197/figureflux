<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Currency;
use App\Models\Job;
use App\Repositories\JobRepository;
use Exception;
use App\Repositories\DashboardRepository;

use Laracasts\Flash\Flash;
class JobController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @var JobRepository
     */
    private $JobRepository;

    public function __construct(JobRepository $JobRepository)
    {
        $this->JobRepository = $JobRepository;
    }



    public function index()
    {

        return view('jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('jobs.create');
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
            $this->JobRepository->store($input);
            Flash::success('Job created successfully.');
        } catch (Exception $exception) {
            Flash::error($exception->getMessage());
            return redirect()->route('jobs.create')->withInput();
        }
        return redirect(route('jobs.index'));
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
        $job = Job::findOrFail($id);
        return view('jobs.edit', compact('job'));
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
            $this->JobRepository->update($request->all(), $id);
            Flash::success('Jobs updated successfully.');
        } catch (Exception $exception) {
            Flash::error($exception->getMessage());
            return redirect(route('jobs.edit', ['user' => $id]))->withInput();
        }

        return redirect(route('jobs.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return $this->sendSuccess('Job deleted successfully.');
    }
}

