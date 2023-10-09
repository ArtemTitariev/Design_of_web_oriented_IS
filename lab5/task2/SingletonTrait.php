<?php 

trait SingletonTrait {
	/** @var self */
	protected static $_instance;

	private function __construct()
	{
	}

	public static function getInstance(): self
	{
		if (self::$_instance === null) {
			echo 'Creating instance<br>';

			self::$_instance = new self;
		}

		return self::$_instance;
	}

	private function __clone()
	{
	}

	private function __wakeup()
	{
	}
}