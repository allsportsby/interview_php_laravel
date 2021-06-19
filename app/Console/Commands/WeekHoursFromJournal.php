<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Psr\Http\Message\ResponseInterface;

/**
 * Such implementations you can often see in laravel when "it is needed to write quickly and dirty".
 * Anyway, to create a clean code, you cannot just do it from scratch, you need to understand context.
 *
 * The algorithm itself should summarize range of times in output of "/api/third_party_suppliers".
 * Please, run "php artisan serve" before you start any tests.
 *
 * Class WeekHoursFromJournal
 * @package App\Console\Commands
 */
class WeekHoursFromJournal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'journal:week-hours';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'We calculate summary of working hours during week found in weekly calendar of incoming request.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param ResponseInterface $response
     * @return int
     */
    protected function calculateAmountOfHours(ResponseInterface $response) {
        Log::debug("response data:", ['body' => $response->getBody()->getContents()]);
        throw new \LogicException(__FUNCTION__ . " is not implemented");
        return NaN;
    }

    protected function saveStatistics(ResponseInterface $response, int $hours) {
        Log::debug("do not spend time here - take a break and enjoy weather.", ['your' => __FUNCTION__]);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Log::debug("refactor zone started.", ['remove' => 'me']);
        $client = new Client(['base_uri' => 'http://localhost:8000']);
        $response = $client->get('/api/third_party_suppliers', [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
        Log::info("Request status of suppliers", ['status' => $response->getStatusCode()]);
        $hours = $this->calculateAmountOfHours($response);
        Log::debug("refactor zone finished.", ['remove' => 'me']);
        $this->saveStatistics($response, $hours);
    }
}
