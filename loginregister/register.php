<?php


        require_once 'Validation.php';
        ?>

        <?php
        //check if user click the submit??
        if(!empty($_POST)) //if something post back
        {
            //retrieve user input, store into a variable
            //trim means a method to remove whitespace in the value
            // $id = strtoupper(trim($_POST['id']));
            $name = trim($_POST['name']);

            isset($_POST['gender'])?
            $gender = trim($_POST['gender']):
            $gender = "";
            $phone = trim($_POST['phone']);

            isset($_POST['department'])?
            $selectedDepartment = trim($_POST['department']):
            $selectedDepartment = "";

            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            //Validation
            //DB Step 1: Validation

            // $error['id'] = validateStaffID($id);
            $error['name'] = validateName($name);
            $error['gender'] = validateGender($gender);

            $error['phone'] = validatePhone($phone);
            $error['username'] = validateUsernameName($username);
            $error['password'] = validatePassword($password);

            //remove null value in $error when there is
            //no error
            $error = array_filter($error);

            if(empty($error))
            {
                //DB Step 2: Establish connection to the DB
                $con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

                //DB Step 3: SQL Command
                $sql ="INSERT INTO user ( Name, Gender, Phone_No,Username,Password) VALUES (?, ?, ?,?,?)";

                //DB Step 4: Get the connection object to perform the SQL command
                $stmt = $con->prepare($sql);

                //DB Step 4.1: Pass in the parameter to ?,?,?,?
                //                 VVVV 4 strings
                $stmt->bind_param('sssss', $name, $gender, $phone,$username,$password);

                //DB Step 4.2: Run and execute statement
                 $stmt->execute();

                if($stmt->affected_rows>0)
                {
                    echo '<script>alert("Sucessfully Inserted")</script>';
                    //reset fields
                    $name=$gender=$phone=$username=$password= null;
                }
                else
                {
                    //insert failed
                    echo '
                        <div class="error">DATABASE ERROR! PLEASE TRY AGAIN.</div>
                        ';
                }
            }
            else
            {
                //with error - validation
                echo "<ul class='error'>";
                foreach($error as $value){
                    echo"<li>$value</li>";
                }
                echo "</ul>";
            }
        }


        ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MP Project | Login and Register</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" action="" method="post">
                  <h1>Register</h1>

                          <td><input type="text" style="color: whitesmoke" name="name" placeholder="Name" value="<?php echo isset($name)?$name:"" ?>" size="30" /></td>

                          <td><input type="text" style="color: whitesmoke" name="gender" placeholder="Gender (M for Male/F for Female)" value="<?php echo isset($gender)?$gender:"" ?>" size="30" /></td>
                          <!-- <td><input type="radio" style="color: rgb(198, 2, 92)" name="gender" placeholder="Male" value="M"
                                  <?php echo isset($gender)?($gender == 'M' ? 'checked = "checked"': ''):'' ?> />Male
                          <input type="radio" style="color: whitesmoke" name="gender" value="F"
                                  <?php echo isset($gender)?($gender == 'F' ? 'checked = "checked"': ''):'' ?>/>Female</td> -->

                          <td><input type="text" style="color: whitesmoke" name="phone" placeholder="Phone" value="<?php echo isset($phone)?$phone:"" ?>" size="10" /></td>

                          <td><input type="text" style="color: whitesmoke"  name="username" placeholder="Username" value="<?php echo isset($username)?$username:"" ?>" size="10" /></td>

                          <td><input type="password" style="color: whitesmoke" name="password" placeholder="password" value="<?php echo isset($password)?$password:"" ?>" size="10" /></td>

                          <a class="forgot text-muted" href="login.php">Already have an account? Sign in now!</a>
                          <input type="submit" value="Register" name="insert" onclick="lcoation='login.php'"/>
                          <input type="reset" value="Reset" name="reset" />
                          <input type="button" value="Back" name="cancel" onclick="location='../index.php'"/>
                </form>
            </div>
        </div>
    </div>
</div>
  </body>
</html>
