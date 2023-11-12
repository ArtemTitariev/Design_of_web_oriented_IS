<?php

// Легкова машина
interface Car
{
	public function showInfo();
	public function getBrand();
	public function getModel();
}

// Вантажівка
interface Truck
{
	public function showInfo();
	public function getBrand();
	public function getModel();
	public function getCapacity();
}

// Автобус
interface Bus
{
	public function showInfo();
	public function getBrand();
}

trait CarInfo
{
	private $brand;
	private $model;

	public function __construct($brand, $model)
	{
		$this->brand = $brand;
		$this->model = $model;
	}
	public function getBrand()
	{
		return $this->brand;
	}

	public function getModel()
	{
		return $this->model;
	}
}

trait TruckInfo
{
	private $brand;
	private $model;
	private $capacity;

	public function __construct($brand, $model, $capacity)
	{
		$this->brand = $brand;
		$this->model = $model;
		$this->capacity = $capacity;
	}

	public function getBrand()
	{
		return $this->brand;
	}

	public function getModel()
	{
		return $this->model;
	}

	public function getCapacity()
	{
		return $this->capacity;
	}
}

trait BusInfo
{
	private $brand;

	public function __construct($brand)
	{
		$this->brand = $brand;
	}

	public function getBrand()
	{
		return $this->brand;
	}
}

// Конкретний клас вітчизняної легкової машини
class UACar implements Car
{
	use CarInfo;

	public function showInfo()
	{
		return "Ukrainian car";
	}
}

// Конкретний клас зарубіжної легкової машини
class ForeignCar implements Car
{
	use CarInfo;

	public function showInfo()
	{
		return "Foreign car";
	}
}

// Конкретний клас вітчизняної вантажівки
class UATruck implements Truck
{
	use TruckInfo;

	public function showInfo()
	{
		return "Ukrainian truck";
	}
}

// Конкретний клас зарубіжної вантажівки
class ForeignTruck implements Truck
{
	use TruckInfo;

	public function showInfo()
	{
		return "Foreign truck";
	}
}

// Конкретний клас вітчизняного автобуса
class UABus implements Bus
{
	use BusInfo;

	public function showInfo()
	{
		return "Ukrainian bus";
	}
}

// Конкретний клас зарубіжного автобуса
class ForeignBus implements Bus
{
	use BusInfo;

	public function showInfo()
	{
		return "Foreign bus";
	}
}
