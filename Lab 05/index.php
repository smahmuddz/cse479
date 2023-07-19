<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
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
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass =$_POST["pw"];
    $ip =$_POST["ip"];
    $url=$_POST["url"];
    $dob =$_POST["dob"];
    $gender =$_POST["gender"];
    $mobile =$_POST["mobile"];
    $brief =$_POST["brief"];

if(preg_match("/^(?=.{4,20})[a-z]+( )([a-z]+)( )?[a-z]+$/i",$name))
    {
    $name_er="";
    }
else
{
    $name_er="*Invalid Name";
}

if(preg_match("/^[a-z\d\._-]+@([a-z\d-]+\.)+[a-z]{2,6}$/i",$email))
    {
    $email_er="";
    }
else
{
    $email_er="*Invalid Email";
}

if(preg_match("/^[a-z]{7,25}$/i",$pass))
    {
    $pass_er="";
    }
else
{
    $pass_er="*Invalid Password";
}

if(preg_match("/^[0-255]\.[0-255]\.[0-255]\.[0-255]$/",$ip))
    {
    $ip_er="";
    }
else
{
    $ip_er="*Invalid IP";
}

if(preg_match("/(http:\/\/|https:\/\/)?[a-z]{4}\.[a-z\d\._-]\.[a-z]{2,4}^$/i",$url))
    {
    $url_er="";
    }
else
{
    $url_er="*Invalid url";
}

if(preg_match("/^[1-31]-[1-12]-\d{2,4}$/",$dob))
    {
    $dob_er="";
    }
else
{
    $dob_er="*Invalid dob";
}

}
echo "Form Values:<br>";
echo $name."<br>".$email."<br>".$pass."<br>".$ip."<br>".$dob."<br>".$gender."<br>".$mobile."<br>".$brief;
echo "<br>Name error:".$name_er;
echo "<br>Email error:".$email_er;
echo "<br>pass error:".$pass_er;
echo "<br>IP error:".$ip_er;
// echo "<br>URL error:".$url_er;
echo "<br>Dob error:".$dob_er;
?>
</body>
</html>