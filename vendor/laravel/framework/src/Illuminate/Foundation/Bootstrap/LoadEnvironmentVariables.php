<?php

namespace Illuminate\Foundation\Bootstrap;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;
use Symfony\Component\Console\Input\ArgvInput;
use Illuminate\Contracts\Foundation\Application;

class LoadEnvironmentVariables
{
    /**
     * Bootstrap the given application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {
        if ($app->configurationIsCached()) {
            return;
        }

        $this->checkForSpecificEnvironmentFile($app);

        try {
            (new Dotenv($app->environmentPath(), $app->environmentFile()))->load();
        } catch (InvalidPathException $e) {
            //
        }
    }

    /**
     * Detect if a custom environment file matching the APP_ENV exists.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    protected function checkForSpecificEnvironmentFile($app)
    {
        if ($app->runningInConsole() && ($input = new ArgvInput)->hasParameterOption('--env')) {
<<<<<<< HEAD
            $this->setEnvironmentFilePath(
                $app, $app->environmentFile().'.'.$input->getParameterOption('--env')
            );
=======
            if ($this->setEnvironmentFilePath(
                $app, $app->environmentFile().'.'.$input->getParameterOption('--env')
            )) {
                return;
            }
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        }

        if (! env('APP_ENV')) {
            return;
        }

        $this->setEnvironmentFilePath(
            $app, $app->environmentFile().'.'.env('APP_ENV')
        );
    }

    /**
     * Load a custom environment file.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @param  string  $file
<<<<<<< HEAD
     * @return void
=======
     * @return bool
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     */
    protected function setEnvironmentFilePath($app, $file)
    {
        if (file_exists($app->environmentPath().'/'.$file)) {
            $app->loadEnvironmentFrom($file);
<<<<<<< HEAD
        }
=======

            return true;
        }

        return false;
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    }
}
