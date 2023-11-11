<?php

// Клас для створення парку автомобілів
class CarPark
{
	private $factory;
	private $cars = [];
	private $trucks = [];
	private $buses = [];

	public function __construct(AbstractFactory $factory, $carData, $truckData, $busData)
	{
		$this->factory = $factory;

		foreach ($carData as $carParams) {
			$this->cars[] = $factory->createCar(...$carParams);
		}

		foreach ($truckData as $truckParams) {
			$this->trucks[] = $factory->createTruck(...$truckParams);
		}

		foreach ($busData as $busParams) {
			$this->buses[] = $factory->createBus(...$busParams);
		}
	}

	public function showParkInfo()
	{
		foreach ($this->cars as $car) {
			echo $car->showInfo() . " - Brand: " . $car->getBrand() . ", Model: " . $car->getModel() . '<br/>';
		}

		foreach ($this->trucks as $truck) {
			echo $truck->showInfo() . " - Brand: " . $truck->getBrand() . ", Model: " . $truck->getModel() . ", Capacity: " . $truck->getCapacity() . " kg<br/>";
		}

		foreach ($this->buses as $bus) {
			echo $bus->showInfo() . " - Brand: " . $bus->getBrand() . '<br/>';
		}
	}
}
