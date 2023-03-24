<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="lab_3_2_B.php" method="get">
        # 2.B
        <?php
        echo $_SESSION["Name"], "\n", "<br>";
        echo $_SESSION["Surname"], "\n", "<br>";
        echo $_SESSION["Age"];
        session_destroy();
        ?>
        <br>
    </form>
</body>
</html>