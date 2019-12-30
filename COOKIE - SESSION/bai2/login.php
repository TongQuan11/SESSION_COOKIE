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
        <?php
        require "db.php";
        $sql = "SELECT * from nguoidung";
        $result = $db->query($sql)->fetch_all();
        var_dump($result);

        if(isset($_POST["Submit"])){
           $check = false;
           for($i=0; $i < count($result); $i++){
                if($result[$i][1] == $_POST["name"] && $result[$i][2] == $_POST["pass"]){
                    $check = true;
                    $_SESSION["name"] = $result[$i][1];
                    $_SESSION["pass"] = $result[$i][2];
                    $_SESSION["fullname"] = $result[$i][3];
                }
           }
           if($check == true){
                header("location: profile.php");
           }
           else{
            echo "Login that bai";
           }
        }
    ?>
    </form>
</body>
</html>