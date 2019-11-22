<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DBDescribeTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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
    public function handle()
    {
        #Comentei pq o supervisor fica subindo toda hora e o arquivo fica gigante
        #como já testei e vi que fucniona tá tranquilo
//        do {
//            \Log::info("Command --- initial");
//        } while (true);
    }
}
