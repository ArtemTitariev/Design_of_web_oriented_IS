<?php class Book
{
	public $title;
	public $author;
	public $description;
	public $publicationDate;
	public $numberOfPages;
	public $coverPhoto;

	public function __construct(
		String $title,
		string $author,
		string $description,
		DateTime $publicationDate,
		int $numberOfPages,
		string $coverPhoto
	) {
		$this->title = $title;
		$this->author = $author;
		$this->description = $description;
		$this->publicationDate = $publicationDate;
		$this->numberOfPages = $numberOfPages;
		$this->coverPhoto = $coverPhoto;
	}
}
