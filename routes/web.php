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

/* Route site*/
$this->get('/','Site\SiteController@index')->name('site.index'); 
$this->get('/contact','Site\SiteController@contact')->name('site.contact');
$this->post('/contact','Site\SiteController@send_contact')->name('site.contact');

/*Route product*/ 
$this->get('/product/sale','Site\ProductController@sale')->name('product.sale');
$this->get('product/new','Site\ProductController@new')->name('product.new');
$this->get('/product/search','Site\ProductController@search')->name('product.search');
$this->get('/product/brand/{q}','Site\ProductController@brand')->name('product.brand');

$this->resources([
        '/product' =>'Site\ProductController'
    ]);
