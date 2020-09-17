<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <form method="post" action="process.php">

    Name: <input type="text" name="name"> <br/>
    Email: <input type="text" name="email"> <br/>
    Address: <input type="text" name="address"> <br/>
    Password: <input type="password" name="password">   <br/>
    Confim password: <input type="password" name="confirmPassword">  <br/>
    <p>    
    <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>

<?php 

$i = array("aaa", "bbb", "ccc");

foreach ($i as $index => $value) {
	myPrint($index, $value);
}

function myPrint($index, $value)
{
    echo "$index $value <br />";
}

?>