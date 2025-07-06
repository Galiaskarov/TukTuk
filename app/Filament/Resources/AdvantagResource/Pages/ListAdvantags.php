<?php

namespace App\Filament\Resources\AdvantagResource\Pages;

use App\Filament\Resources\AdvantagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdvantags extends ListRecords
{
    protected static string $resource = AdvantagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
