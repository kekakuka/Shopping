<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class ShoppingCart
{
    public $cartItems;
    public function __construct($oldCart)
    {
        if ($oldCart){
            $this->cartItems=$oldCart->cartItems;
        }
        else{
        $this->cartItems=new Collection();}
    }
    public function addToCart($souvenir){
        $newCartItem=new CartItem(1,$souvenir);
        if ($this->cartItems->isNotEmpty()){
            foreach ($this->cartItems as $cartItem){
                if ($newCartItem->cartId===$cartItem->cartId){
                    $cartItem->count++;
                    $newCartItem=$cartItem;
                    break;
                }
            }
        }
        $this->cartItems->put($newCartItem->cartId,$newCartItem);
    }
    public function removeFromCart($souvenir){
        $newCartItem=new CartItem(1,$souvenir);

            foreach ($this->cartItems as $cartItem){
                if ($newCartItem->cartId===$cartItem->cartId){
                    $cartItem->count--;
                    $newCartItem=$cartItem;
                    break;
                }
        }
        if ($newCartItem->count==0)
         unset( $this->cartItems[$newCartItem->cartId]);
            else
        $this->cartItems->put($newCartItem->cartId,$newCartItem);
    }


public function Quantity(){
        $quantity=0;
    if ($this->cartItems->isNotEmpty()){
        foreach ($this->cartItems as $cartItem){
          $quantity+=$cartItem->count;
        }
    }
    return $quantity;
}

    public function SubTotal(){
        $subTotal=0;
        if ($this->cartItems!=null){
            foreach ($this->cartItems as $cartItem){
                $subTotal+=$cartItem->count*$cartItem->price;
            }
        }
        return $subTotal;
    }
    public function Gst(){
        return $this->SubTotal()*15/100;
    }
    public function Total(){

        return $this->Gst()+$this->SubTotal();
    }




}
