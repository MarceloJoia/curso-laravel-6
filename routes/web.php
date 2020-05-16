<?php

Route::resource('products', 'ProductController');
// Route::resource('products', 'ProductController')->middleware('auth');

/*
// Deletar
Route::delete('products/{id}', 'productController@destroy')->name('products.destroy');
// Editar
Route::put('products/{id}', 'productController@update')->name('products.update');
// Editar
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
// Cadastrar
Route::get('products/create', 'ProductController@create')->name('products.create');
// Exibe 1(um) produto pelo ID
Route::get('products/{id}', 'ProductController@show')->name('products.show');
// Exibe todos os produtos
Route::get('products', 'ProductController@index')->name('products.index');
// Cadastrar
Route::post('products', 'ProductController@store')->name('products.store');
*/

Route::get('/login', function () {
    return 'Login';
})->name('login');

Route::get('/', function() {
    return view('welcome');
});
