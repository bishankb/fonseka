<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Metric;
use Carbon\Carbon;

class MetricController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metrics = Metric::where('user_id', Auth::user()->id)
                            ->latest('created_at')
                            ->paginate(20);

        return view('backend.metric.index', compact('metrics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.metric.create');
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
                'name'        => 'required|string|max:255',
                'description' => 'nullable|string|min:2|max:655356'
            ]
        );

        try {

            $metric = Metric::create(
                [
                    'name'        => request('name'),
                    'description' => request('description'),
                    'user_id'     => Auth::user()->id
                ]
            );

            flash('Metric added successfully.')->success();
        } catch (\Exception $exception) {
            logger()->error($exception->getMessage());
            flash('There was some intenal error while adding the metric.')->error();
        }

        return redirect(route('metrics.index'));
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
        $metric = Metric::where('user_id', Auth::user()->id)->find($id);

        return view('backend.metric.edit', compact('metric'));
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
        $metric = Metric::where('user_id', Auth::user()->id)->find($id);

        $this->validate($request,
            [
                'name'        => 'required|string|max:255',
                'description' => 'nullable|string|min:2|max:655356'
            ]
        );

        try {

            $metric->update(
                [
                    'name'        => request('name'),
                    'description' => request('description'),
                    'user_id'     => Auth::user()->id
                ]
            );

            flash('Metric updated successfully.')->info();
        } catch (\Exception $exception) {
            logger()->error($exception->getMessage());
            flash('There was some intenal error while updating the metric.')->error();
        }

        return redirect(route('metrics.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metric = Metric::where('user_id', Auth::user()->id)->find($id);

        try {
            $metric->delete();
            flash('Metric deleted successfully.')->error();
        } catch (\Exception $exception) {
            logger()->error($exception->getMessage());
            flash('There was some intenal error while deleting the metric.')->error();
        }

        return redirect(route('metrics.index'));
    }
}
