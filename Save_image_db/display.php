<?php
    require "db.php";
    $sql = "SELECT * from images";
    $result = $db->query($sql)->fetch_all();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
    </style>
    <body>
    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>IMAGES</th>
        </tr>
        <?php for($i =0; $i < count($result); $i++){?>
            <tr>
                <th><?php echo $result[$i][0]; ?></th>
                <th><img src="<?php echo $result[$i][1]; ?>"/></th>
            </tr>
        <?php } ?>
       
    </table>
    </body>
    </html>
