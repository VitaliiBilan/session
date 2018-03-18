<?php
if (!empty($_REQUEST['username'])) {
    session_start();
    $_SESSION['username'] = $_REQUEST['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="username">
    <input type="submit">
</form>
</body>
</html>

