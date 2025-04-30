<?php

namespace App\Filament\Resources\TicketPricingResource\Pages;

use App\Filament\Resources\TicketPricingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicketPricing extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = TicketPricingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
