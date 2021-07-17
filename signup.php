<?php

//<!--start session-->
session_start();
//<!--Connect to database-->
include('connection.php');

//check user input
//define errors message
$errors = "";
$missingUsername = '<p><strong>Please enter a username!</strong></P>';
$missingEmail = '<p><strong>Please enter your email address!</strong></p>';
$invalidEmail = '<p><strong>Please enter a valid email address</strong></p>';
$missingPassword = '<p><strong>Plrase enter a password</strong></p>';
$invalidPassword = '<p><strong>Your password should be at least 6 characters long and include one capital letter and one number</strong></p>';
$differentPassword = '<p><strong>Password don\'t match!</strong></p>';
$missingPassword2 = '<p><strong>Confirm your passsword</strong></p>';

//get username, email, password and password2
if(empty($_POST["username"])) {
    $errors .= $missingUsername;
}else{
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
}

//get email
if(empty($_POST["email"])) {
    $errors .= $missingEmail;
} else {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors .=$invalidEmail;
    }
    
}

    
    


//Get passwords
if(empty($_POST["password"])) {
    $errors .= $missingPassword;
} elseif(!(strlen($_POST["password"])>6 
            and preg_match('/[A-Z]/',$_POST["password"]) 
            and preg_match('/[0-9]/', $_POST["password"]))) {
    $errors .=$invalidPassword;
}else {
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

    if(empty($_POST["password2"])) {
        $errors .= $missingPassword2;
    } else {
        $password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING); 
        if($password !== $password2) {
            $errors .= $differentPassword;
        }
    }
        
}
//if there are any errors print error
if($errors) {
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;
    exit;
}

//no errors
//prepare variables for the querries
$username = mysqli_real_escape_string($link, $username);
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);
$password = md5($password);
//128 bits -> 32 characters
//256 bits -> 64 characters

//if username exists in the users table print error
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($link, $sql);
if(!$result) {
    echo '<div class="alert alert-danger">Error running the query</div>';
    //echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';(deburging)
    exit;
}
$results = mysqli_num_rows($result);
if($results) {
    echo '<div class="alert alert-danger">That username is already registered. Do you want to log in?</div';
    exit;
}

//if email exists in the users table print error
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($link, $sql);
if(!$result) {
    echo '<div class="alert alert-danger">Error running the query</div>';
    exit;
}
$results = mysqli_num_rows($result);
if($results) {
    echo '<div class="alert alert-danger">That email is already registered. Do you want to log in?</div>';
    exit;
}
//Create a unique activation code
$activationkey = bin2hex(openssl_random_pseudo_bytes(16));
//byte: unit of data = 8 bits
// bit: 0 or 1
//16 bytes = 16* 8 128 bits
//(2*2*2*2)*2*2*2*2*...*2 
//16*16...*16
//32characters

//insert user details and activation code in the users table
$sql = "INSERT INTO users (`username`, `email`, `password`, `activation`)
 VALUES('$username', '$email', '$password', '$activationkey')";
 $result = mysqli_query($link, $sql);
    if(!$result) {
        echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>';
        exit;
    }

    //send the user an email with a link to activate.php with their email and activation code
    $message = "Please click on the link to activitate your account: \n\n";
    $message .= "https://http://localhost/OnlineNoteApp/activate.php?email=" . urldecode($email) . "&key=$activationkey";
if(mail($email, 'Confirm your registration', $message, 'From:'.'ceideandreson@ymail.com')) {
    echo '<div class="alert alert-success">Thank you for your registration. A confirmation email has been sent to $email. Please click on the activation link to activate your account.</div>';
    echo '<div class="alert alert-danger">' . mysqli_error(mail) . '</div>';
}
 
?>