<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',compact('products'));
    }
    public function create(){
        $units = Unit::all();
        return view('products.create',compact('units'));
    }
    public function edit($id){
        $product= Product::find($id);
        $units = Unit::all();
        return view('products.edit',compact('product','units'));
    }
    public function update(Request $request,$id){
        $product= Product::find($id);
        $product->update($request->all());
        return redirect()->route('products');
    }
    public function store(Request $request){
        $product = new Product();
        $product->create($request->all());
        return redirect()->route('products');
    }
    public function delete($id){
        $product= Product::find($id);
        $product->delete();
        return redirect()->route('products');
    }
    public function calculateMillis($quantity = 9,$converterUnit = 1000){
       $millis = $quantity*$converterUnit;
       return $millis;
    }
    public function countUnitsFprProduct(){
        $countUnits=[];
        $products = Product::all();
        foreach($products as $i=>$product){
            array_push($countUnits, count($product->units));
        }
        return $countUnits;
    }
}
