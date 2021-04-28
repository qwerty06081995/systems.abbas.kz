<?php


namespace App\Http\Controllers\Operator;
use Auth;

use App\Http\Controllers\BaseController;

class OperatorController extends BaseController
{
    public function index(){

        $user = Auth::user();
        //dd($user);
        return view('operator.index', compact('user'));
    }
}
