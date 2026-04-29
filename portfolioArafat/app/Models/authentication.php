<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class authentication extends Model
{
    protected $table= 'authentications';
    protected $fillable= ['name','email','number','password'];
}
