<?php

namespace App\Livewire;

use App\Models\MedicalSpecialist as ModelsMedicalSpecialist;
use Livewire\Component;

class MedicalSpecialist extends Component
{
    public function render()
    {
        $listDokter = ModelsMedicalSpecialist::all();
        return view('livewire.medical-specialist', [
            'listDokter' => $listDokter
        ]);
    }
}
