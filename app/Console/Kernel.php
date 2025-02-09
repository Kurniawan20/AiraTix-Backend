<?php

namespace HiEvents\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        include base_path('routes/console.php');
    }

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('orders:release-expired')
                ->everyFiveMinutes()
                ->withoutOverlapping();
    }
}
