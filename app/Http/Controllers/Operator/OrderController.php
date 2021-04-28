<?php


namespace App\Http\Controllers\Operator;


use App\Http\Controllers\BaseController;
use Auth;

class OrderController extends BaseController
{
    public function addForm(){
        $user = Auth::user();
        return view('operator.order', compact('user'));
    }

}
