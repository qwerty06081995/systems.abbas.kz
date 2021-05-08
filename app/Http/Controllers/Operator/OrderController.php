<?php


namespace App\Http\Controllers\Operator;


use App\Http\Controllers\BaseController;
use App\Models\Order;
use App\Models\ShipmentSpeed;
use App\Models\ShipmentType;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

class OrderController extends BaseController
{
    public function addForm(){
        $this->middleware('check');
        $user = Auth::user();
        return view('operator.order', compact('user'));
    }

    public function saveOrder(){
        $success = false;
        //dd($_GET);
        if (!empty($_GET)){
            $order_code     = $_GET['code'];

            $from_name      = $_GET['fullNameFrom'];
            $from_company   = $_GET['companyFrom'];
            $from_city      = $_GET['cityFrom'];
            $from_address   = $_GET['addressFrom'];
            $from_phone     = $_GET['phoneFrom'];

            $to_name        = $_GET['fullNameTo'];
            $to_company     = $_GET['companyTo'];
            $to_city        = $_GET['cityTo'];
            $to_address     = $_GET['addressTo'];
            $to_phone       = $_GET['phoneTo'];

            $typeData                   = ShipmentType::where('id', (int)$_GET['type'])->get();
            $type = $typeData[0]->name;

            $speedData                  = ShipmentSpeed::where('id', (int)$_GET['speed'])->get();
            $speed = $speedData[0]->name;

            $paymentData                = ShipmentSpeed::where('id', (int)$_GET['payment'])->get();
            $payment = $paymentData[0]->name;

            $paymentTypeData            = ShipmentSpeed::where('id', (int)$_GET['paymentType'])->get();
            $paymentType = $paymentTypeData[0]->name;

            $comment = $_GET['description'];
            $dateS = Carbon::now();
            $dateE = Carbon::now();
            //dd($dateE->format('Y-m-d H:i'));
            $order = Order::create([
                'id' => null,
                'order_code'    =>$order_code,
                'from_name'     =>$from_name,
                'from_company'  =>$from_company,
                'from_city'     =>$from_city,
                'from_address'  =>$from_address,
                'from_phone'    =>$from_phone,
                'to_name'       =>$to_name,
                'to_company'    =>$to_company,
                'to_city'       =>$to_city,
                'to_address'    =>$to_address,
                'to_phone'      =>$to_phone,
                'data_s'        =>$dateS->format('Y-m-d H:i'),
                'data_e'        =>$dateE->format('Y-m-d H:i'),
                'type'          =>$_GET['type'],
                'speed'         =>$_GET['speed'],
                'payment'       =>$_GET['payment'],
                'payment_type'  =>$_GET['paymentType'],
                'comment'       =>$comment,
                'status'        =>'В процессе',
                'courier_id'    => 0,
            ]);
            $success = false;
            if ($order){
                $success = true;
                return redirect()->route('abo.operator.index', compact('success'));
            }else{
                return redirect()->route('abo.operator.index', compact('success'));
            }

        }

    }

}
