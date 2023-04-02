<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page - Login</title>
    <link rel="icon" href="../icon.png">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="header">
        <p>Witajcie na prostej stronie do logowania</p>
    </div>
    <div class="sec_header">
        <h1>Strona do logowania</h1>
    </div>
    <div class="form">
        <form class="box" action="includes/submiter.inc.php" method="POST">
            <input type="text" name="email" class="email"><br><br>
            <input type="password" name="pass" class="pass"><br><br>
            <input type="submit" value="Zaloguj się"><br><br>
        </form>
    </div>
    <div class="footer">
        <a href="../index.php">Powrót do strony głównej</a>
    </div>
</body>
</html>