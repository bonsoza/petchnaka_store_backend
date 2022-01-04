<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function getOrder() {
        $order = Order::all();
        return response()->json($order);
    }

    public function storeOrder(Request $request) {
        $order = [
            "id_user" => $request->id_user,
            "id_customer" => $request->id_cus,
            "id_product" => $request->id_product,
            "quantity" => $request->quantity,
            "allprice" => $request->totalprice
        ];
        $status = Order::create($order);
        if($status) {
            return response()->json(["code" => "200", "type" => "success", "msg" => "data is already"]);
        }
        else{
            return response()->json(["code" => "500", "type" => "error", "msg" => "data is not already"], 500);
        }
    }

    public function getDelivery() {
        $delivery = Order::join('customer', 'order_detail.id_customer', '=', 'customer.id_customer')->select('customer.adress_cus', 'order_detail.*')->get();
        return response()->json($delivery);
    }

    public function updateDelivery(Request $request){
        $data = [
            "status_delivery" => $request->status_delivery
        ];
        $edit = Order::where("id", $request->id)->update($data);
        if($edit) {
            return response()->json(["code" => "200", "type" => "success", "msg" => "data is already"]);
         }
         else{
            return response()->json(["code" => "500", "type" => "error", "msg" => "data is not already"], 500);
         }
    }
}
