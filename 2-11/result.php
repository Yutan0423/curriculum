<?php
    $my_name = $_POST["my_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>私の名前は、<?php echo $my_name; ?></p>
    <p>私のメールアドレスは、<?php echo $email; ?></p>
    <p>私のパスワードは、<?php echo $password; ?></p>
</body>
</html>