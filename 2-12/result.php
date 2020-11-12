<?php
    $my_name = $_POST['my_name'];
    $prize = $_POST['prize'];
    $number = $_POST['number'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>お名前：<?php echo $my_name; ?></p>
    <p>ご希望景品<?php echo $prize; ?></p>
    <p>個数：<?php echo $number; ?></p>
</body>
</html>




    