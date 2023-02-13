<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

        $products = Product::all();

        return view('products.index', compact('products'));

    }//end of index

    public function show(Product $product) {

    }//end of show

    public function create(){

    }//end of create

    public function store(Request $request) {

    }//end of store

    public function edit(Product $product) {

    }//end of edit

    public function update(Request $request, Product $product) {

    }//en of update

    public function destroy(Product $product) {

    }//end of destroy
}
