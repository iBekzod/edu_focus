<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Progress;
use App\Http\Requests\Progress\Index;
use App\Http\Requests\Progress\Show;
use App\Http\Requests\Progress\Create;
use App\Http\Requests\Progress\Store;
use App\Http\Requests\Progress\Edit;
use App\Http\Requests\Progress\Update;
use App\Http\Requests\Progress\Destroy;


/**
 * Description of ProgressController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class ProgressController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.progress.index', ['records' => Progress::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Progress $progress)
    {
        return view('pages.progress.show', [
                'record' =>$progress,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.progress.create', [
            'model' => new Progress,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Progress;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Progress saved successfully');
            return redirect()->route('progress.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Progress');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Progress $progress)
    {

        return view('pages.progress.edit', [
            'model' => $progress,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Progress $progress)
    {
        $progress->fill($request->all());

        if ($progress->save()) {
            
            session()->flash('app_message', 'Progress successfully updated');
            return redirect()->route('progress.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Progress');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Progress  $progress
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Progress $progress)
    {
        if ($progress->delete()) {
                session()->flash('app_message', 'Progress successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Progress');
            }

        return redirect()->back();
    }
}
