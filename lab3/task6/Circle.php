<?php
require_once 'Figure.php';
require_once 'Point.php';

class Circle implements Figure
{
	/** @var Point */
	private $center;

	/** @var float */
	private $radius;

	/** @var string */
	private $color;

	/*public function __construct(Circle $center, float $radius)
	{
		$this->center = $center;
		$this->radius = $radius;
	}*/

	public function __construct(float $x, float $y, float $radius, string $color = "unset")
	{
		$this->center = new Point($x, $y);
		$this->radius = $radius;
		$this->color = $color;
	}


	public function draw(): void
	{
		echo 'Drawing circle: ' .
			$this->__toString() . '<br>';
	}

	public function erase(): void
	{
		echo 'Erasing circle';
	}

	// move center of circle
	public function move(float $moveX = 1.0, float $moveY = 0): void
	{
		echo 'Moving circle<br>';
		$this->center->move($moveX, $moveY);
	}

	public function getColor(): string
	{
		return $this->color;
	}

	public function setColor(string $color): void
	{
		$this->color = $color;
	}

	public function __toString()
	{
		return $this->center . ", radius = {$this->radius}";
	}


	public function __destruct()
	{
		$this->center = null;
	}
}
