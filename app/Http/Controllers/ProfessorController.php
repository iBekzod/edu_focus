<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Professor;
use App\Http\Requests\Professors\Index;
use App\Http\Requests\Professors\Show;
use App\Http\Requests\Professors\Create;
use App\Http\Requests\Professors\Store;
use App\Http\Requests\Professors\Edit;
use App\Http\Requests\Professors\Update;
use App\Http\Requests\Professors\Destroy;


/**
 * Description of ProfessorController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class ProfessorController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.professors.index', ['records' => Professor::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Professor $professor)
    {
        return view('pages.professors.show', [
                'record' =>$professor,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.professors.create', [
            'model' => new Professor,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Professor;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Professor saved successfully');
            return redirect()->route('professors.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Professor');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Professor $professor)
    {

        return view('pages.professors.edit', [
            'model' => $professor,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Professor $professor)
    {
        $professor->fill($request->all());

        if ($professor->save()) {
            
            session()->flash('app_message', 'Professor successfully updated');
            return redirect()->route('professors.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Professor');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Professor  $professor
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Professor $professor)
    {
        if ($professor->delete()) {
                session()->flash('app_message', 'Professor successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Professor');
            }

        return redirect()->back();
    }
}
