<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;


class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema


            ->components([
                TextInput::make('nombres')
                    ->required(),
                TextInput::make('apellidos')
                    ->required(),
                Select::make('tipo_documento')
                    ->options(['cc' => 'CC', 'ppt' => 'PPT', 'ce' => 'CE']),
                TextInput::make('documento')
                    ->numeric(),
                TextInput::make('cargo'),
                TextInput::make('proceso'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->required(),
            ]);
    }
}
