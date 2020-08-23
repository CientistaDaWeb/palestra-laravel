<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::get(
    '/products',
    function () {
        $products = \App\Models\Products::all();
        return view('products.list', compact('products'));
    }
);

Route::get(
    '/products/with',
    function () {
        $products = \App\Models\Products::with('categories')->get();
        return view('products.list', compact('products'));
    }
);

Route::get(
    '/ping',
    function () {
        echo '<h1>Pong</h1>';
    }
);
