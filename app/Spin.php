<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spin extends Model
{
    public function who()
    {
        return $this->belongsTo(User::class);
    }
    public function whom()
    {
        return $this->belongsTo(User::class);
    }
}
