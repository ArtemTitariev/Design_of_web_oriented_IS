<?php
require_once 'Figure.php';
require_once 'Point.php';

class Triangle implements Figure
{
	/** @var Point */
	private $v1;

	/** @var Point */
	private $v2;

	/** @var Point */
	private $v3;

	/** @var string */
	private $color;

	public function __construct(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3, string $color = "unset")
	{
		$this->v1 = new Point($x1, $y1);
		$this->v2 = new Point($x2, $y2);
		$this->v3 = new Point($x3, $y3);
		$this->color = $color;
	}


	public function draw(): void
	{
		echo 'Drawing triangle: ' .
			$this->__toString() . '<br>';
	}

	public function erase(): void
	{
		echo 'Erasing triangle';
	}

	// move vertexes of triangle
	public function move(float $moveX = 1.0, float $moveY = 0): void
	{
		echo 'Moving triangle<br>';
		$this->v1->move($moveX, $moveY);
		$this->v2->move($moveX, $moveY);
		$this->v3->move($moveX, $moveY);
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
		return "{$this->v1}, {$this->v2}, {$this->v3}";
	}


	public function __destruct()
	{
		$this->v1 = null;
		$this->v2 = null;
		$this->v3 = null;
	}
}
