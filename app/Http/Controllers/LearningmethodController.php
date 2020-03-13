<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Learningmethod;
use App\Http\Requests\Learningmethods\Index;
use App\Http\Requests\Learningmethods\Show;
use App\Http\Requests\Learningmethods\Create;
use App\Http\Requests\Learningmethods\Store;
use App\Http\Requests\Learningmethods\Edit;
use App\Http\Requests\Learningmethods\Update;
use App\Http\Requests\Learningmethods\Destroy;


/**
 * Description of LearningmethodController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class LearningmethodController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.learningmethods.index', ['records' => Learningmethod::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Learningmethod  $learningmethod
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Learningmethod $learningmethod)
    {
        return view('pages.learningmethods.show', [
                'record' =>$learningmethod,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.learningmethods.create', [
            'model' => new Learningmethod,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Learningmethod;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Learningmethod saved successfully');
            return redirect()->route('learningmethods.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Learningmethod');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Learningmethod  $learningmethod
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Learningmethod $learningmethod)
    {

        return view('pages.learningmethods.edit', [
            'model' => $learningmethod,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Learningmethod  $learningmethod
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Learningmethod $learningmethod)
    {
        $learningmethod->fill($request->all());

        if ($learningmethod->save()) {
            
            session()->flash('app_message', 'Learningmethod successfully updated');
            return redirect()->route('learningmethods.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Learningmethod');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Learningmethod  $learningmethod
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Learningmethod $learningmethod)
    {
        if ($learningmethod->delete()) {
                session()->flash('app_message', 'Learningmethod successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Learningmethod');
            }

        return redirect()->back();
    }
}
