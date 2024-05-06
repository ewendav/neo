<?php

namespace App\Livewire\Landing;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Landing extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.landing.landing');
    }
}
