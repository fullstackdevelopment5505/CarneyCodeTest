<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function subscription()
    {
        return $this->belongsTo('App\Models\Subscription');
    }
}
