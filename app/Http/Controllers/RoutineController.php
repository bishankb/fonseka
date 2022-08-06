<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routines = Routine::paginate(20);
               
        return view('backend.routine.index', compact('routines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quality_scores = Routine::QualityScore;

        return view('backend.routine.create', compact('quality_scores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'creative_work' => 'required|numeric|max:324',
                'quality_score' => 'required|numeric',
                'notes'         => 'nullable|string|min:2|max:655356'
            ]
        );

        try {

            $routine = Routine::create(
                [
                    'creative_work' => request('creative_work'),
                    'quality_score' => request('quality_score'),
                    'notes'         => request('notes')
                ]
            );

            flash('Routine added successfully.')->success();
        } catch (\Exception $exception) {
            logger()->error($exception->getMessage());
            flash('There was some intenal error while adding the routine.')->error();
        }

        return redirect(route('routines.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routine = Routine::find($id);
        $quality_scores = Routine::QualityScore;

        return view('backend.routine.edit', compact('routine', 'quality_scores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $routine = Routine::ind($id);

        $this->validate($request,
            [
                'creative_work' => 'required|numeric|max:24',
                'quality_score' => 'required|numeric',
                'notes'         => 'nullable|string|min:2|max:655356'
            ]
        );

        try {

            $routine->update(
                [
                    'creative_work' => request('creative_work'),
                    'quality_score' => request('quality_score'),
                    'notes'         => request('notes')
                ]
            );

            flash('Routine updated successfully.')->info();
        } catch (\Exception $exception) {
            logger()->error($exception->getMessage());
            flash('There was some intenal error while updating the routine.')->error();
        }

        return redirect(route('routines.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $routine = Routine::find($id);

        try {
            $routine->delete();
            flash('Routine deleted successfully.')->error();
        } catch (\Exception $exception) {
            logger()->error($exception->getMessage());
            flash('There was some intenal error while deleting the routine.')->error();
        }

        return redirect(route('routines.index'));
    }
}
