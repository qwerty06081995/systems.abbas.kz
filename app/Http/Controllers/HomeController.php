<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //dd(Auth::user()->isAdmin());
        if (Auth::user()->isAdmin()){
            return redirect()->route('abo.admin.index');
        }elseif (Auth::user()->isOperator()){
            return redirect()->route('abo.operator.index');
        }
        return view('home');
    }
}
