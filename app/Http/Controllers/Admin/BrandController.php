<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BrandController;

class BrandController extends Controller
{
    public function index(){
        return view('backand.brand.index');
    }
    public function create(){
        return view('backand.brand.create');
    }
}
