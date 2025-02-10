<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

$conn=mysqli_connect("localhost","root","","db");
$useremail = $_POST["email"];
$password = $_POST["password"];

$query="SELECT * FROM user

WHERE email='$useremail' AND password='$password'";

if($conn==true){
    $sql= mysqli_query($conn,$query);
    if(mysqli_num_rows($sql)>0){
        echo"data ache";
    }else {
       echo "data pai nai";  
    }
    
}

// $sql= mysqli_query($conn,$query);

// if(mysqli_num_rows($sql)>0){
//     echo"data ache";
// }else {
//    echo "data pai nai";  
// }

// var_dump($sql);

exit();
// $username="zaman";
// $password="123456";

// $username = $_POST["email"];
// $password = $_POST["password"];





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