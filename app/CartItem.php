<?php

namespace App;

use App\Category;
use App\Souvenir;

class CartItem
{
    public $cartId;
    public $count;
    public $price;
    public $souvenir;
    public $category;
    public function __construct($count,$souvenir)
    {
        $this->count=$count;
        $this->souvenir=$souvenir;
        $this->cartId=$souvenir->id;
        $this->price=$souvenir->Price;
        $this->category= Category::find($souvenir->category_id)->Name;
    }
}
