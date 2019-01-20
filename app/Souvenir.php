<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;
use App\Supplier;

class Souvenir extends Model
{
    protected $fillable=['supplier_id','category_id',
        'Price','Name','PathOfFile','Description'];



    public function supplier(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Supplier', 'supplier_id','id');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Category', 'category_id','id');
    }
    public function order_souvenirs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\OrderSouvenir');
    }

}
