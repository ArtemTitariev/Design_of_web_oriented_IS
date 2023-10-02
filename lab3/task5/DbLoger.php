<?php
require_once 'ILoger.php';

class DbLoger implements ILoger
{
	private $connection;

	public function __construct(array $connectionParams)
	{
		try {
			$this->connection = new PDO(
				"mysql:host=" . $connectionParams['servername'] .
					";dbname=" . $connectionParams['dbname'],
				$connectionParams['username'],
				$connectionParams['password']
			);
			// set the PDO error mode to exception
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Connected successfully

		} catch (PDOException $e) {
			die("Connection failed: " . $e->getMessage() . '<br>');
		}
	}

	// redefinition “log” function
	public function log(string $message): void
	{
		$date = date("Y-m-d H:i:s");
		try {
			$sql = "INSERT INTO `log_messages` (`id`, `created_at`, `message`) 
					VALUES (NULL, '$date', '$message')";
			// use exec() because no results are returned
			$this->connection->exec($sql);
		} catch (PDOException $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
	}

	public function __destruct()
	{
		//close connection
		if ($this->connection) {
			$this->connection = null;
		}
	}
}
