<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Content 1</title>
</head>
<body>
<?php
    session_start();
    
    // if not logged in
    if (empty($_SESSION)) {
        
        // no username from POST
        if (!isset($_POST['username'])) {
            header("Location: login.php");
            die;
        }
        // username is blank
        if (!$_POST['username']) {
?>
<p>A username must be entered. Click <a href="login.php">here</a> to return to the login screen.</p>
<?php
        }
        else {
            // login
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['n'] = 0;
        }
    }
    // logged in
    if (!empty($_SESSION)) {
?>
<p>Hello <strong><?php echo $_SESSION['username']; ?></strong> you have visited this page <strong><?php echo $_SESSION['n']++; ?></strong> times before. Click <a href="login.php?logout=1">here</a> to logout.</p>
<p><a href="content2.php">Content 2</a></p>
<?php } ?>
</body>
</html>