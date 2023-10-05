<?php

trait CurrDateTime
{
	public function getCurrentDateTime(): string
	{
		return date("F j, Y, g:i a");
	}
}
