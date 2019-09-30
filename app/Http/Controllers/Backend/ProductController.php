<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getListProduct(){
        return view('backend.product.listproduct');
    }

    function getAddProduct(){
        return view('backend.product.addproduct');
    }

    function getEditProduct(){
        return view('backend.product.editproduct');
    }

    function postAddProduct(AddProductRequest $r){
        dd($r->all());
    }
}
