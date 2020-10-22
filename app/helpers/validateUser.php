<?php
function validateUser($user)
{

$errors = array();

if (empty($user['username'])) {
array_push($errors, 'username is required');
}
if (empty($user['email'])) {


array_push($errors, 'email is required');
}

if (empty($user['password'])) {
array_push($errors, 'password is required');
}

if ($user['passwordConf'] !== $_POST['password']) {
array_push($errors, 'password donot mach');
}
$existingUser = selectOne('users', ['email' => $user['email']]);
if (isset($existingUser)) {
array_push($errors, 'Email already exist');
}

return $errors;

}




function validateLogin($user)
{

$errors = array();

if (empty($user['username'])) {
array_push($errors, 'username is required');
}

if (empty($user['password'])) {
array_push($errors, 'password is required');
}

return $errors;

}




