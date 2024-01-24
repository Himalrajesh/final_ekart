<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSaveRequest;
use App\Models\Category;

class PageController extends Controller
{
    public function home(){
        return view('admin.home');
    }
    
    public function create(){
        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }

    public function save(ProductSaveRequest $request) {
        $data = $request->validated();
        return $data;
     }
}