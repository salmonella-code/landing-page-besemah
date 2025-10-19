<?php

namespace App\Filament\Resources\MedicalSpecialistResource\Pages;

use App\Filament\Resources\MedicalSpecialistResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedicalSpecialist extends EditRecord
{
    protected static string $resource = MedicalSpecialistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
