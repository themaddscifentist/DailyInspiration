<?php


function validatepost($post)
{
	$errors = array();

	if (empty($post['title'])) {
		array_push($errors, 'Title is required');
	}

	if (empty($post['body'])) {
		array_push($errors, 'Body is required');
	}

	if (empty($post['topic_id'])) {
		array_push($errors, 'Please select a topic');
	}

	$existingpost = selectOne('posts', ['title' => $post['title']]);
	if ($existingpost) {
		if (isset($post['update-post']) && $existingpost['id'] != $post['id']) {
			array_push($errors, 'Post with that title already exists');
		}

		if (isset($post['add-post'])) {
			array_push($errors, 'Post with that title already exists');
		}
		
	}

	return $errors;
}
