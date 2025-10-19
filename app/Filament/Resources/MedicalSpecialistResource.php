<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicalSpecialistResource\Pages;
use App\Filament\Resources\MedicalSpecialistResource\RelationManagers;
use App\Models\MedicalSpecialist;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedicalSpecialistResource extends Resource
{
    protected static ?string $model = MedicalSpecialist::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                Forms\Components\TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Section::make('Thumbnail'),
                Forms\Components\FileUpload::make('thumbnail')
                        ->disk(config('filesystems.default'))
                        ->directory('spesialis/thumbnail')
                        ->visibility('public')
                        ->label('')
                        ->image()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->label('Jabatan')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->disk(config('filesystems.default')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedicalSpecialists::route('/'),
            'create' => Pages\CreateMedicalSpecialist::route('/create'),
            'edit' => Pages\EditMedicalSpecialist::route('/{record}/edit'),
        ];
    }
}
