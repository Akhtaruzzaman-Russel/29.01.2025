<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

// $username="zaman";
// $password="123456";

$username = $_POST["email"];
$password = $_POST["password"];

// echo "aste parchi",

// exit();

/*
if ($username == "zaman" && $password=="123456"){
    echo "Login Success";
}else{
    echo "ai beta chor";
}

*/



if ($username == "admin@gmail.com" && $password=="123456"){
    header ("location: dashboard.php");
}else{
    header ("location: login.php?msg=Login Failed - Try again");
}



?>



</body>
</html>