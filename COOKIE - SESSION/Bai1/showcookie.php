<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_COOKIE["name"]) && isset($_COOKIE["pass"])){
       echo "SUCCESFUL";
    }
    else{
        echo " NOT SUCCESFUL";
    }
?>
<a href="cookie.php">Cookie</a>
||
<a href="deletecookie.php">DeleteCookie</a>
</body>
</html>
