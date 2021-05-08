<?php


namespace App\Http\Controllers\Courier;

use App\Models\Courier;
use App\Models\Routes;
use Auth;
use App\Http\Controllers\BaseController;
use App\Models\Order;

class CourierController extends BaseController
{
    public function index(){
        $user = Auth::user();
        $orders   = Order::where('status', 'В процессе')->get();
        $orders2  = Order::where('status', 'Курьер назначен')->get();
        $couriers   = Courier::get();
        return view('courier.index', compact('user', 'orders', 'orders2', 'couriers'));
    }

    public function showCouriers(){
        $user = Auth::user();
        $couriers   = Courier::get();
        $routes     = Routes::get();
        //dd(count($routes));
        return view('courier.show', compact('couriers', 'routes', 'user'));
    }

    public function enterCourier(){
//        dd($_GET);
        if (isset($_GET) && !empty($_GET)){
            $courier_id = $_GET['courier'];
            $order_id = $_GET['order_id'];
            $order = Order::where('id', $order_id)->get()->first();
            $order->courier_id = $courier_id;
            $order->save();
            if ($order){
                return redirect()->route('abo.courier.show');
            }
        }
//        dd($_GET);
        return 0;
    }

    public function routesForm(){
        if (isset($_GET) && !empty($_GET)){
//            $id = Routes::get()->last();
            //dd($id->id);
            $route_name = $_GET['route_name'];
            $route = Routes::create([
//                'id' => $id->id+1,
                'route_name'=>$route_name
            ]);
            if ($route){
                return redirect()->route('abo.courier.show');
            }
            return 0;
        }
    }
    public function courierForm(){
        if(isset($_GET) && !empty($_GET)){
            $login              = $_GET['login'];
            $courier_name       = $_GET['courier_name'];
            $courier_password   = $_GET['courier_password'];
            $courier_route      = $_GET['courier_route'];

            $courier = Courier::create([
                'name' => $courier_name,
                'code_name'=>$login,
                'routes'=>$courier_route,
                'password'=>$courier_password
            ]);
            if ($courier){
                return redirect()->route('abo.courier.show');
            }
        }
        //dd($_GET);
        return 0;
    }

}
