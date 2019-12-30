<?php
        if(isset($_POST["Submit"])){
           $check = false;
           if(isset($_POST["name"]) !='' && isset($_POST["pass"]) != ''){
                $check = true;
           }
           if($check == false){
                echo "Login that bai";
           }
           else{
               echo "Login thanh cong";
               echo $_POST["name"];
               echo $_POST["pass"];
           }
        }
    ?>