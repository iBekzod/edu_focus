<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Http\Requests\Students\Index;
use App\Http\Requests\Students\Show;
use App\Http\Requests\Students\Create;
use App\Http\Requests\Students\Store;
use App\Http\Requests\Students\Edit;
use App\Http\Requests\Students\Update;
use App\Http\Requests\Students\Destroy;


/**
 * Description of StudentController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class StudentController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.students.index', ['records' => Student::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Student $student)
    {
        return view('pages.students.show', [
                'record' =>$student,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.students.create', [
            'model' => new Student,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Student;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Student saved successfully');
            return redirect()->route('students.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Student');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Student $student)
    {

        return view('pages.students.edit', [
            'model' => $student,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Student $student)
    {
        $student->fill($request->all());

        if ($student->save()) {
            
            session()->flash('app_message', 'Student successfully updated');
            return redirect()->route('students.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Student');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Student  $student
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Student $student)
    {
        if ($student->delete()) {
                session()->flash('app_message', 'Student successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Student');
            }

        return redirect()->back();
    }
}
