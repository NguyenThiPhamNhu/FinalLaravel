<?php

namespace App\Providers;

		
		
use Illuminate\Support\Facades\Schema;			
use App\Guitar;			
use Session;			
use App\Cart;			

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){		
            $loai_sp = Guitar::all();		
                    
            $view->with('loai_sp',$loai_sp);		
          });		
          
        view()->composer('header',function($view){		
          if(Session('cart')){		
               $oldCart = Session::get('cart');		
               $cart = new Cart($oldCart);		
               $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=> $cart->totalPrice,'totalQty'=> $cart->totalQty]);		
            }		
        });			
    }
}
