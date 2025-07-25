<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Collection;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::get('/signup', function () {
    return view('users.signup');
})->name('signup');

Route::get('/AboutUs', function () {
    return view('AboutUs');
})->name('aboutUs');

Route::get('/homepage', function () {
    return view('homepage', [
        'categories' => Category::all()
    ]);
})->name('home');

Route::get('category/{category}', function (Category $category) {
    return view('products.categories', [
        'category' => $category->load('products')
    ]);
})->name('categories');


Route::get('/handicrafts/{product}', function(Product $product) {
    return view('products.product', [
        'producto' => $product->load('user', 'reviews', 'reviews.user')
    ]);
})->name('handicrafts');

   Route::get('/producto', function () {
    return view(view: 'users.Producto', );
    });

Route::middleware('auth')->group( function () {
    Route::get('/profile', function () {
        return view('users.profile', [
            'user' => Auth::user()
        ]);
    })->name('profile');

    Route::get('/profileArtisan', function () {
        return view('users.ProfileArtisan', [
            'user' => Auth::user()->load('products')
        ]);
    })->name('profile.artisan');

    Route::get('/products/create', function () {
        return view('products.create');
    })->name('products.create');
});

Route::get('/homepageArtisan', function(){
    return view('users.homepageArtisan');
})->name('homepageArtisan');

Route::get('/products/Shopping', function () {
    return view('products.Shopping');
})->name('products.shopping');


Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/payment', function () {
    return view(view: 'products.payment');
});



Route::get('/PruebaKami', function () {
    return view('PruebaKami');
});

Route::get('/map', function () {
    return view(view: 'map');
});



Route::get('/ready', function(){
    return view('ready');
});




Route::get('/products/index', function () {
    return view('products.index');
});





Route::get('/products/Favorite', function () {
    return view('products.Favorite');
});


 Route::get('/favorite', function () {
        return view('users.favorite', [
            'user' => Auth::user()->load('products')
        ]);
    })->name('favorite');


  Route::get('/Pedido', function () {
    return view('users.pedido');
    });


    Route::get('/calendar', function(){
    return view('calendar');
    });

Route::get('/seguimiento', function () {
    return view('seguimiento');
});


    Route::get('/products/chat', function () {
    return view('products.chat');
});

  Route::get('/chat', function () {
        return view('users.chat', [
            'user' => Auth::user()->load('products')
        ]);
    })->name('chat');

 Route::get('/products/chat2', function () {
    return view('products.chat2');
});

  Route::get('/chat2', function () {
        return view('users.chat2', [
            'user' => Auth::user()->load('products')
        ]);
    })->name('chat2');
    

    Route::get('/carrito', function () {
        return view('products.carrito');
    });
