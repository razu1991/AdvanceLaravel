<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\User;

class Hello extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Hello {name=Razu} {--L|lastname=myDefault}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is make command';

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
//        $name= $this->argument('name');
//        $lname= $this->option('lastname');
//        $this->info($name." ".$lname);
//        $this->comment(Inspiring::quote());
        $header = ['Name', 'Email'];
        
        $user = User::select('name','email')->get();
        $this->table($header,$user);
//        $name = $this->secret('What is your name');
//        $confirm = $this->confirm('Do You Want to Print your name');
//        if ($confirm) {
//            $this->info($name);
//        }
    }

}
