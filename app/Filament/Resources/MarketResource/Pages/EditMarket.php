<?php

namespace App\Filament\Resources\MarketResource\Pages;

use App\Filament\Resources\MarketResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMarket extends EditRecord
{
    protected static string $resource = MarketResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
