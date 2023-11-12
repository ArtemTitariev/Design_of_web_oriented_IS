<?php

require_once 'SingletonTrait.php';

class SomeClass
{
	use SingletonTrait;

	public function someFunc(): void {
		echo 'Some public method call';
	}
}
