<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
     public function getCustomer() {
         $customer = Customer::all();
         return response()->json($customer);
     }
     public function saveCustomer(Request $request) {
         $customer_data = [
            "id_customer" => $request->idcus,
            "name" => $request->name,
            "phone_cus" => $request->phone,
            "adress_cus" => $request->adress
         ];
         $customer = Customer::create($customer_data);
         if($customer) {
            return response()->json(["code" => "200", "type" => "success", "msg" => "data is already"]);
         }
         else{
            return response()->json(["code" => "500", "type" => "error", "msg" => "data is not already"], 500);
         }
     }
     public function deleteCustomer(Request $request) {
        $customer = Customer::find($request->id);
        if($customer->delete()) {
            return response()->json(["code" => "200", "type" => "success", "msg" => "delete success"]);
         }
         else{
            return response()->json(["code" => "500", "type" => "error", "msg" => "delete unsuccess"], 500);
         }
     }

}
