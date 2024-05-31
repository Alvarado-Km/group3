<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {

    }

    public function save(Product $product)
    {

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('products');
    }
}
