<?php

namespace app\classes;

class Hash 
{
	public static function make($password) 
	{
		$options = [
			'cost' => 11,
		];
		return password_hash($password, PASSWORD_DEFAULT, $options);
	}

	public static function checkPassword($inputSenha, $senhaEncriptada)
	{
		return password_verify($inputSenha, $senhaEncriptada);
	}

}