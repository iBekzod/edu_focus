<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Http\Requests\Tasks\Index;
use App\Http\Requests\Tasks\Show;
use App\Http\Requests\Tasks\Create;
use App\Http\Requests\Tasks\Store;
use App\Http\Requests\Tasks\Edit;
use App\Http\Requests\Tasks\Update;
use App\Http\Requests\Tasks\Destroy;


/**
 * Description of TaskController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class TaskController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.tasks.index', ['records' => Task::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Task $task)
    {
        return view('pages.tasks.show', [
                'record' =>$task,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.tasks.create', [
            'model' => new Task,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Task;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Task saved successfully');
            return redirect()->route('tasks.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Task');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Task $task)
    {

        return view('pages.tasks.edit', [
            'model' => $task,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Task $task)
    {
        $task->fill($request->all());

        if ($task->save()) {
            
            session()->flash('app_message', 'Task successfully updated');
            return redirect()->route('tasks.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Task');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Task  $task
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Task $task)
    {
        if ($task->delete()) {
                session()->flash('app_message', 'Task successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Task');
            }

        return redirect()->back();
    }
}
