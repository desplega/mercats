<?php

namespace App\Filament\Resources\MarketResource\Widgets;

use App\Models\Market;
use App\Models\Owner;
use App\Models\Store;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class MarketStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Markets', Market::all()->count()),
            Card::make('All Stores', Store::all()->count()),
            Card::make('All Owners', Owner::all()->count()),
        ];
    }
}
