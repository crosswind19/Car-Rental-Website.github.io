<!DOCTYPE html>
<html>

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177875132-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-177875132-1');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MP Project | Registration</title>
    <link rel="icon" href="../assets/img/2020.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link href="style.css" rel="stylesheet" />

    <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<!--The log in form start here-->
<body class="bg-secondary">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" action="process.php" method="post">
                    <h1>Register</h1>
                    <p class="text-muted"> Please fill in your descriptionb</p>
                    <input type="text" name="email" id="email" aria-describedby="emailHelp" placeholder="Email Address">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <!-- Will do forget password if got time -->
                    <a class="forgot text-muted" href="#">Forgot password?</a> <br>
                    <a class="forgot text-muted" href="register.php">Don't have an account? Sign up now!</a>
                    <input type="submit" name="login" value="Login" href="#">

                    <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                    <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                    </div>
                    </div><button class="btn btn-primary btn-block text-white btn-user" type="submit" id="btn" value="login"name="login">Login</button> -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //////////////////////////////////////////////////////// -->
    <div class="container p-1">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-10">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-login-image" style="background:#221f20;"><br><br><br><br><br><br><br><br><br><br><br><img src="../loginRegister/assets/img/mainlogo.png" alt="jota joti 2020" class="img-fluid"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account & Join the Challenges Now !</h4>
                            </div>
                            <form class="user" action=insert.php method="post">
                              <!--Half length , Fname and Lname-->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" placeholder="First Name" name="first_name" required = "required"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" placeholder="Last Name" name="last_name"></div>
                                </div>

                                <!--Full length , Email& Address-->
                                <small id="JustHelp" class="form-text text-muted">Enter an Valid Email Address</small>
                                <div class="form-group"><input class="form-control form-control-user" type="email" aria-describedby="emailHelp" placeholder="Email Address" name="email" required = "required"></div>


                                <!--Half length , Password & Repeat-->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" placeholder="Password" name="password" required = "required"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="date" placeholder="Date of Birth" name="dob" required = "required"></div>
                                </div>

                                <small id="JustHelp" class="form-text text-muted">Enter Phone Number with Country Code (WhatsApp Used)</small>
                                <div class="form-group"><input class="form-control form-control-user" type="text" placeholder="Phone Number" name="phone_number" required = "required"></div>
                                <div class="form-group"><select class="form-control " type="text" name="address" required = "required">
                                  <option value="#">Choose Your State Here</option>
                                  <option value="Johor">Johor</option>
                                  <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                                    <option value="Labuan">Labuan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Putrajaya">Putrajaya</option>
                                    <option value="Sabah">Sabah</option>
                                    <option value="Sarawak">Sarawak</option>
                                    <option value="Selangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                  </select>
                                  </div>

                                  <!-- <small id="JustHelp" class="form-text text-muted">Enter Full Length Scout Troop Name</small>
                                  <small id="JustHelp" class="form-text text-muted">Examples : Rover C GeorgeTown(South) , Penang</small>
                                <div class="form-group"><input class="form-control form-control-user" type="text" placeholder="Scout Troop Names" name="postal_code" ></div> -->

                                <!-- <label >Select Categories</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cat" value="1" >
                                    <label class="form-check-label">
                                      Junior Scout (7 Years Old - 12 Years Old )
                                    </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="cat" value="0" >
                                  <label class="form-check-label">
                                      Senior Scout (13 Years Old - 18 Years Old)
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="cat" value="2" >
                                  <label class="form-check-label">
                                      Adult (Above 18 Years Old)
                                  </label>
                                </div>
                                <hr> -->
                                <!-- <button class="g-recaptcha"
                                    data-sitekey="reCAPTCHA_site_key"
                                    data-callback='onSubmit'
                                    data-action='submit'>Submit
                                </button> -->

                                <!-- <div class="g-recaptcha" data-sitekey="6LcBcssZAAAAAMQ1-hFLN8pPu5KLZQNKiilymHMt"></div> -->
                                <br>
                                <!--full Length , Register Button-->
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit" value ="submit">Register Account</button>

                            </form>
                            <!-- <label for="formGroupExampleInput">Example label</label> -->
                            <div class="text-center"><a class="small" href="login.php">Already have an account? Login!</a></div>
                            <br>
                            <a class="btn btn-secondary btn-block text-white btn-user" href="../index.php" role="button">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
