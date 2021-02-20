<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME', 'webp');

function getGender(){
    return array(
        'F' => 'Female',
        'M' => 'Male'
    );
}

function getDepartment(){
    return array(
        'Database Department' => 'DD',
        'Information Technology' => 'IT',
        'Stock Department' => 'SD'
    );
}




function validateGender($gender){
    if($gender == null)
    {
        return "Please select your <b>gender</b>!";
    }
    else if(!$gender == "m" || !$gender == "f" || !$gender == "M" || !$gender == "F" )
    {
        return "PLease enter a valid <b>gender</b>!";
    }
}


function validateName($name){
    if($name == null)
    {
        return "Please enter your <b> name </b>!";
    }
    else if(strlen($name) > 30)
    {
        return "<b>Name</b> must not be more than 30 character!";
    }
    else if(!preg_match('/^[A-Za-z \.\',]+?/', $name))
    {
        return "Invalid <b>name</b>, please try again";
    }
}


//create function to check student id
function validateStaffID($id){
    if($id == null)
    {
        return "Please enter your <b>Staff ID</b>!";
    }
    else if(!preg_match('/^[A-Z]{2}[0-9]{4}$/',$id))
    {
        return "Invalid <b>Staff ID</b>!";
    }
    else if(checkStaffIDExistence($id))
    {
        //existence check - check duplicated primary key
        //dont allow same primary key into the system
        return "<b>Staff ID</b> given already exist!";
    }

}

function validatePhone($phone)
{
    if($phone == null)
    {
        return "Please enter your <b> Phone Number </b>!";
    }
}

function validatePassword($password)
{
    if($password == null)
    {
        return "Please enter your <b> Password </b>!";
    }
}

   function validateUsernameName($username)
{
    if($username == null)
    {
        return "Please enter your <b> username </b>!";
    }
    else if(checkStaffUserExistence($username))
    {
        return "<b>Username</b> given already exist!";
    }

}
//link to DB check primary key
function checkStaffIDExistence($id){
    //flag
    $exist = false;

    //DB Step 1:
    $con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    //DB Step 2: SQL Command
    //clear all unknown character and convert it to normal html tag
    //NOTEL SELECT * FROM student WHERE StudentID = 19PMD12345
    $id = $con->real_escape_string($id);
    $sql = "SELECT * FROM staff WHERE staff_ID = '$id'";

    //DB Step 3:
    //NOTE: SELECT function $con->$query()
    //NOTE: INSERT,UPDATE,D function $con->prepare()
    if($result = $con->query($sql)){
        if($result->num_rows>0){
            //record found
            $exist = true;
        }
    }
    //DB Step 4: close connection
    $result->free();
    $con->close();
    return $exist;

}

function checkStaffUserExistence($username){
    //flag
    $exist = false;

    //DB Step 1:
    $con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    //DB Step 2: SQL Command
    //clear all unknown character and convert it to normal html tag
    //NOTEL SELECT * FROM student WHERE StudentID = 19PMD12345
    $username = $con->real_escape_string($username);
    $sql = "SELECT * FROM staff WHERE Username = '$username'";

    //DB Step 3:
    //NOTE: SELECT function $con->$query()
    //NOTE: INSERT,UPDATE,D function $con->prepare()
    if($result = $con->query($sql)){
        if($result->num_rows>0){
            //record found
            $exist = true;
        }
    }
    //DB Step 4: close connection
    $result->free();
    $con->close();
    return $exist;

}
?>
