<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class TotalProductsWidget extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Products', Product::count())
                ->icon('heroicon-o-archive-box')
                ->color('success'),
        ];
    }
}