<?php
    setcookie("name",$_POST["name"],time()-3000);
    setcookie("pass",$_POST["pass"],time()-3000);
    header("location: showcookie.php");
?>