<?php

namespace App\Livewire;

use App\Models\Gallery as ModelsGallery;
use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        $listGallery = ModelsGallery::all();
        $galleryLeft = $listGallery->slice(0, 3);  // ambil 3 pertama
        $galleryRight = $listGallery->slice(3);    // sisanya
        return view('livewire.gallery', [
            'galleryLeft' => $galleryLeft,
            'galleryRight' => $galleryRight,
        ]);
    }
}
