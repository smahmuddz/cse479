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
<form action="" method="POST">
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <th>
                        Current Password
                    </th>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="currpass" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        New Password
                    </th>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="newpass" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        Retype New Password
                    </th>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="retype_newpass" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="submit">Change</button>
                        <a href="homepage.php">Home</a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <span class="success"><?php echo "Success Text Placeholder" ?></span>
                    </th>
                </tr>
                <tr>
                    <th>
                        <span class="error"><?php echo "Error Text Placeholder" ?></span>
                    </th>
                </tr>
            </table>
        </fieldset>
    </form>    
</body>
