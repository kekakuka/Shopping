<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use App\Souvenir;
use Illuminate\Http\Request;
use Session;

class ShoppingCartController extends Controller
{
    public function AddToCart(Request $request,$id){



         $oldCart=Session::has('cart')?Session::get('cart'):null;

        $shoppingCart=new ShoppingCart($oldCart);
        $souvenir=Souvenir::find($id);

        $shoppingCart->addToCart($souvenir);

       Session::put('cart',$shoppingCart);


//        $data = [
////            'cart' => $shoppingCart,
////            're' => $request,
////            'session' => Session::get('cart'),
////            ];
//dd(Session::get('cart'));
        return redirect()->back();
    }

    public function ClearCart(){
        Session::forget('cart');
        return redirect()->back();
    }
    public function RemoveFromCart(Request $request,$id){



        $oldCart=Session::has('cart')?Session::get('cart'):null;

        $shoppingCart=new ShoppingCart($oldCart);
        $souvenir=Souvenir::find($id);

        $shoppingCart->removeFromCart($souvenir);

        Session::put('cart',$shoppingCart);

        if ($shoppingCart->cartItems->isEmpty()){

            Session::forget('cart');
        }
        return redirect()->back();
    }
}


