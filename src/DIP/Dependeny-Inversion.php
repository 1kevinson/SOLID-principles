<?php

/**
 * High-level classes shouldn’t depend on low-level classes. Both should depend on abstractions. Abstractions shouldn’t depend on details. Details should depend on abstractions.
 * abstractions means interfaces
 */

// High-level class
class BudgetReport
{
    private Database $database;

    public function open(DateTime $dateTime)
    {

    }

    public function save()
    {

    }
}

// Abstraction
interface Database
{
    public function insert(): void;

    public function update(): void;

    public function delete(): void;
}

// Low-level classes
class MySql implements Database
{

    public function insert(): void
    {
        // TODO: Implement insert() method.
    }

    public function update(): void
    {
        // TODO: Implement update() method.
    }

    public function delete(): void
    {
        // TODO: Implement delete() method.
    }
}

class MongoDatabase implements Database
{

    public function insert(): void
    {
        // TODO: Implement insert() method.
    }

    public function update(): void
    {
        // TODO: Implement update() method.
    }

    public function delete(): void
    {
        // TODO: Implement delete() method.
    }
}