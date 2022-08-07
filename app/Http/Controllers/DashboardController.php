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
         $datas =  Routine::where('user_id', Auth::user()->id)
                    ->orderByDesc('created_at')
                    ->get()
                    ->groupBy( function($val) {
                                      return Carbon::parse($val->created_at)->format('M Y');
                                });
            
        return view('backend.dashboard', compact('datas'));
    }
}

