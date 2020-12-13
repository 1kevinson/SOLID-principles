<?php

/**
 * A class should have just one reason to change.
 * */

class Employee
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }


}

class TimeSheetReport
{
    public function printReport(Employee $employee): string
    {
        return $employee->getName();
    }
}

