<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>MP Project | Insert </title>
     <link rel="icon" href="../assets/img/2020.png">
 </head>

 <body>

     <?php

     if (Isset($_POST['submit'])) {

       include "../conn.php";

       date_default_timezone_set("America/New_York");
       $timemou = date("Y-m-d h:i:s");

       $Fname = mysqli_real_escape_string($conn,$_POST['first_name']);
       $Lname = mysqli_real_escape_string($conn,$_POST['last_name']);
       $email = mysqli_real_escape_string($conn,$_POST['email']);
       $passW = mysqli_real_escape_string($conn,$_POST['password']);
       $dob = mysqli_real_escape_string($conn,$_POST['dob']);
       $phone = mysqli_real_escape_string($conn,$_POST['phone_number']);
       $address = mysqli_real_escape_string($conn,$_POST['address']);
       $postal = mysqli_real_escape_string($conn,$_POST['postal_code']);
       $cat = mysqli_real_escape_string($conn,$_POST['cat']);

      //Error handlers
      //Check for emptyfields
      if (empty($Fname) || empty($Lname) || empty($email) || empty($passW) || empty($dob) || empty($phone) || empty($address) || empty($postal))
      {
        echo ('<script>alert("Empty Slot!")</script>');
        echo "<script>window.location.href='register.php';</script>";
          exit();
      }else{
            //check if the input characters are Filer_validate_email
            if(!preg_match("/^[a-zA-Z]+/",$Fname) || !preg_match("/^[a-zA-Z]+/",$Lname)){
              echo ('<script>alert("Invalid Name !")</script>');
              echo "<script>window.location.href='register.php';</script>";
            exit();
            }
            else{
          //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
              echo ('<script>alert("Invalid Email")</script>');
              echo "<script>window.location.href='register.php';</script>";
              exit();
            }else{
              $sql = "select * from user where user_email = '$email'";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if ($resultCheck > 0){
                echo ('<script>alert("Email Taken!")</script>');
                echo "<script>window.location.href='register.php';</script>";
                exit();
              }
              // else{
              //   // reCAPTCHA verification code
              //   if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
              //     {
              //       $secret = '6LcBcssZAAAAADGcWch83rrHeiYaJlsZB-rcZIIS';
              //       $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
              //       $responseData = json_decode($verifyResponse);
              //   if($responseData->success)
              //     {
              //       $succMsg = 'Your contact request have submitted successfully.';
              //     }
              //     else
              //     {
              //       $errMsg = 'Robot verification failed, please try again.';
              //       echo ('<script>alert("Please Verify On Google reCAPTCHA , Thanks")</script>');
              //       exit();
              //   }
              //     }
                  else{

                  //hasting password
                  $hashedPwd = password_hash($passW, PASSWORD_DEFAULT);
                  //insert the user into the databased
                  $sql = "Insert into user (user_createT, user_Fname, user_Lname, user_email, user_pass, user_dob, user_pnumber, user_address, user_postalcode, user_cat, user_W1G1, user_W1G2, user_W2G1, user_W2G2, user_W3G1, user_W3G2, user_W4G1, user_W4G2)
                  VALUES ('$timemou', '$Fname', '$Lname', '$email', '$hashedPwd', '$dob', '$phone', '$address','$postal', '$cat', '0', '0', '0', '0','0', '0', '0', '0');";

                  mysqli_query($conn, $sql);

                  echo ('<script>alert("Register Sucessfully!")</script>');
                  // echo $sql ;
                  echo "<script>window.location.href='login.php';</script>";
                  exit();
          }
        // }
       }
      }
     }
    }
     //Ending
     else
     {
       header("Location: register.php");
       echo ("<script>alert('Insert Error');</script>");
       exit();
     }

     ?>
 </body>
 </html>
