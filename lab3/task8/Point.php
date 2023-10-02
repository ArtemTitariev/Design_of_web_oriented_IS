<?php
require_once 'IPoint2D.php';
require_once 'IMovable.php';
require_once 'IRenderable.php';

class Point implements IPoint2D, IMovable, IRenderable
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

	// move point (redefinition IMovable method)
	public function move($moveX, $moveY): void
	{
		$this->x += $moveX;
		$this->y += $moveY;
	}

	// getters and setters 
	// (redefinition IPoint2D methods)
	public function getX()
	{
		return $this->x;
	}

	public function setX($x): void
	{
		$this->x = $x;
	}

	public function getY()
	{
		return $this->y;
	}

	public function setY($y): void
	{
		$this->y = $y;
	}

	// calculating distance between two points 
	// (redefinition IPoint2D method)
	public function calculateDistance(IPoint2D $point)
	{
		$xDistance = $point->getX() - $this->x;
		$yDistance = $point->getY() - $this->y;

		// Pythagorean theorem for calculating distance
		$distance = sqrt(
			$xDistance * $xDistance +
				$yDistance * $yDistance
		);

		return $distance;
	}

	// render point
	// (redefinition IRenderable method)
	public function render(): void
	{
		echo $this->__toString();
	}

	public function __toString()
	{
		return "({$this->x} ; {$this->y})";
	}
}
