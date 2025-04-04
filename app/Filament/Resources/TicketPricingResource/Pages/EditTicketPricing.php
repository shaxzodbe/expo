<?php

namespace App\Filament\Resources\TicketPricingResource\Pages;

use App\Filament\Resources\TicketPricingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicketPricing extends EditRecord
{
    protected static string $resource = TicketPricingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
