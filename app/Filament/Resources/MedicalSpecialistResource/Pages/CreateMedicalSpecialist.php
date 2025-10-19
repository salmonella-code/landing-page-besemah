<?php

namespace App\Filament\Resources\MedicalSpecialistResource\Pages;

use App\Filament\Resources\MedicalSpecialistResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMedicalSpecialist extends CreateRecord
{
    protected static string $resource = MedicalSpecialistResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['created_by'] = auth()->user()->name;
        return $data;
    }
}
