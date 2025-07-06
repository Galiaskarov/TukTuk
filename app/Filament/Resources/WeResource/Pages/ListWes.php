<?php

namespace App\Filament\Resources\WeResource\Pages;

use App\Filament\Resources\WeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWes extends ListRecords
{
    protected static string $resource = WeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
