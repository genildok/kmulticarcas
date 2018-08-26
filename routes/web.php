<?php


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 

/* Route site*/
Route::prefix('/')->group(function(){
    $this->get('/','Site\SiteController@index')->name('site.index'); 
    $this->get('/contact','Site\SiteController@contact')->name('site.contact');
    $this->post('/contact','Site\SiteController@send_contact')->name('site.contact');
    $this->get('/404','Site\SiteController@error404')->name('error.404');

       /*Route product*/ 
       Route::prefix('product')->group(function(){
        $this->get('/sale','Site\ProductController@sale')->name('product.sale');
        $this->get('/new','Site\ProductController@new')->name('product.new');
        $this->post('/search','Site\ProductController@search')->name('product.search');
        $this->get('/brand/{q}','Site\ProductController@brand')->name('product.brand');
        $this->get('/{id}','Site\ProductController@show')->name('product.show');
    });

   

});





// Route painel
Route::prefix('painel')->group(function(){



    $this->get('/produto/remover','Painel\ProductController@index')->name('painel.product.delete');
    $this->post('/produto/remover','Painel\ProductController@delete')->name('painel.product.delete.submit');
    $this->get('/produto/remover/{id}','Painel\ProductController@remove')->name('painel.product.remove');
  
    $this->get('/produto/editar/{id}/{id_feature}','Painel\ProductController@edit')->name('painel.product.edit');
    $this->post('/produto/editar','Painel\ProductController@update')->name('painel.product.update');
    $this->get('/produto/editar','Painel\ProductController@index')->name('painel.product.list');
    
    $this->get('/produto/novo','Painel\ProductController@create')->name('painel.product.create');
    $this->post('/produto','Painel\ProductController@store')->name('painel.product.store');
    
    $this->get('/pedido/confirmar/{id}','Painel\OrderController@show')->name('painel.order.view');
    $this->post('/pedido/confirmar','Painel\OrderController@orderConfirm')->name('painel.order.confirm');
    $this->get('/pedido/listar','Painel\OrderController@index')->name('painel.order.list');
    $this->get('/pedido/cancelar','Painel\OrderController@index')->name('painel.order.list_cancel');
    $this->post('/pedido/cancelar','Painel\OrderController@orderCancel')->name('painel.order.cancel');
    $this->post('/pedido/editar/{id}','Painel\OrderController@index')->name('painel.order.edit');
    
    $this->get('/fornecedor/novo','Painel\SupplierController@create')->name('painel.supplier.create');
    $this->post('/fornecedor/novo','Painel\SupplierController@store')->name('painel.supplier.store');
    
    $this->get('/fornecedor/editar/{id}','Painel\SupplierController@edit')->name('painel.supplier.edit');
    $this->post('/fornecedor/editar','Painel\SupplierController@update')->name('painel.supplier.update');
    $this->get('/fornecedor/editar','Painel\SupplierController@index')->name('painel.supplier.list');
  
    $this->get('/fornecedor/remover','Painel\SupplierController@index')->name('painel.supplier.delete');
    $this->post('/fornecedor/remover','Painel\SupplierController@destroy')->name('painel.supplier.destroy');

    $this->get('/marca/listar','Painel\BrandController@index')->name('painel.brand.list');
    $this->get('/marca/novo','Painel\BrandController@create')->name('painel.brand.form');
    $this->post('/marca/novo','Painel\BrandController@store')->name('painel.brand.post');
    $this->post('/marca/remover','Painel\BrandController@destroy')->name('painel.brand.delete');
  
    $this->get('/','Painel\PainelController@index')->name('painel.dashboard');

      // Route login admin

      $this->get('/login','Auth_Admin\AdminLoginController@showLoginForm')->name('admin.login');
      $this->post('/login','Auth_Admin\AdminLoginController@login')->name('admin.login.submit');
      $this->post('/logout','Auth_Admin\AdminLoginController@logout')->name('admin.logout.submit');

  });



