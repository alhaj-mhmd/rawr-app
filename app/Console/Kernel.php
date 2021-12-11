<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        $schedule->call(function () {
            DB::insert('INSERT INTO `rewards` ( `user_id`, `reward`) SELECT referrals.referrer_id , (amount * tiers.reward / 100) AS referrer_reward FROM purchases INNER JOIN referrals ON referrals.user_id = purchases.user_id LEFT JOIN tiers on tiers.id = referrals.tier_id WHERE date BETWEEN ( CURRENT_DATE() - INTERVAL 1 DAY) AND CURRENT_DATE');
        })->dailyAt('03:00');
       //everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
