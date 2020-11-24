<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Tracking extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'track';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for Tramigo';

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
     * @return int
     */
    public function handle()
    {
        echo "ID\t\tName\t\tLocation\t\tReport Date\n";
        $results = DB::select('SELECT device.name AS name, report.device_id AS id, 
            report.location AS Location, report.date_created AS report_date FROM report 
            JOIN device ON device.id = report.device_id');
        foreach($results as $result)
        {
            echo $result->id."\t\t".$result->name."\t\t".$result->Location."\t\t".$result->report_date."\n";
        }
        return 0;
    }
}
