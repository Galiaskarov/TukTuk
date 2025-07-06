<?php

namespace App\Filament\Resources\AdvantagResource\Pages;

use App\Filament\Resources\AdvantagResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdvantag extends EditRecord
{
    protected static string $resource = AdvantagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
