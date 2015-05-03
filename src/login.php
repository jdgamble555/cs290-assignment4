<?php
    // logout
    if(isset($_GET['logout'])) {
        session_start();
        unset($_SESSION);
        session_destroy();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
</head>
<body>
    <form action="content1.php" method="post">
        <fieldset>
            <legend>Login</legend>
            <label for="username">Username:</label>
            <input id="username" type="text" name="username" />
            <label for="password">Password:</label>
            <input id="password" type="password" name="password" disabled/>
            <input type="submit" value="Login" />
        </fieldset>
    </form>
</body>
</html>