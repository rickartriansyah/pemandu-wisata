<?php

namespace App\Filament\Resources\TouristResource\Pages;

use App\Filament\Resources\TouristResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTourist extends EditRecord
{
    protected static string $resource = TouristResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
