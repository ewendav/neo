<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    public function sousCollections(){
        return $this->hasMany(SousCollection::class);
    }

    public function products(){
        return $this->hasMany(Product::class, "collection_id", "id");
    }



    public function sousCategories(){
        return $this->hasOneThrough(SousCategorie::class);
    }

}
