<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\getAgGameRecord::class,
        \App\Console\Commands\getMgGameRecord::class,
        \App\Console\Commands\getBbinGameRecord::class,
        \App\Console\Commands\getTcgGameRecord::class,
        \App\Console\Commands\getOgGameRecord::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
         $schedule->command('ag:game_record')
                  ->everyFiveMinutes();
        $schedule->command('mg:game_record')
            ->everyFiveMinutes();
        $schedule->command('bbin:game_record')
            ->everyFiveMinutes();
        $schedule->command('tcg:game_record')
            ->everyTenMinutes();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
