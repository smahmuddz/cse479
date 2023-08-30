<head>
    <meta charset="UTF-8">
    <title>Profile</title>
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
?>
<table border=1 style="border-collapse:collapse;">
<tr>
<th colspan=2>Profile</th>
</tr>
<tr>
<td>ID</td>
<?php echo "<td>$id</td>" ?>
</tr>
<tr>
<td>Name</td>
<?php echo "<td>$name</td>" ?>
</tr>
<tr>
<td>Email</td>
<?php echo "<td>$email</td>" ?>
</tr>
<tr>
<td>User Type</td>
<?php echo "<td>$type</td>" ?>
</tr>
<tr>
<td colspan=2 style="text-align: right;"><a href="homepage.php">Go Home</a></td>
</tr>
</table>    
</body>
