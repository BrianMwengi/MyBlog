<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Name is required');
    }

$existingPost = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic) {
         if(isset($post['update-topic']) && $existingTopic['id'] !=$post['id']) {
             array_push($errors, 'Name already exists');
         }

        if (isset($post['add-topic'])) {
            array_push($errors, 'Post with that title already exists');
        }
    }

    return $errors;
}
