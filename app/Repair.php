<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Repair extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'type', 'serial', 'organisation'];
}
