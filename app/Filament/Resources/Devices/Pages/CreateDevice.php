<?php

namespace App\Filament\Resources\Devices\Pages;

use App\Filament\Resources\Devices\DeviceResource;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;

class CreateDevice extends CreateRecord
{
    protected static string $resource = DeviceResource::class;
    protected static bool $canCreateAnother = false;
}
