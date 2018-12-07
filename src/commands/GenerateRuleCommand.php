<?php
namespace LynnDigital\RequestRules\Commands;

use Illuminate\Console\Command;

class GenerateRuleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'request-rule:generate {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate scaffolding for a request rule.';

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
        $name = $this->argument('name');

        file_put_contents(root_dir() . '/app/RequestRules/' . $name . '.php', str_replace('{NAME}', $name, file_get_contents('../stubs/Rule.stub')));

        $this->info('Rule generated');
    }
}
