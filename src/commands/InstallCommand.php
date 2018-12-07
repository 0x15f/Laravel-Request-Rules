<?php
namespace LynnDigital\RequestRules\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rule:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Request Rules package';

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
        mkdir(root_dir() . '/app/RequestRules/');

        $this->info('Installed!');
    }
}
