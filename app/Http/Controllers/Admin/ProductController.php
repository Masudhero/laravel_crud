<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\ProductController;

class ProductController extends Controller
{
    public function index(){
        return view('backand.product.index');
    }
    public function create(){
        return view('backand.product.create');
    }
}
