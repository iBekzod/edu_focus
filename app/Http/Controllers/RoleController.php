<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Http\Requests\Roles\Index;
use App\Http\Requests\Roles\Show;
use App\Http\Requests\Roles\Create;
use App\Http\Requests\Roles\Store;
use App\Http\Requests\Roles\Edit;
use App\Http\Requests\Roles\Update;
use App\Http\Requests\Roles\Destroy;


/**
 * Description of RoleController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class RoleController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.roles.index', ['records' => Role::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Role $role)
    {
        return view('pages.roles.show', [
                'record' =>$role,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.roles.create', [
            'model' => new Role,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Role;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Role saved successfully');
            return redirect()->route('roles.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Role');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Role $role)
    {

        return view('pages.roles.edit', [
            'model' => $role,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Role $role)
    {
        $role->fill($request->all());

        if ($role->save()) {
            
            session()->flash('app_message', 'Role successfully updated');
            return redirect()->route('roles.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Role');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Role  $role
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Role $role)
    {
        if ($role->delete()) {
                session()->flash('app_message', 'Role successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Role');
            }

        return redirect()->back();
    }
}
