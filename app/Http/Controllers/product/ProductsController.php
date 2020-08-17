<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function addProduct()
    {
       return view('seller.product.addProduct');
    }

    public function products()
    {
    	return view('seller.product.products');
    }

    public function editProduct($id)
    {
    	
    	return view('seller.product.editProduct')->withId($id);
    }
    
}
