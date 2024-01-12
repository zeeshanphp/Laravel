<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;


class Customer extends Authenticatable implements CanResetPassword
{
    use HasFactory, Notifiable;
    protected $table = "customers";
    protected $primaryKey = "custId";

    protected $fillable = [
        "fullname",
        "username",
        "email",
        "password",
        "phone"
    ];
}
