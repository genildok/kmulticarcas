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

$this->get('/product/sale','Site\ProductController@sale')->name('product.sale');
$this->get('product/new','Site\ProductController@new')->name('product.new');
$this->get('/product/search','Site\ProductController@search')->name('product.search');
$this->get('/product/brand/{q}','Site\ProductController@brand')->name('product.brand');

/*$this->get('/site/contact','Site\SiteController@contact')->name('site.contact');*/

$this->resources([
        '/site' => 'Site\SiteController',
        '/product' =>'Site\ProductController'
    ]);
