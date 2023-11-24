<?php
include_once("model/Book.php");

class Model
{
	public function getBookList()
	{

		include("./model/db.php");
		$sql = 'SELECT * FROM books 
		JOIN authors ON books.author_id = authors.id
		ORDER BY books.id';
		$sth = $pdo->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
		$sth->execute();
		$data = $sth->fetchAll();

		$books = array();
		for ($i = 0; $i < count($data); ++$i) {
			$books[$data[$i]["title"]] = new Book(
				$data[$i]["title"],
				$data[$i]["name"] . ' ' . $data[$i]["surname"],
				$data[$i]["description"],
				new DateTime($data[$i]["publication_date"]),
				$data[$i]["number_of_pages"],
				$data[$i]["cover_photo"]
			);
		}
		return $books;
	}

	public function getBook($title)
	{
		include("./model/db.php");
		$sql = 'SELECT * FROM books 
		JOIN authors ON books.author_id = authors.id
		WHERE books.title = ?';
		$sth = $pdo->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
		$sth->bindParam(1, $title, PDO::PARAM_STR);
		$sth->execute();
		//$sth->execute([$title]);

		$data = $sth->fetchAll()[0];

		return new Book(
			$data["title"],
			$data["name"] . ' ' . $data["surname"],
			$data["description"],
			new DateTime($data["publication_date"]),
			$data["number_of_pages"],
			$data["cover_photo"]
		);


		// we use the previous function to get all the books and then we return the requested one.   
		// in a real life scenario this will be done through a db select command   
		$allBooks = $this->getBookList();
		return $allBooks[$title];
	}
}
