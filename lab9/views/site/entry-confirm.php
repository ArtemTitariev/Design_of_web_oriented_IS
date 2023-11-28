<?php

use yii\helpers\Html;
?>

<h5>Ви вказали наступну інформацію:</h5>

<div class="card bg-light mb-3" style="max-width: 500px;">
	<div class="card-body">
		<h5 class="card-title">Ім’я</h5>
		<p class="card-text"><?= Html::encode($model->name) ?></p>
	</div>
</div>
<div class="card bg-light mb-3" style="max-width: 500px;">
	<div class="card-body">
		<h5 class="card-title">Адреса електронної пошти</h5>
		<p class="card-text"><?= Html::encode($model->email) ?></p>
	</div>
</div>