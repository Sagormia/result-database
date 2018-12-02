<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
    <body>
        <a href="home.php"><button type="button" class="btn btn-primary">&laquo;Back to Home</button></a>
         <form class="box" method="post" action="auth.php">
            <h2>Login</h2>
                <input type="text" name="name" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <input type="submit" name="login" value="Login">
        </form>
    </body>
</html>