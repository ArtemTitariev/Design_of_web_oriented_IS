<?php

// Абстрактний клас фабрики
abstract class AbstractFactory
{
	abstract public function createCar($brand, $model);
	abstract public function createTruck($brand, $model, $capacity);
	abstract public function createBus($brand);
}

// Вітчизняна фабрика
class UkrainianFactory extends AbstractFactory
{
	public function createCar($brand, $model)
	{
		return new UACar($brand, $model);
	}

	public function createTruck($brand, $model, $capacity)
	{
		return new UATruck($brand, $model, $capacity);
	}

	public function createBus($brand)
	{
		return new UABus($brand);
	}
}

// Зарубіжна фабрика
class ForeignFactory extends AbstractFactory
{
	public function createCar($brand, $model)
	{
		return new ForeignCar($brand, $model);
	}

	public function createTruck($brand, $model, $capacity)
	{
		return new ForeignTruck($brand, $model, $capacity);
	}

	public function createBus($brand)
	{
		return new ForeignBus($brand);
	}
}
