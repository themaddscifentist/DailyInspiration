<?php

function validatetopic($topic)
{
	$errors = array();

	if (empty($topic['name'])) {
		array_push($errors, 'Name is required');
	}

	$existingtopic = selectOne('topics', ['name' => $post['name']]);
	if ($existingtopic) {
		if (isset($post['update-topic']) && $existingtopic['id'] != $post['id']) {
			array_push($errors, 'Name already exists');
		}

		if (isset($post['add-topic'])) {
			array_push($errors, 'Name already exists');
		}
	}

	return $errors;
}

