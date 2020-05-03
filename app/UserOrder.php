<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    public function orders() {
        return $this->hasMany(Order::class);
    }
}
