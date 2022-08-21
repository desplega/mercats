<?php

namespace App\Filament\Resources\MarketResource\Pages;

use App\Filament\Resources\MarketResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMarket extends CreateRecord
{
    protected static string $resource = MarketResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
