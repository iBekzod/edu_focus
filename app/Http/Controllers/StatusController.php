<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Status;
use App\Http\Requests\Statuses\Index;
use App\Http\Requests\Statuses\Show;
use App\Http\Requests\Statuses\Create;
use App\Http\Requests\Statuses\Store;
use App\Http\Requests\Statuses\Edit;
use App\Http\Requests\Statuses\Update;
use App\Http\Requests\Statuses\Destroy;


/**
 * Description of StatusController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class StatusController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.statuses.index', ['records' => Status::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Status $status)
    {
        return view('pages.statuses.show', [
                'record' =>$status,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.statuses.create', [
            'model' => new Status,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Status;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Status saved successfully');
            return redirect()->route('statuses.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Status');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Status $status)
    {

        return view('pages.statuses.edit', [
            'model' => $status,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Status $status)
    {
        $status->fill($request->all());

        if ($status->save()) {
            
            session()->flash('app_message', 'Status successfully updated');
            return redirect()->route('statuses.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Status');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Status  $status
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Status $status)
    {
        if ($status->delete()) {
                session()->flash('app_message', 'Status successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Status');
            }

        return redirect()->back();
    }
}
