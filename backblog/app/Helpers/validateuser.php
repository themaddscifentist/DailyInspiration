<?php

function validateuser($user)
{
	$errors = array();

	if (empty($user['username'])) {
		array_push($errors, 'Username is required');
	}

	if (empty($user['email'])) {
		array_push($errors, 'Email is required');
	}

	if (empty($user['password'])) {
		array_push($errors, 'Password is required');
	}

	if ($user['passwordConf'] !== $user['password']) {
		array_push($errors, 'Passwords do not match!!');
	}

	//$existingUser = selectOne('users', ['email' => $user ['email']]);
	//if ($existingUser) {
	//	array_push($errors, 'Email already exists');
	//}

	$existinguser = selectOne('users', ['email' => $user['email']]);
	if ($existinguser) {
		if (isset($user['update-user']) && $existinguser['id'] != $user['id']) {
			array_push($errors, 'Email already exists');
		}

		if (isset($user['create-admin'])) {
			array_push($errors, 'Email already exists');
		}
	}

	return $errors;
}


function validatelogin($user)
{
	$errors = array();

	if (empty($user['username'])) {
		array_push($errors, 'Username is required');
	}

	if (empty($user['password'])) {
		array_push($errors, 'Password is required');
	}

	
	return $errors;
}