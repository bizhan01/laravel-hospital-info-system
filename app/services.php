<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $fillable = ['name', 'desc', 'photo', 'user_id'];
}
