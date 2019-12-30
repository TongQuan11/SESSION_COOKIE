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
    <form method="post">
        name    : <input type="text" name="name"><br>
        password: <input type="password" name="pass"><br>
        <input type="submit" name = "Submit" value="Submit">
    </form>
    <?php
        if(isset($_POST["Submit"])){
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["pass"] = $_POST["pass"];
            // sau khi tao xong thi chuyen den trang showcookie
            header("location: showsession.php");
        }
    ?>
</body>
</html>