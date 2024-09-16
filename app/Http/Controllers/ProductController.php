<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $user = Auth::user();
        return view('welcome', ['products'=> $products, 'user'=> $user]);
    }
    
    public function show($id){
        $product = Product::findOrFail($id);
        return view('products.show', ['product'=> $product]);
    }
}
