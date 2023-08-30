<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Info</title>
    <style type="text/css">
        table {
            border: 1px solid black;
            margin: 30px auto;
            padding: 30px;
        }

        td {
            padding: 10px;
        }

        th {
            padding: 10px;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    $con = mysqli_connect("localhost", "root", "", "sessioncookies");
    session_start();

    if (!isset($_SESSION['id'])) {
        header("Location: login.php");
        die();
    }
    
    $sql = "SELECT * FROM user";
    $result = mysqli_query($con, $sql);
?>

<h1>Users</h1>
<table border="1" style="border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>User Type</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['type']; ?></td>
    </tr>
    <?php endwhile; ?>
    <tr><td colspan=4 style="text-align: right;"><a href="homepage.php">Go Home</a></td></tr>
</table>
</body>
</html>
