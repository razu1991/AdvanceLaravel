<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class rename extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bitfume:rename {from : Name of Table you want to rename} {to : Name you want to give now}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'rename table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $from = $this->argument('from');
        $to = $this->argument('to');
        DB::statement("ALTER TABLE $from RENAME TO $to");
        $this->info("table $from is now rename to $to");
    }

}
