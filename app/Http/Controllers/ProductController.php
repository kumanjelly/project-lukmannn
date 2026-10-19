<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Ecommerce::all();
        return view('products.index', compact('products'));
    }

    // Method khusus untuk halaman katalog tersendiri
    public function catalog()
    {
        $products = Ecommerce::all();
        return view('products.catalog', compact('products'));
    }

    public function show($id)
    {
        $product = Ecommerce::findOrFail($id);
        return view('products.show', compact('product'));
    }
}