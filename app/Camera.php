<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    protected $fillable = [
        'label',
        'ip',
        'port',
        'user',
        'password'
    ];
}
