<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $fillable = [
        'url', // Add any other fields you want to be mass assignable
        'product_id',
        // ...
    ];
}
