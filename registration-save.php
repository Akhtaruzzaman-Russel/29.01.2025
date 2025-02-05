<?php
$username=$_POST['username'];
$useremail=$_POST['email'];
$userpassword=$_POST['password'];


// echo $username;


$conn=mysqli_connect("localhost","root","","db");

/*
if($conn==true){
    echo "Connected successfully";
}else{
    echo "Connection failed" ;
}
*/
/*
if($conn==true){
    // echo "Connected successfully";
    // $query="INSERT INTO users (username, email, password) VALUES ('$username', '$useremail', '$userpassword')";
    $query="INSERT INTO `client`( `user`, `email`, `password`) VALUES ('zaman','admin@admin.com','123456')";
    mysqli_query($conn,$query);
}else{
    echo "Connection failed" ;
}
*/

if($conn==true){
    // echo "Connected successfully";
    // $query="INSERT INTO users (username, email, password) VALUES ('$username', '$useremail', '$userpassword')";
    $query="INSERT INTO `client`( `user`, `email`, `password`) VALUES ('$username','$useremail','$userpassword')";
   $sql= mysqli_query($conn,$query);

   if($sql){
    echo "New record created successfully";
   }else{
    echo"SOrry ghure aay";
   }
}else{
    echo "Connection failed" ;
}


// mysqli_query("INSERT INTO users (username, email, password) VALUES ('$username', '$useremail', '$userpassword')");


?>