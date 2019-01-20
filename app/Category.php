<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['Name','Description'];
    public function souvenirs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Souvenir');
    }
}
