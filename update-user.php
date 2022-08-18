<?php

include('./helpers.php');
namespace src;

$users = getUsersInfoFromFile();

$key = $_POST['key'];


if(! isset($users[$key])  ){
    echo "INFO IS WRONG";
    die();
}


$user = $users[$key];

$user['name'] = $_POST['name'];
$user['age'] = $_POST['age'];

$users[$key] = $user;

saveUserInfoInFile($users);

?>

<h4>User info have been updated</h4>

<br>
<a href="http://localhost/kitxvari/index.php">Go Back</a>
