<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Http\Requests\Jobs\Index;
use App\Http\Requests\Jobs\Show;
use App\Http\Requests\Jobs\Create;
use App\Http\Requests\Jobs\Store;
use App\Http\Requests\Jobs\Edit;
use App\Http\Requests\Jobs\Update;
use App\Http\Requests\Jobs\Destroy;


/**
 * Description of JobController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class JobController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.jobs.index', ['records' => Job::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Job $job)
    {
        return view('pages.jobs.show', [
                'record' =>$job,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.jobs.create', [
            'model' => new Job,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Job;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Job saved successfully');
            return redirect()->route('jobs.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Job');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Job $job)
    {

        return view('pages.jobs.edit', [
            'model' => $job,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Job $job)
    {
        $job->fill($request->all());

        if ($job->save()) {
            
            session()->flash('app_message', 'Job successfully updated');
            return redirect()->route('jobs.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Job');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Job  $job
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Job $job)
    {
        if ($job->delete()) {
                session()->flash('app_message', 'Job successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Job');
            }

        return redirect()->back();
    }
}
