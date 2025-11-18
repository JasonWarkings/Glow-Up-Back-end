<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        return Product::all();
    }

    public function show($id) {
        return Product::findOrFail($id);
    }

    public function newProducts() {
        return Product::where('is_new', true)->get();
    }

    public function saleProducts() {
        return Product::where('is_sale', true)->get();
    }
}
