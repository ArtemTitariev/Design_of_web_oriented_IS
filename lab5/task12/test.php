<?php

require_once './Factory.php';
require_once './Car.php';
require_once './CarPark.php';
require_once './config.php';

// Визначення фабрики
function checkFactory($configParams)
{
	if ($configParams["factory"] === "ua") {
		return new UkrainianFactory();
	} elseif ($configParams["factory"] === "foreign") {
		return new ForeignFactory();
	} else {
		throw new Exception("Invalid factory type in configuration");
	}
}

// Генерація рандомних значень
function generateRandomVehicleData($num, $vehicleType)
{
	$data = [];
	for ($i = 0; $i < $num; $i++) {
		$brand = "Brand" . ($i + 1);
		$model = "Model" . ($i + 1);

		// Залежно від типу автомобіля додавати різні дані
		switch ($vehicleType) {
			case 'car':
				$data[] = [$brand, $model];
				break;
			case 'truck':
				$capacity = rand(5000, 20000);
				$data[] = [$brand, $model, $capacity];
				break;
			case 'bus':
				$data[] = [$brand];
				break;
			default:
				throw new InvalidArgumentException("Invalid vehicle type");
		}
	}
	return $data;
}

$factory = checkFactory($configParams1);

$carNum = $configParams1["carNum"];
$truckNum = $configParams1["truckNum"];
$busNum = $configParams1["busNum"];

$carData = generateRandomVehicleData($carNum, 'car');
$truckData = generateRandomVehicleData($truckNum, 'truck');
$busData = generateRandomVehicleData($busNum, 'bus');

echo 'FIRST PARK <br/>';
$carPark = new CarPark($factory, $carData, $truckData, $busData);
$carPark->showParkInfo();


$factory = checkFactory($configParams2);

$carNum = $configParams2["carNum"];
$truckNum = $configParams2["truckNum"];
$busNum = $configParams2["busNum"];

$carData = generateRandomVehicleData($carNum, 'car');
$truckData = generateRandomVehicleData($truckNum, 'truck');
$busData = generateRandomVehicleData($busNum, 'bus');

echo '<br/><br/>SECOND PARK <br/>';
$carPark = new CarPark($factory, $carData, $truckData, $busData);
$carPark->showParkInfo();
