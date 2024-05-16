<?php

namespace App\Filament\Resources\TouristResource\Pages;

use App\Filament\Resources\TouristResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTourists extends ListRecords
{
    protected static string $resource = TouristResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
