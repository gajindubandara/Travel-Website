<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#"><h4>Dream Tour Sri Lanka</h4></a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav" id="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="packages.php">Packages</a>
            </li>
            <?php
            if (isset($_SESSION["u_un"])) {
                echo '
            <li class="nav-item">
                <a class="nav-link" href="mybookings.php">My Bookings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="myprofile.php"> <i class="fas fa-user-alt"></i>  ' . $_SESSION["u_un"] . '</a>
            </li> 
            </li>

            <li class="nav-item">
                <form method="post">
                    <button class="logout" type="submit" name="logout">Logout <i class="fas fa-sign-out-alt" style="color:white"></i></button>
                </form>
            </li> ';
            } else {
                echo '   
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>';
            }
            if (isset($_POST["logout"])) {
                unset($_SESSION["u_un"]);
                unset($_SESSION["u_uid"]);
                header("location:index.php");
            }
            ?>
        </ul>
    </div>
</nav>
</body>
</html>