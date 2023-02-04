<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("logout.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vitaj</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font-family: "Montserrat", sans-serif; }
    </style>
</head>
<body>
    <h1 class="my-5">Ahoj, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> Vitajte na našej stránke.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Zmena Hesla</a>
        <a href="logout.php" class="btn btn-danger ml-3">Odhlásenie</a>
    </p>
</body>
</html>