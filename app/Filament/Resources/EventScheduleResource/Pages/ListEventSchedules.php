<?php

namespace App\Filament\Resources\EventScheduleResource\Pages;

use App\Filament\Resources\EventScheduleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventSchedules extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = EventScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
