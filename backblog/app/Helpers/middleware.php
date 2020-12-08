<?php

function usersonly($redirect = '/index.php') 
{
	if (empty($_SESSION['id'])) {
		$_SESSION['message'] = 'You must login first';
		$_SESSION['type'] = 'error';
		header('location: ' . BASE_URL . $redirect);
		exit(0);
	}
}

function adminonly($redirect = '/index.php')
{
	if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {
		$_SESSION['message'] = 'You are not authorized';
		$_SESSION['type'] = 'error';
		header('location: ' . BASE_URL . $redirect);
		exit(0);
	}
}

function guestsonly($redirect = '/index.php')
{
		if (empty($_SESSION['id'])) {
			header('location: ' . BASE_URL . $redirect);
			exit(0);
	}
}