<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <style type="text/css">
        fieldset {
            border: 1px solid black;
            margin: 30px auto;
            padding: 30px;
            text-align: left;
            width:20px;
        }
        legend {
            font-weight: bold;
            font-size: larger;
        }


        select {
            width: 175px;
            text-align: center;
        }

        a {
            margin-left: 10px;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<?php
    $conn = mysqli_connect("localhost", "root", "", "sessioncookies");
    $id = $pass = $confirmPass = $name = $email = $type = $message = $error = "";
    
    session_start();
    if (isset($_SESSION['id'])) {
        header("Location: homepage.php");
    }

    function input_validation($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["id"])) {
            $id = input_validation($_POST["id"]);
        }
        if (!empty($_POST["pass"])) {
            $pass = $_POST["pass"]; // No need to sanitize, will be hashed
        }
        if (!empty($_POST["confirmPass"])) {
            $confirmPass = $_POST["confirmPass"]; // No need to sanitize, will be hashed
        }
        if (!empty($_POST["name"])) {
            $name = input_validation($_POST["name"]);
        }
        if (!empty($_POST["email"])) {
            // Use regex for email validation
            $email = $_POST["email"];
            $email_pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
            if (!preg_match($email_pattern, $email)) {
                $error = "Invalid email address";
            }
            $email="";
        }
        if (!empty($_POST["type"])) {
            $type = input_validation($_POST["type"]);
        }
        if (!empty($pass) && !empty($confirmPass) && $pass != $confirmPass) {
            $error = "Passwords do not match";
        } elseif (!empty($id) && !empty($pass) && !empty($confirmPass) && !empty($name) && !empty($email) && !empty($type)) {
            $sql = "INSERT INTO user (id, password, name, email, type) VALUES ('$id', '$pass', '$name', '$email', '$type');";
            if (mysqli_query($conn, $sql)) {
                $message = "Successfully registered";
            } else {
                $error = "Error: " . mysqli_error($conn);
            }
        }
    }

    mysqli_close($conn);
    ?>
<body>
    <form action="" method="POST">
    <fieldset>
            <legend>Registration</legend>
            <table>
                <tr>
                    <th>Id</th>
                </tr>
                <tr>
                    <td><input type="text" name="id" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                </tr>
                <tr>
                    <td><input type="password" name="pass" required></td>
                </tr>
                <tr>
                    <th>Confirm Password</th>
                </tr>
                <tr>
                    <td><input type="password" name="confirmPass" required></td>
                </tr>
                <tr>
                    <th>Name</th>
                </tr>
                <tr>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <th>User Type <i>[User/Admin]</i></th>
                </tr>
                <tr>
                    <td>
                        <select name="type" required>
                            <option value="User" selected>User</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="submit">Register</button>
                        <a href="login.php">Login</a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <span class="success"><?php echo $message ?></span>
                    </th>
                </tr>
                <tr>
                    <th>
                        <span class="error"><?php echo $error ?></span>
                    </th>
                </tr>
            </table>
    </form>
    </fieldset>
</body>

</html>