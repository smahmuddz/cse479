<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
	<style>
		.error{
			color:red;
		}
	</style>
</head>
<body> 
<table>
<form action="" method="post">
<tr>
	<td><label for="name">Name:</label></td>
	<td><input type="text" id="name" name="name"> </td>
</tr>
<tr>
	<td><label for="email">Email:</label></td>
	<td><input type="text" id="email" name='email' > </td>
</tr>
<tr>
	<td><label for="password">Password:</label></td>
	<td><input type="password" id="pw" name="pw" > </td>
</tr>
<tr>
	<td><label for="ip">IP address of your router:</label></td>
	<td><input type="text" id="ip" name="ip" value="192.168.0.1" > </td>
</tr>
<tr>
	<td><label for="url">Personal Web URL:</label></td>
	<td><input type="text" id="url" name="url" ></td>
</tr>
<tr>
	<td><label for="dob">Date of Birth:</label></td>
	<td><input type="text" id="dob" name="dob" ></td>
</tr>
<tr>
	<td><label for="gender">Gender:</label></td>
	<td>
		<input type="radio" id="gender" name="gender" value="Male" >
		<label for="gender">Male</label>
		<input type="radio" id="gender" name="gender" value="Female">
		<label for="gender">Female</label>
		<input type="radio" id="gender" name="gender" value="Other">
		<label for="gender">Other</label>
	</td>
</tr>
<tr>
	<td><label for="mobile">Mobile Number:</label></td>
	<td><input type="text" id="mobile" name="mobile" placeholder="+880123456789" ></td>
</tr>
<tr>
	<td><label for="brief">Brief Info:</label></td>
	<td>
	<textarea id="brief" name="brief" rows="10" cols="30" ></textarea>
	</td>
</tr>
<tr>
<td colspan="2"><center><input type="submit"></td>
</tr>
</form>
</table>

<?php
    $name = $email = $pass = $ip = $url = $dob = $gender = $mobile = $brief = "";
    $name_er = $email_er = $pass_er = $url_er = $ip_er = $dob_er = $gender_er = $mobile_er = $brief_er = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pw"];
        $ip = $_POST["ip"];
        $url = $_POST["url"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $mobile = $_POST["mobile"];
        $brief = $_POST["brief"];

        // Validate Name
        if (preg_match("/^(?=.{4,20})[a-zA-Z]+( [a-zA-Z]+)?( [a-zA-Z]+)?$/", $name)) {
            $name_er = "";
        } else {
            $name_er = "*Invalid Name";
        }

        // Validate Email
        if (preg_match("/^[a-zA-Z\d._-]+@([a-zA-Z\d-]+\.)+[a-zA-Z]{2,6}$/", $email)) {
            $email_er = "";
        } else {
            $email_er = "*Invalid Email";
        }

        // Validate PW
        if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{7,25}$/", $pass)) {
            $pass_er = "";
        } else {
            $pass_er = "*Invalid Password";
        }

		// Validate IP address with regex
		if (preg_match("/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $ip)) {
			$ip_er = "";
		} else {
			$ip_er = "*Invalid IP";
		}

        // Validate URL with regex
        if (preg_match("/^(http:\/\/|https:\/\/)?[a-zA-Z\d\.-]+\.[a-zA-Z]{2,6}(\/\S*)?$/", $url)) {
            $url_er = "";
        } else {
            $url_er = "*Invalid URL";
        }

        // Validate DOB
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dob)) {
            $dob_er = "";
        } else {
            $dob_er = "*Invalid Date of Birth";
        }

        // Validate Mobile
        if (preg_match("/^\+880\d{9}$/", $mobile)) {
            $mobile_er = "";
        } else {
            $mobile_er = "*Invalid Mobile No.";
        }

        // Validate Brief
        if (preg_match("/^[a-zA-Z\d\s]{1,50}$/", $brief)) {
            $brief_er = "";
        } else {
            $brief_er = "*Invalid Brief Info";
        }
    }
    ?>

    <div class="error">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Display individual error messages
            echo "Name error: " . $name_er . "<br>";
            echo "Email error: " . $email_er . "<br>";
            echo "Password error: " . $pass_er . "<br>";
            echo "IP error: " . $ip_er . "<br>";
            echo "URL error: " . $url_er . "<br>";
            echo "Date of Birth error: " . $dob_er . "<br>";
            echo "Gender error: " . $gender_er . "<br>";
            echo "Mobile Number error: " . $mobile_er . "<br>";
            echo "Brief Info error: " . $brief_er . "<br>";
        }
        ?>
    </div>

</body>
