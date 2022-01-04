<?php

namespace App\Http\Controllers;

use App\Models\Generate;
use Illuminate\Http\Request;

class GenController extends Controller
{
    public function postGen(Request $request) {
        $product_data = [
           "id_product" => $request->id,
           "quantity" => $request->quantity

        ];
        $item = Generate::create($product_data);
        if($item) {
           return response()->json(["code" => "200", "type" => "success", "msg" => "data is already"]);
        }
        else{
           return response()->json(["code" => "500", "type" => "error", "msg" => "data is not already"], 500);
        }
    }

    public function getEdit(Request $request){
        $edit = Generate::find($request->id);
        return response()->json($edit);
    }

    public function getAllEdit(){
        $alledit = Generate::all();
        return response()->json($alledit);
    }

    public function getUpdateData(Request $request){
        $data = [
            "quantity" => $request->quantity
        ];
        $edit = Generate::where("id_product", $request->id_product)->update($data);
        if($edit) {
            return response()->json(["code" => "200", "type" => "success", "msg" => "data is already"]);
         }
         else{
            return response()->json(["code" => "500", "type" => "error", "msg" => "data is not already"], 500);
         }
    }
}
