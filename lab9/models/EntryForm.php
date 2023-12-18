<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return [
			[['name', 'email'], 'required'],
			[['name'], 'string', 'min' => 2, 'max' => 50],
			[['email'], 'email'],
			[['email'], 'string', 'max' => 100],
		];
	}
}
