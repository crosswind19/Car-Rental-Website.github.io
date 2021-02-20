<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'webp');

$name = $_POST['name'];
$pass = $_POST['password'];

//DB Step 3: SQL Command
$sql ="INSERT INTO usertable (name, pass) VALUES ('$name','$pass')";

// $result = mysqli_query($con, $sql);
//
// $num = mysqli_num_rows($result);

// if($num == 1){
//   echo "Username Already Taken";
// }else{
//   $reg = "insert into usertable(name, password) values('$name','$pass')";
//   mysqli_query($con, $reg);
//   echo "Registration Successful";
// }

 ?>
