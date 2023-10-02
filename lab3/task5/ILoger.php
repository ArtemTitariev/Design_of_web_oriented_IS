<?php

interface ILoger
{
	//definition an function which must be 
	//redefined in the next class
	public function log(string $message): void;
}
