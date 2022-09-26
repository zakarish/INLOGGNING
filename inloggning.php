<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a id="back" href="./index.html"> Go back</a>
    <?php
    $USERNAME = "123";
    $PASSWORD = "123";
    if ($post["username"] ==$USERNAME && $_POST["password"] == $PASSWORD)
    {
        echo "<h1>Welcome $USERNAME!</h1>";
    }
    else
    {
        echo "<h1>incorrect login :(</h1>";
    }
    ?>
</body>
</html>