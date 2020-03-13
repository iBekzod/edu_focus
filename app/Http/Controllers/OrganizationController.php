<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Http\Requests\Organizations\Index;
use App\Http\Requests\Organizations\Show;
use App\Http\Requests\Organizations\Create;
use App\Http\Requests\Organizations\Store;
use App\Http\Requests\Organizations\Edit;
use App\Http\Requests\Organizations\Update;
use App\Http\Requests\Organizations\Destroy;


/**
 * Description of OrganizationController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class OrganizationController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.organizations.index', ['records' => Organization::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Organization $organization)
    {
        return view('pages.organizations.show', [
                'record' =>$organization,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.organizations.create', [
            'model' => new Organization,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Organization;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Organization saved successfully');
            return redirect()->route('organizations.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Organization');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Organization $organization)
    {

        return view('pages.organizations.edit', [
            'model' => $organization,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Organization $organization)
    {
        $organization->fill($request->all());

        if ($organization->save()) {
            
            session()->flash('app_message', 'Organization successfully updated');
            return redirect()->route('organizations.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Organization');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Organization  $organization
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Organization $organization)
    {
        if ($organization->delete()) {
                session()->flash('app_message', 'Organization successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Organization');
            }

        return redirect()->back();
    }
}
