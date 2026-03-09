<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SingUp extends Model
{
    protected $table = 'sing_ups';
    protected $fillable = [
        'Order_id',
        'first_name',
        'last_name',
        'phone',
        'address',
        'country',
        'zip_code',
        'email',
        'password',
    ];
}
