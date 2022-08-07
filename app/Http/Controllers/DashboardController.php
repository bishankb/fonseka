<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine; 

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
            
        return view('backend.dashboard', compact(
            'totalRoutine',
        ));
    }

    private function totalRoutineCount()
    {
        return Routine::count();
    }
}

