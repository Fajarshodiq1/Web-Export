<?php

namespace App\Filament\Widgets;

use App\Models\ProductClick;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class TotalClicksChart extends ChartWidget
{
    protected static ?string $heading = 'Total Clicks Over Time';
    protected static ?int $sort = 2; // Posisi di dashboard

    protected function getData(): array
    {
        // Ambil jumlah klik per hari sejak pertama kali ada data
        $clicks = ProductClick::selectRaw('DATE(created_at) as date, SUM(click_count) as total_clicks')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Total Clicks',
                    'data' => $clicks->pluck('total_clicks')->toArray(),
                ],
            ],
            'labels' => $clicks->pluck('date')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line'; // Bisa diubah ke 'bar' atau 'pie' jika ingin
    }
}