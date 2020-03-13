<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Score;
use App\Http\Requests\Scores\Index;
use App\Http\Requests\Scores\Show;
use App\Http\Requests\Scores\Create;
use App\Http\Requests\Scores\Store;
use App\Http\Requests\Scores\Edit;
use App\Http\Requests\Scores\Update;
use App\Http\Requests\Scores\Destroy;


/**
 * Description of ScoreController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class ScoreController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.scores.index', ['records' => Score::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Score $score)
    {
        return view('pages.scores.show', [
                'record' =>$score,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.scores.create', [
            'model' => new Score,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Score;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Score saved successfully');
            return redirect()->route('scores.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Score');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Score $score)
    {

        return view('pages.scores.edit', [
            'model' => $score,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Score $score)
    {
        $score->fill($request->all());

        if ($score->save()) {
            
            session()->flash('app_message', 'Score successfully updated');
            return redirect()->route('scores.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Score');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Score  $score
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Score $score)
    {
        if ($score->delete()) {
                session()->flash('app_message', 'Score successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Score');
            }

        return redirect()->back();
    }
}
