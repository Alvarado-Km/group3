<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function create(Product $product)
    {
        $verifyData = request()->validate([
            'comment' => 'required|min:3|max:20',
            'rating' => 'required',
        ]);

        $verifyData['user_id'] = Auth::user()->id;
        $verifyData['product_id'] = $product->id;

        dd($verifyData);
    }
}
