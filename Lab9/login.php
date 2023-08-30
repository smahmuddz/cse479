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

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "sessioncookies");
    $url='homepage.php';
    
    session_start();
    if (isset($_SESSION['id'])) {
        header("Location: $url");
    }
    $id = $pass = $error = "";
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
            $pass = input_validation($_POST["pass"]);
        }
        if (empty($id) || empty($pass)) {
            $error = "Empty Field";
        } elseif (!empty($id) && !empty($pass)) {
            $sql = "SELECT * FROM user WHERE id = '$id' AND password = '$pass'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if (!empty($_POST["remember"]) && input_validation($_POST["remember"]) == "yes") {
                    setcookie('id', $row['id'], time() + 120);
                    setcookie('pass', $row['password'], time() + 120);
                }
                $_SESSION['id'] = $row['id'];
                $_SESSION['pass'] = $row['password'];
                header("Location: $url");
            } else {
                $error = "Username and Passwords Not Matches.";
            }
        }
    }
    ?>
<body>
<form action="" method="POST">
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <th>
                        User Id
                    </th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="id" value="<?php if (isset($_COOKIE["id"])) {echo $_COOKIE["id"];} ?>" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        Password
                    </th>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pass" value="<?php if (isset($_COOKIE["pass"])) {echo $_COOKIE["pass"];} ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="remember" value="yes">Remember Me
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="submit">Login</button>
                        <a href="sign_up.php">Register</a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <span class="error"><?php echo $error ?></span>
                    </th>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>