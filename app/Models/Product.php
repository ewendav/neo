<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductGroups;
use App\Models\SousCategorie;
use App\Models\SousCollection;
use App\Models\Collection;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ["collection_id" ,
    "sous_collection_id",
    "sous_categorie_id" ,
    "name",
    "description" ,
    "image" ,
    "price" ,
    "active",
    "group_id",
        "description_secondaire"
        ,        ];

    public function images(){
        return $this->hasMany(Image::class);
    }


    public function sousCategorie()
    {
        return $this->belongsTo(SousCategorie::class, 'sous_categorie_id');
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class, 'collection_id');
    }

    public function sousCollection()
    {
        return $this->belongsTo(SousCollection::class, 'sous_collection_id');
    }

    public function group()
    {
        return $this->belongsTo(ProductGroups::class, 'group_id', 'group_id');
    }

}
