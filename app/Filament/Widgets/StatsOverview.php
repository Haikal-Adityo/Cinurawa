<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Portofolio;
use App\Models\Post;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Portofolio Count', Portofolio::count()),
            Stat::make('Published Portofolio', Portofolio::where('is_published', true)->count()),
            Stat::make('Unpublished Portofolio', Portofolio::where('is_published', false)->count()),

            Stat::make('Post Count', Post::count()),
            Stat::make('Published Post', Post::where('is_published', true)->count()),
            Stat::make('Unpublished Post', Post::where('is_published', false)->count()),

        ];
    }
}
