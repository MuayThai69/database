<?php

namespace Illuminate\Database\Events;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Contracts\Database\MigrationEvent as MigrationEventContract;

abstract class MigrationEvent implements MigrationEventContract
{
    /**
     * An instance of the migration.
     *
     * @var \Illuminate\Database\Migrations\Migration
     */
    public $migration;

    /**
     * The direction of the migration.
     * 
     * @var string
     */
    public $direction;

    /**
     * Create a new event instance.
     *
     * @param  \Illuminate\Database\Migrations\Migration  $migration
     * @param string $direction
     * @return void
     */
    public function __construct(Migration $migration, $direction)
    {
        $this->migration = $migration;
        $this->direction = $direction;
    }
}
