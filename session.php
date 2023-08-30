<?php
   $con = mysqli_connect("localhost", "root", "", "sessioncookies");
   session_start();
   $id = $pass = $name = $email = $type = "";

    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $pass = $_SESSION['pass'];
        $sql = "SELECT * FROM user WHERE id = '$id' AND password = '$pass'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $email = $row['email'];
            $type = $row['type'];
        }
    } else {
        header("Location: login.php");
        die();
    }
?>