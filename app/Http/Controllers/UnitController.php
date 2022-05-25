<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        $units = Unit::all();
        return view('units.index',compact('units'));
    }
    public function create(){
        return view('units.create');
    }
    public function edit($id){
        $unit= Unit::find($id);
        return view('units.edit',compact('unit'));
    }
    public function update(Request $request,$id){
        $unit= Unit::find($id);
        $unit->update($request->all());
        return redirect()->route('units');
    }
    public function store(Request $request){
        $unit = new Unit();
        $unit->create($request->all());
        return redirect()->route('units');
    }
    public function delete($id){
        $unit= Unit::find($id);
        $unit->delete();
        return redirect()->route('units');
    }
}
