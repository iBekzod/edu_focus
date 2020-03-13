<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Studentparent;
use App\Http\Requests\Studentparents\Index;
use App\Http\Requests\Studentparents\Show;
use App\Http\Requests\Studentparents\Create;
use App\Http\Requests\Studentparents\Store;
use App\Http\Requests\Studentparents\Edit;
use App\Http\Requests\Studentparents\Update;
use App\Http\Requests\Studentparents\Destroy;


/**
 * Description of StudentparentController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class StudentparentController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.studentparents.index', ['records' => Studentparent::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Studentparent  $studentparent
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Studentparent $studentparent)
    {
        return view('pages.studentparents.show', [
                'record' =>$studentparent,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.studentparents.create', [
            'model' => new Studentparent,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Studentparent;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Studentparent saved successfully');
            return redirect()->route('studentparents.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Studentparent');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Studentparent  $studentparent
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Studentparent $studentparent)
    {

        return view('pages.studentparents.edit', [
            'model' => $studentparent,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Studentparent  $studentparent
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Studentparent $studentparent)
    {
        $studentparent->fill($request->all());

        if ($studentparent->save()) {
            
            session()->flash('app_message', 'Studentparent successfully updated');
            return redirect()->route('studentparents.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Studentparent');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Studentparent  $studentparent
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Studentparent $studentparent)
    {
        if ($studentparent->delete()) {
                session()->flash('app_message', 'Studentparent successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Studentparent');
            }

        return redirect()->back();
    }
}
