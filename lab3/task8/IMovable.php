<?php

// to moving objects
interface IMovable
{
	public function move($moveX, $moveY): void;
}