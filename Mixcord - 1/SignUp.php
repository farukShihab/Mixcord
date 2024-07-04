<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Mixcord";

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("DS connection failed" . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if($conn->query($sql)){
    echo "<br>Database created!";
}else{
    die("<br>database error: ".$conn->error);
}

$conn->close();


//if($pageState==1)include "SignUp.html";
//else if($pageState== 2)include "LogIn.html";

//$username;
//$password;
$email="";
$conn = new mysqli($servername,$username,$password,$dbname);
$username="";
$password="";
if(isset($_GET["username"])){
    $username = $_GET["username"];
    //echo "<br>".$username;
}

if(isset($_GET["password"])){
    $password = $_GET["password"];
    //echo "<br>".$password;
}

if(isset($_GET["email"])){
    $email = $_GET["email"];
    //echo "<br>".$email;
}

$sql="INSERT INTO `user_info` (username,password,email) VALUES('$username','$password','$email')";

if($username!="root")
if($username!="" && $password!="" && $email!="" && $conn->query($sql) ){
    echo "<br>Value inserted!";
    //header("Location: MainPage.html");
    //exit;
}
else if($username=="" || $email=="" || $password==""){
    echo "<br>Please fill out every field!!";
}
else{
    die("<br>Error: ".$conn->error);
}


$conn->close();
?>
