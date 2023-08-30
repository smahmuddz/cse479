<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style type="text/css">
        table {
            border: 1px solid black;
            margin: 30px auto;
            padding: 30px;
        }

        td {
            padding: 10px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include('session.php');
    echo "<h1>Welcome " . $id . "!</h1>";
    echo "<table>";
    echo "<tr><th><a href='profile.php'>Profile</a></th></tr>";
    echo "<tr><th><a href='change_password.php'>Change Password</a></th></tr>";
    if ($type == 'Admin') {
        echo "<tr><th><a href='view_users.php'>Views Users</a></th></tr>";
    }
    echo "<tr><th><a href='logOut.php'>Logout</a></th></tr>";
    echo "</table>";
    ?>
</body>

</html>