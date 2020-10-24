<?php
    $var = ["udin", "sukir", "toni"];
    foreach($var as $b => $a){
        echo $a;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>

    <h1> Login </h1>
    <form action="login.php" method="POST">
        <table>
            <tr>
                <td> Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                  <input type="password" class="form-control" name="password" id="" placeholder="">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="log in"></td>
            </tr>
        </table>
    </form>
</body>

</html>
