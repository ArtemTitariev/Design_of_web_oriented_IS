<?php

class Point
{
	/** @var float */
	private $x;

	/** @var float */
	private $y;

	public function __construct(float $x = 0.0, float $y = 0.0)
	{
		$this->x = $x;
		$this->y = $y;
	}

	public function __get(string $name)
	{
		return $this->$name ?
			$this->$name :
			null;
	}

	public function __set(string $name, float $value): void
	{
		if (isset($this->$name))
			$this->$name = $value;
	}

	public function __toString()
	{
		return "({$this->x} ; {$this->y})";
	}

	// move point coordinates
	public function move(float $moveX = 1.0, float $moveY = 0): void
	{
		$this->x = $this->x + $moveX;
		$this->y = $this->y + $moveY;
	}
}
