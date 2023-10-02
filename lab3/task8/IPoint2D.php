<?php

// 2D point
interface IPoint2D
{
	public function getX();
	public function setX($x): void;

	public function getY();
	public function setY($y): void;

	public function calculateDistance(IPoint2D $point);
}
