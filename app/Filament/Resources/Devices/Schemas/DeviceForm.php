<?php

namespace App\Filament\Resources\Devices\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class DeviceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('imagenes')
                        ->label('Imagenes')
                        ->image()
                        ->imageEditor()
                        ->disk('public')
                        ->circleCropper()
                        ->avatar()
                        ->maxSize(1024),

                TextInput::make('equipo')
                    ->required(),
                TextInput::make('seriales')
                    ->required(),
                TextInput::make('estado')
                    ->required(),
                TextInput::make('accesorios')
                    ->required(),
                TextInput::make('observacion'),
                TextInput::make('firma'),

                DateTimePicker::make('fecha_entrega'),
            ]);
    }
}
