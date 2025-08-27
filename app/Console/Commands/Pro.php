<?php

namespace App\Console\Commands;

use App\Events\ChangeProgressValue;
use Illuminate\Console\Command;

class Pro extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:pro {--prores=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
      $prores =  $this->option('prores');
      broadcast(new ChangeProgressValue($prores));
    }
}
