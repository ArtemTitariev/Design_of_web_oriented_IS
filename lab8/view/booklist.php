<html>

<head></head>

<body>
	<table border="1">
		<tbody>
			<tr>
				<td>Title</td>
				<td>Author</td>
				<td>Description</td>
				<td>Publication date</td>
				<td>Number of pages</td>
				<td>Cover photo</td>
			</tr>
		</tbody>
		<?php foreach ($books as $title => $book) : ?>
			<tr>
				<td>
					<a href="index.php?book=<?= $book->title ?>"><?= $book->title ?></a>
				</td>
				<td><?= $book->author ?></td>
				<td><?= $book->description ?></td>
				<td><?= $book->publicationDate->format('d.m.Y') ?></td>
				<td><?= $book->numberOfPages ?></td>
				<td><img width="50" height="50" src="<?= $book->coverPhoto ?>" /></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>

</html>