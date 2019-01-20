<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable=['EmailAddress','Address','HomePhoneNumber','WorkPhoneNumber',
        'MobilePhoneNumber','LastName','FirstName'];
    public function souvenirs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Souvenir');
    }
}
