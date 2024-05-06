<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;

class BaseController extends Controller
{
    public function index(){
        $collections = Collection::all()->pluck('landing_description', 'name')->toArray();
        return view('livewire.landing.landing',[
            'collections' => $collections,
        ])->layout('layouts.appd');
    }

    public function shop(string $collectionName){
        $collections = Collection::where('name', $collectionName);
        return view('components/shop/shop', [
            'collections' => $collections,
        ]);
    }
}
