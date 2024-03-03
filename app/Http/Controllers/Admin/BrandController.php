<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BrandController;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::latest('id')->get();
        return view('backand.brand.index',['brand'=>$brand]);
    }
    public function create(){
        return view('backand.brand.create');
    }
    
    public function store(Request $request){
        $request->validate([
            'brand_name'=>['required','string','min:2','max:100'],
            'status'=>['required','in:0,1'],
        ]);

        Brand::create([
            'name'=>$request->brand_name,
            'status'=>$request->status,
        ]);

        return back()->with('success','brand has been saved');
    }
    // public function edit($id){
    //     $brand =find($id);
    //     return view('backand.brand.edit',['brand'=>$brand]);

    // }
}
