<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: test.php");
    exit;
}

// Include db_info file
require_once "validation.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT  name,password,phone_no,username,gender FROM staff WHERE username = ?";

            $con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
           $stmt = $con->prepare($sql);
            // Bind variables to the prepared statement as parameters

           $stmt->bind_param('s', $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt,$name,$hashed_password, $phone, $username, $gender );
                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $hashed_password){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            // $_SESSION["staffid"] = $staff;
                            $_SESSION["name"] = $name;
                            $_SESSION["gender"] = $gender;
                            $_SESSION["phone"] = $phone;
                            $_SESSION["password"] = $password;

                            $_SESSION["username"] = $username;


                            // Redirect user to Profile page
                            header("location: test.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "<p> <font color=red>No account found with that username.</p>";
                }
            } else{
                echo "<p> <font color=blue font face='arial' size='2pt'>Oops! Something went wrong. Please try again later.</p>";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection

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

              <form class="box" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <h1>Login</h1>
                  <div class="inputBox<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                      <input type="text" style="color: whitesmoke" name="username" placeholder="Username" required=""value="<?php echo $username; ?>">
                      <span class="help-block"><?php echo $username_err; ?></span>

                  </div>
                  <div class="inputBox <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                      <input type="password" style="color: whitesmoke" name="password" placeholder="Password" required=""/>

                      <span class="help-block"><?php echo $password_err; ?></span>

                  </div>

                  <a class="forgot text-muted" href="register.php">Don't have an account? Sign up now!</a>

                  <input type="submit"name="submit"value="Log In">


              </form>
                <!-- <form class="box" action="validation.php" method="post">
                    <h1>Login Page</h1>
                    <p class="text-muted"> Please enter your login and password!</p>
                    <input type="text" name="user" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <a class="forgot text-muted" href="register.php">Sign Up Now!</a>
                    <input type="submit" name="" value="Login" href="#">
                    <button type="submit" class="btn btn-primary"> Login </button>

                </form> -->
            </div>
        </div>
    </div>
</div>
  </body>
</html>
