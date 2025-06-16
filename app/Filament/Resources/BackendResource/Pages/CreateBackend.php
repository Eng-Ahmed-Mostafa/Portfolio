<?php

namespace App\Filament\Resources\BackendResource\Pages;

use App\Filament\Resources\BackendResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBackend extends CreateRecord
{
    protected static string $resource = BackendResource::class;
}
