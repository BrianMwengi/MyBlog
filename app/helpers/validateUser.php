<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
function validateUser($user)
{
    $errors = array();

    if(empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if(empty($user['email'])) {
        array_push($errors, 'Email is required');
    }

    if(empty($user['password'])) {
        array_push($errors, 'Password do not match');
    }

    //$existingUser = selectOne('users', ['email' => $user['email']]);
    //f ($existingUser) {
        //array_push($errors, 'Email already exists');
    //}

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
         if(isset($user['update-user']) && $existingUser['id'] !=$user['id']) {
             array_push($errors, 'Email already exists');
         }

        if (isset($post['create-admin'])) {
            array_push($errors, 'Email already exists');
        }
    }

    return $errors;
}

function validateLogin($user)
{
    $errors = array();

    if(empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if(empty($user['password'])) {
        array_push($errors, 'Password is required');
    }
        
    return $errors;
}