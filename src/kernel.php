<?php

namespace coroxx\evilanalytics;

use coroxx\evilanalytics\Models\Call;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Http;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $data = Call::whereDate('created_at', '>=', now()->subDay(1))->get();

            foreach ($data as $object) {
                $provider = json_decode(Http::withUserAgent('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15')->get("https://rdap.arin.net/registry/ip/$object->ip")->body())->name;
                if (preg_match(
                    '(microsoft|ovh|DIGITALOCEAN|AMAZO-ZPDX|MSFT|qwant|TencentCloud|Unicom|liquidweb|VIAWEST-BLK|GOOGL|SHINJIRU|CDN77|EONSCOPE|EstNOC-Malaysia|CONTABO|AMAZON|ALICLOUD|Baidu|UK2-INFRA|Dream|GoDaddy|Hetzner|Linode|Facebook|Opera|Zscaler|Nokia|Kaspersky)i',
                    $provider
                ) === 1) {
                    $object->delete();
                }
            }
        })->everyMinute();
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
