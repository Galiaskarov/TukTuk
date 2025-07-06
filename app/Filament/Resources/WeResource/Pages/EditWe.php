<?php

namespace App\Filament\Resources\WeResource\Pages;

use App\Filament\Resources\WeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWe extends EditRecord
{
    protected static string $resource = WeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
