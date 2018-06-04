<?php


/* Route site*/
Route::prefix('/')->group(function(){
    $this->get('/','Site\SiteController@index')->name('site.index'); 
    $this->get('/contact','Site\SiteController@contact')->name('site.contact');
    $this->post('/contact','Site\SiteController@send_contact')->name('site.contact');
});

/*Route product*/ 
Route::prefix('product')->group(function(){
    $this->get('/product/{id}','Site\ProductController@show')->name('product.show');
    $this->get('/product/sale','Site\ProductController@sale')->name('product.sale');
    $this->get('product/new','Site\ProductController@new')->name('product.new');
    $this->get('/product/search','Site\ProductController@search')->name('product.search');
    $this->get('/product/brand/{q}','Site\ProductController@brand')->name('product.brand');{}
});

// $this->resources([
//         '/product' =>'Site\ProductController'
//     ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
