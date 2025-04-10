<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vendorRequests extends Model
{
    protected $fillable = [
        'userID',
        'fullName',
        'product',
        'amount',
        'price',
        'note',
        'mobile',
        'email',
        'address',
        'status',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
