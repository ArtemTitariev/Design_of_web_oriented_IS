<html>

<head></head>

<body>
	<?php
	echo "Title: {$book->title}<br/>";
	echo "Author: {$book->author}<br/>";
	echo "Description: {$book->description}<br/>";
	echo "Publication date: {$book->publicationDate->format('d.m.Y')}<br/>";
	echo "Number of pages: {$book->numberOfPages}<br/>";
	echo "Cover photo: <br/>";
	?>
	<img width="100" height="100" src="<?= $book->coverPhoto ?>" alt="">
</body>

</html