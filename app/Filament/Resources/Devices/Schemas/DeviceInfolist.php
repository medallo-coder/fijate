<?php

namespace App\Filament\Resources\Devices\Schemas;
use Filament\Infolists\Components\ImageEntry;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DeviceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('imagenes')
                    ->label('Imagenes'),
                TextEntry::make('equipo'),
                TextEntry::make('seriales'),
                TextEntry::make('estado'),
                TextEntry::make('accesorios'),
                TextEntry::make('observacion')
                    ->placeholder('-'),
                TextEntry::make('firma')
                    ->placeholder('-'),
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('fecha_entrega')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
