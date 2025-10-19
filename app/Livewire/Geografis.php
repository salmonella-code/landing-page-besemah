<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Geografis extends Component
{
    #[Title('letak geografis')]
    #[Layout('layouts.guest')]
    
    public function render()
    {
        return view('livewire.geografis');
    }
}
