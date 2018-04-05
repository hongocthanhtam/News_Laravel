<?php

namespace Illuminate\Foundation\Console;

use Illuminate\Console\Command;

class UpCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bring the application out of maintenance mode';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
<<<<<<< HEAD
        @unlink($this->laravel->storagePath().'/framework/down');
=======
        @unlink(storage_path('framework/down'));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        $this->info('Application is now live.');
    }
}
