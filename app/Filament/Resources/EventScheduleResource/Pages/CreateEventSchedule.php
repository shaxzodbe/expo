<?php

namespace App\Filament\Resources\EventScheduleResource\Pages;

use App\Filament\Resources\EventScheduleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEventSchedule extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = EventScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
