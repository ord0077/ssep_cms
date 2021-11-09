<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'mobile',
        'cnic',
        'postal_address',
        'city',
        'title',
        'type',
        'details',
    ];


}
