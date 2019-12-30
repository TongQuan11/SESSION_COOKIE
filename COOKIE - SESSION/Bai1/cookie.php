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
            setcookie("name",$_POST["name"],time()+3000);
            setcookie("pass",$_POST["pass"],time()+3000);
            // sau khi tao xong thi chuyen den trang showcookie
            header("location: showcookie.php");
        }
    ?>
</body>
</html>