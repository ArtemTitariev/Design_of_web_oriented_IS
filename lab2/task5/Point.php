<?php

class Point
{
	// float
	private $x;
	// float
	private $y;

	// int: static attribute
	private static $static_attribute = 0;

	public function __construct(float $x = 0, float $y = 0)
	{
		$this->x = $x;
		$this->y = $y;
	}

	// Getter for static attribute
	public static function getStatic()
	{
		return self::$static_attribute;
	}

	// Static method
	public static function counter()
	{
		self::$static_attribute++;
	}

	public function print(): void
	{
		echo 'Point {' . $this->x . ' ; ' . $this->y . '}';
	}

	public function getX(): float
	{
		return $this->x;
	}

	public function setX(float $x): void
	{
		$this->x = $x;
	}

	public function getY(): float
	{
		return $this->y;
	}

	public function setY(float $y): void
	{
		$this->y = $y;
	}

	public function __destruct()
	{
		echo 'Destroying ', $this->print();
	}
}
