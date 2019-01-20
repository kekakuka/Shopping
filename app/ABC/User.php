<?php

namespace App;


use ErrorException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;


class User extends Authenticatable
{
    use Notifiable;
    protected $fillable=['EmailAddress','Password','Address','HomePhoneNumber','WorkPhoneNumber',
        'MobilePhoneNumber','LastName','FirstName','Token'];
    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Order');
    }
    protected $hidden = [
        'Password', 'remember_token',
    ];


public  function sendEmail(){

    $to = $this->EmailAddress;
    $subject = 'Confirm your email';
    $verifyUrl = url('/verify/'.$this->Token);
    $message = 'Please confirm your account by clicking this link: <a href= '.$verifyUrl.'>link</a >';
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <leil10@myunitec.ac.nz>' . "\r\n";
    try {
        mail($to, $subject, $message, $headers);
    } catch (\Exception $e) {

    }

    Log::info('System has sent a verified email to user: '. $this->EmailAddress);

}

}