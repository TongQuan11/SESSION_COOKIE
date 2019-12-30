<?php
    session_start();
?>
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
    if(isset($_SESSION["name"]) && isset($_SESSION["pass"])){
       echo "SUCCESFUL";
    }
    else{
        echo " NOT SUCCESFUL";
    }
?>
<a href="session.php">session</a>
||
<a href="deletesession.php">DELETEsession</a>
</body>
</html>
