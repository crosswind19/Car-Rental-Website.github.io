
<?php

if (isset($_POST['login'])) {
  session_start();
  include "../conn.php";

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $passW = mysqli_real_escape_string($conn, $_POST['password']);

//user
  //error handlers
  //check if input are empty
  if (empty($email) || empty($passW)){
    echo ('<script>alert("Field Empty : Please check your Field Input!");window.history.go(-1);</script>');
    exit();
  }
  // else{
  //   txtadEmail = getRequestString($email);
  //   txtadPass = getRequestString($passW);
  //   txtSQL - "SELECT * FROM admin where admin_email = @0";
  //   db.Execute(txtSQL,txtadEmail,txtSQL);
  // }
  else{
    $sql = "select * from user where user_email='$email'";
    $result = mysqli_query($conn , $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1){
      $sql2 = "select * from admin where admin_email='$email'";
      $result2 = mysqli_query($conn , $sql2);
      $resultCheck2 = mysqli_num_rows($result2);
      if ($resultCheck2 < 1){
        echo ('<script>alert("ADMIN = Wrong Email Address Enter: Please check your Email Input!");window.history.go(-1);</script>');
        exit();
      } else {
        if ($row2 = mysqli_fetch_assoc($result2)) {
          //De-Hashing the password
          $hashedPwdCheck2 = password_verify($passW , $row2['admin_pass']);
          if ($hashedPwdCheck2 == false) {
            echo ('<script>alert("ADMIN = Wrong Password Enter: Please check your Password Input!");window.history.go(-1);</script>');
            exit();
          }elseif($hashedPwdCheck2 == true){
            //log in the user here

            $_SESSION["ad_id"] = $row2["admin_id"];
            $_SESSION["ad_Fname"] = $row2["admin_Fname"];
            $_SESSION["ad_Lname"] = $row2["admin_Lname"];
            $_SESSION["ad_email"] = $row2["admin_email"];

            echo ('<script>alert("WELCOME ADMIN = Log In Success !")</script>');
            echo "<script>window.location.href='../adminPanel/examples/dahsboard.php';</script>";

            exit();
          }
        }
      }
      exit();
    } else {
      // else{
      //
      //   txtadEmail = getRequestString($email);
      //   txtadPass = getRequestString($passW);
      //   txtSQL - "SELECT * FROM admin where admin_email = @0";
      //   db.Execute(txtSQL,txtadEmail,txtSQL);
      //
      // }
      if ($row = mysqli_fetch_assoc($result)) {
        //De-Hashing the password
        $hashedPwdCheck = password_verify($passW , $row['user_pass']);
        if ($hashedPwdCheck == false) {
          echo ('<script>alert("Wrong Password Enter: Please check your Password Input!");window.history.go(-1);</script>');
          exit();
        }elseif($hashedPwdCheck == true){
          //log in the user here

          $_SESSION['u_id'] = $row["user_id"];
          $_SESSION['u_Fname'] = $row["user_Fname"];
          $_SESSION['u_Lname'] = $row["user_Lname"];
          $_SESSION['u_email'] = $row["user_email"];

          echo ('<script>alert("Log In Success!")</script>');
          echo "<script>window.location.href='userside.php';</script>";

          exit();
          }
        }
      }
    }
  }
  else{
       header ("Location: login.php?login=loginerror");
       exit();
     }

?>
</body>
</html>
