<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroups extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'group_id', // Add any other fields you want to be mass assignable
        'product_id',
        'taille',
        'variante','name'
        // ...
    ];


    public function groupe(){
        return $this->hasOne(Groups::class, 'id', 'group_id');
    }

    public function product()
    {
        return $this->hasOne(Product::class,
            'id',
            'product_id')->get()[0];
    }

    public function tailles()
    {
        return $this->hasOne(Taille::class, 'id', 'taille');
    }

    public function variantes()
    {
        return $this->hasOne(Variante::class, 'id', 'variante');
    }


}
