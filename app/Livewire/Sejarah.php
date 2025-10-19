<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Sejarah extends Component
{
    #[Title('Sejarah')]
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.sejarah');
    }
}
