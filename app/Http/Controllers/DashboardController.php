<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Routine; 
Use Carbon\Carbon;

class DashboardController extends Controller
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
    
    public function index()
    {
        $totalRoutine = $this->totalRoutineCount();
        $totalQualityScore = $this->totalQualityScore();

        $datas =  Routine::where('user_id', Auth::user()->id)
                    ->orderByDesc('created_at')
                    ->get()
                    ->groupBy( function($val) {
                                      return Carbon::parse($val->created_at)->format('M Y');
                                });
            
        return view('backend.dashboard', compact(
            'datas'        ));
    }

    private function totalRoutineCount()
    {
        return Routine::where('user_id', Auth::user()->id)
                        ->whereMonth('created_at', Carbon::now()->month)
                        ->sum('creative_work');
    }

    private function totalQualityScore()
    {   

        Routine::QualityScore;

        return Routine::where('user_id', Auth::user()->id)
                        ->whereMonth('created_at', Carbon::now()->month)
                        ->sum('quality_score');
    }
}

