<?php

namespace App\Filament\Resources\CountdownResource\Pages;

use App\Filament\Resources\CountdownResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCountdown extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = CountdownResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
