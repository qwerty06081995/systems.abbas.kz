<?php


namespace App\Http\Controllers\Operator;
use App\Models\Order;
use Auth;

use App\Http\Controllers\BaseController;

class OperatorController extends BaseController
{
    public function index(){
//        $this->middleware('check');
        $user = Auth::user();
        $orders  = Order::where('status', 'В процессе')->get();
//        $orders2 = Order::where('status', 'Курьер назначен')->get();
//        $orders3 = Order::where('status', 'Выполнен')->get();
        //dd($orders);
        //dd($user);
        return view('operator.index', compact('user', 'orders'));
    }
}
