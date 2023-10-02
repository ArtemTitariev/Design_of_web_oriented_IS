<?php

interface Figure
{
	public function draw(): void;

	public function erase(): void;

	public function move(float $moveX = 1.0, float $moveY = 0): void;

	public function getColor(): string;

	public function setColor(string $color): void;
};
