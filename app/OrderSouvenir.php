<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Souvenir;

class OrderSouvenir extends Model
{
    protected $fillable=['order_id','souvenir_id',
        'UnitPrice','Quantity'];

    public function souvenir(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Souvenir', 'souvenir_id','id');
    }

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Order', 'order_id','id');
    }
}
