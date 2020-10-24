<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to the jungle</h1>
</body>
</html>
<?php

include 'db_connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username)&& !empty($password)){
    $sql = mysqli_query(connect_db(),"SELECT *FROM user WHERE username = '$username' AND password = '$password'" );
    $result = mysqli_num_rows($sql);
    if($result != 0){
        echo $username;
    }else
        echo "Username atau password tidak cocok !";
}else
    echo "Username dan Password harus di isi !";
?>