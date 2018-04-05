<?php

namespace Illuminate\Database\Migrations;

abstract class Migration
{
    /**
     * The name of the database connection to use.
     *
     * @var string
     */
    protected $connection;

    /**
<<<<<<< HEAD
=======
     * Enables, if supported, wrapping the migration within a transaction.
     *
     * @var bool
     */
    public $withinTransaction = true;

    /**
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     * Get the migration connection name.
     *
     * @return string
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
