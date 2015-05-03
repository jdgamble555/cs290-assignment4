<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Content 2</title>
</head>
<body>
<?php
    session_start();
    
    // if not logged in
    if (empty($_SESSION)) {
        header("Location: login.php");
        die;
    }
    else {
?>
<p>Hello <strong><?php echo $_SESSION['username']; ?></strong>. This is a second page of content.</p>
<p><a href="content1.php">Content 1</a></p>
<?php } ?>
</body>
</html>