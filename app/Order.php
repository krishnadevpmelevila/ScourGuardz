<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name','landmark','area','contactPreference', 'finalDate','requirement', 'email', 'phone','address'
    ];
}
