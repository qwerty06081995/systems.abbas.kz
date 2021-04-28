<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;

class AdminController extends BaseController
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('status');
    }

    public function index(){
        return view('admin.index');
    }
}
