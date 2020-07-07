<?php 

interface CarService 
{
    public function getCost();
}

class BasicInspection implements CarService 
{

    public function getCost() 
    {
        return 25;
    }
}

class ChangeOil 
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 20 + $this->carService->getCost();
    }
}

class TireRotation implements CarService 
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 15 + $this->carService->getCost();
    }
}

echo (new ChangeOil(new TireRotation(new BasicInspection)))->getCost();