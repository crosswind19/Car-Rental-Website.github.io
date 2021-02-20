<?php

        //include helper.php
        require_once 'Validation.php';
        ?>

        <?php
        //check if user click the submit??
        if(!empty($_POST)) //if something post back
        {
            //retrieve user input, store into a variable
            //trim means a method to remove whitespace in the value
            $id = strtoupper(trim($_POST['id']));
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

            $error['id'] = validateStaffID($id);
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
                $sql ="INSERT INTO staff (Staff_ID, Name, Gender, Phone_No,Username,Password) VALUES (?, ?, ?,?,?,?)";

                //DB Step 4: Get the connection object to perform the SQL command
                $stmt = $con->prepare($sql);

                //DB Step 4.1: Pass in the parameter to ?,?,?,?
                //                 VVVV 4 strings
                $stmt->bind_param('ssssss', $id, $name, $gender, $phone,$username,$password);

                //DB Step 4.2: Run and execute statement
                 $stmt->execute();

                if($stmt->affected_rows>0)
                {
                    echo '<script>alert("Sucessfully Inserted")</script>';
                    //reset fields
                    $id=$name=$gender=$phone=$username=$password= null;
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

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Main Page</title>
        <link href="css/style.css"rel="stylesheet">

    </head>

    <body>
        <img src="Midas Logo 4.jpg"alt="logo"class="image"width="450" height="200">
        <br>
        <br>
        <h1>Admin Register</h1>
       <form action="" method="POST">
            <table>
                <tr>
                    <td>Staff ID:</td>
                    <td><input type="text" name="id" value="<?php echo isset($id)?$id:"" ?>" size="10" /></td>
                </tr>

                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo isset($name)?$name:"" ?>" size="30" /></td>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="M"
                            <?php echo isset($gender)?($gender == 'M' ? 'checked = "checked"': ''):'' ?> />Male
                    <input type="radio" name="gender" value="F"
                            <?php echo isset($gender)?($gender == 'F' ? 'checked = "checked"': ''):'' ?>/>Female</td>
                </tr>

                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone" value="<?php echo isset($phone)?$phone:"" ?>" size="10" /></td>
                </tr>



                 <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo isset($username)?$username:"" ?>" size="10" /></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password" value="<?php echo isset($password)?$password:"" ?>" size="10" /></td>
                </tr>
            </table>
           <input type="submit" value="Register" name="insert" onclick="lcoation='adminlogin.php'"/>
            <input type="reset" value="Reset" name="reset" />
            <input type="button" value="Back" name="cancel" onclick="location='adminlogin.php'"/>
        </form>
    </body>
