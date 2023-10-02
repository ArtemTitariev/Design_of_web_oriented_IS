<?php
require_once 'Figure.php';
require_once 'Point.php';

class Square implements Figure
{
	/** @var Point */
	private $topLeft;

	/** @var Point */
	private $bottomRight;

	/** @var string */
	private $color;

	public function __construct(float $x1, float $y1, float $x2, float $y2, string $color = "unset")
	{
		$this->setPoints($x1, $y1, $x2, $y2);
		$this->color = $color;
	}

	private function setPoints(float $x1, float $y1, float $x2, float $y2): void
	{
		$this->topLeft =
			new Point(
				min($x1, $x2),
				max($y1, $y2)
			);
		$this->bottomRight =
			new Point(
				max($x1, $x2),
				min($y1, $y2)
			);
	}

	public function draw(): void
	{
		echo 'Drawing square: ' .
			$this->__toString() . '<br>';
	}

	public function erase(): void
	{
		echo 'Erasing square';
	}

	// move vertexes of square
	public function move(float $moveX = 1.0, float $moveY = 0): void
	{
		echo 'Moving square<br>';
		$this->topLeft->move($moveX, $moveY);
		$this->bottomRight->move($moveX, $moveY);
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
		return "{$this->topLeft}, {$this->bottomRight}, color: {$this->color}";
	}


	public function __destruct()
	{
		$this->topLeft = null;
		$this->bottomRight = null;
	}
}
