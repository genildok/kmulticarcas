<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        Form::macro('btnDeleteProduct',function(){

            return "
                        <a href='". route('painel.product.delete') ."' class='btn bg-blue-gradient'>
                        <i class='fa fa-arrow-circle-o-left fa-1x'></i> Cancelar</a>

                        <button type='submit' class='btn bg-red-gradient'>
                        <i class='fa fa-trash-o fa-1x'></i> Remover</button>";
        });

        Form::macro('btnConfirmOrder',function(){

            return "
                        <a href='". route('painel.order.list') ."' class='btn bg-blue-gradient'>
                        <i class='fa fa-arrow-circle-o-left fa-1x'></i> Voltar</a>

                        <button type='submit' class='btn bg-green-gradient btn-md'>
                        <i class='fa fa-check-circle fa-1x'></i> Aceitar</button>";
        });
        Form::macro('btnOrderBack',function(){

            return "
                        <a href='". route('painel.order.list') ."' class='btn bg-blue-gradient'>
                        <i class='fa fa-arrow-circle-o-left fa-1x'></i> Voltar</a>";
        });

        Form::macro('btnOrderCancel',function(){

            return "
                <button type='submit' class='' style='background:none;border:none;border-radius:6px;color:#000'>
                    <i class='fa fa-times-circle-o fa-2x text-red'></i>
                </button>";
        });

        Form::macro('deleteSupplier',function(){

            return "
                        <button type='submit' class='' style='background:none;border:none;border-radius:6px;color:#000'>
                             <i class='fa fa-trash-o fa-2x text-red'></i>
                        </button>
                    ";
        });

        Form::macro('customColor',function($colors){

            return ' <label for="color" class="btn btn-primary" style="width:80px;margin-bottom:10px">'. $colors .'    
                        <input type="radio" name="color" value='.$colors.'>
                     </label>';
        });

        Form::macro('customSize',function($size){
                   
                    return ' <label for="color" class="btn btn-primary" style="width:80px;margin-bottom:10px">'. $size .'    
                                <input type="checkbox" name="size[]" value='.$size.'>
                            </label>';
        });
                
        
        Form::macro('customEditSize',function($size,$feature){
          
                
                if($feature->size == $size)
                {
                    return ' <label for="size" class="btn btn-primary active" style="width:80px;margin-bottom:10px">'. $size .'    
                                <input type="radio" name="size" value='.$size.' checked="">
                            </label>';
                }

            return ' <label for="size" class="btn btn-primary" style="width:80px;margin-bottom:10px">'. $size .'    
                           <input type="radio" name="size" value='.$size.'>
                     </label>';
           
        });

        Form::macro('customEditColor',function($color,$feature){
                          
                if($feature->color == $color)
                {
                    return ' <label for="color" class="btn btn-primary active" style="width:80px;margin-bottom:10px">'. $color .'    
                                <input type="radio" name="color" value='.$color.' checked="">
                            </label>';
                }
                
            return ' <label for="color" class="btn btn-primary" style="width:80px;margin-bottom:10px">'. $color .'    
                           <input type="radio" name="color" value='.$color.'>
                     </label>';
           
        });

    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
