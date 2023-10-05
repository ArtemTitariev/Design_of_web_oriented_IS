<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab 4 tasks 2-3</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<?php if (isset($_SESSION['status'])) : ?>
			<div class="alert alert-<?php if ($_SESSION['status'] === 'ok') echo 'success ';
									else echo 'danger '; ?> success mt-2" role="alert" style="width: 500px;">
				<?php if ($_SESSION['status'] === 'ok') : ?>
					Повідомлення збережено!
				<?php else : ?>
					Текст повідомлення не введено!
				<?php endif; ?>
			</div>
			<?php unset($_SESSION['status']); ?>
		<?php endif; ?>

		<form method="POST" action="log.php" class="mt-3">
			<div class="form-group mt-3 mb-3">
				<label for="message">Текст повідомлення:</label>
				<textarea id="message" name="message" class="form-control mt-2" style="width: 500px;" rows="3"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Залогувати</button>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>