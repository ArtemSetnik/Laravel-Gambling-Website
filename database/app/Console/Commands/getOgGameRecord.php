<?php

namespace App\Console\Commands;

use App\Http\Controllers\Api\OgController;
use Illuminate\Console\Command;

class getOgGameRecord extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'og:game_record';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(OgController $controller)
    {
        $controller->getBettingRecord();
    }
}
