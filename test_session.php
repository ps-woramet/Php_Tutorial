<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test session</title>
</head>
<body>
    <div>this is session page</div>
    <?php session_start() ?>
    <?php
        echo 'hello my session : ' . $_SESSION['mySession1'] . '<br>';
        echo 'hello my session : ' . $_SESSION['mySession2'] . '<br>';
    ?>
</body>
</html>