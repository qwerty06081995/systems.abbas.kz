<?php


namespace App\Http\Controllers\Operator;


use App\Http\Controllers\BaseController;

class OperatorController extends BaseController
{
    public function index(){
        return view('operator.index');
    }
}
