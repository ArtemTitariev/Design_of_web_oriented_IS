<?php
require_once 'Point.php';

class ColorPoint extends Point
{
	// string
	private $color;

	public function __construct(float $x = 0, float $y = 0, string $color = 'unset')
	{
		parent::__construct($x, $y);
		$this->color = $color;
	}

	public function print(): void
	{
		parent::print();
		echo ', color: '. $this->color;
	}

	public function getColor(): string
	{
		return $this->color;
	}

	public function setColor(string $color): void
	{
		$this->color = $color;
	}

	public function __destruct()
	{
		parent::__destruct();
	}
}
