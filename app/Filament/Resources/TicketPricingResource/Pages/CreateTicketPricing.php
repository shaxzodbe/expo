<?php

namespace App\Filament\Resources\TicketPricingResource\Pages;

use App\Filament\Resources\TicketPricingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTicketPricing extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = TicketPricingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
