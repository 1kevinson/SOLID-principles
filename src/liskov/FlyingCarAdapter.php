<?php

// Pattern Adapter
class FlyingCarAdapter implements ICar
{
    private FlyingCar $flyingCar;

    public function __construct(FlyingCar $flyingCar)
    {
        $this->flyingCar = $flyingCar;
    }


    public function move()
    {
        $this->flyingCar->moveFaster();
    }

    // Pollution method / model bug
    public function changeWheel()
    {
    }
}


