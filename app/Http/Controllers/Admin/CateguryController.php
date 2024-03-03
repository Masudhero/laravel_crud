<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CateguryController;
use App\Models\Category;

class CateguryController extends Controller
{
    public function index(){
        $category = Category::orderBy('id','DESC')->get();
        return view('backand.categury.index',['category'=>$category]);
    }
    public function create(){
        return view('backand.categury.create');
    }
    public function store(Request $request){
        // validate request //
        $request->validate([
            'category_name'=>['required','string','min:2','max:100'],
            'status'=>['required','in:0,1'],
        ]);

        Category::create([
            'name'=>$request->category_name,
            'status'=>$request->status,
        ]);

        return back()->with('success','category has been saved');
    }
    public function edit($id){
        $category =Category::find($id);
        return view('backand.categury.edit',['category'=>$category]);
    }

    public function update(Request $request ,$id){
        $request->validate([
            'category_name'=>['required','string','min:2','max:100'],
            'status'=>['required','in:0,1'],
        ]);


        Category::find($id)-update([
            'name'=>$request->category_name,
            'status'=>$request->status,
        ]);

        return back()->with('success','category has been updated');

    }
}
