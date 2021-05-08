<?php


namespace App\Http\Controllers\Store;

use App\Models\Order;
use Auth;
use App\Http\Controllers\BaseController;
//use Faker\Provider\Base;

class StoreController extends BaseController
{

    public function index(){
        //$this->middleware('check');
        $user = Auth::user();
        $orders   = Order::where('status', 'В процессе')->where('courier_id', '=', 0)->get();
        $orders3  = Order::where('status', 'В процессе')->where('courier_id', '!=', 0)->get();
        $orders2  = Order::where('status', 'Курьер назначен')->get();
        $orders4  = Order::where('status', 'Курьер забрал')->where('courier_id', '!=', 0)->get();
        return view('store.index', compact('user', 'orders2', 'orders', 'orders3', 'orders4'));
    }

    public function check($code){
        $user = Auth::user();
//        dd($code);
        $order = Order::where('order_code', $code)->get()->first();
        return view('store.check', compact('user', 'order'));
    }
}
