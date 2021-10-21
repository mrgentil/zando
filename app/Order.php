<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['first_name', 'last_name',
        'company_name', 'email', 'phone', 'address', 'city', 'user_id', 'comment', 'phone_id', 'active'];

    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }
}
