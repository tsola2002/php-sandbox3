<?php

$errMessage = "";

$name = $_POST["name"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender=$_POST['Gender'];
$filename = $_FILES["file"] ["name"];

if ($_POST) {
    if (empty($name))
        $errMessage .= "Name cannot be left blank.<br>";
    if (empty($address))
        $errMessage .="Address cannot be left blank.<br>";
    if (empty($phone))
        $errMessage .= "Phone No cannot be left blank.<br>";
    else if (!filter_var($phone, FILTER_VALIDATE_INT))
        $errMessage .= "Invalid Phone Number.<br>";
    if (empty($email))
        $errMessage .= "Email cannot be left blank.<br>";
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $errMessage .= "Invalid Email ID.<br>";
    if (empty($password))
        $errMessage .= "Password cannot be left blank.<br>";
    if (empty($_POST["Gender"]))
        $errMessage .= "Gender cannot be left blank.<br>";
    if (empty($filename))
        $errMessage .= "Please upload Address proof.<br>";
if( $password!=$_POST["cpassword"])
    $errMessage .= "Password and Confirm Password must be same.<br>";
    if (empty($errMessage)) {
        echo "<html>
<head>

</head>
<body>
<h1>Thank You</h1>
<p>Thank you for registering. Here is the information you submitted:</p>

Name: $name<br>
Address: $address<br>
Phone No: $phone<br>
Email ID: $email<br>
Password: $password<br>
Gender: $gender<br>";


        $pathname = $_FILES["file"]["tmp_name"];
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "Proof/AddressProof.jpeg")) {
            echo "Address Proof: Successfully uploaded.<br>";
        } else {
            echo "Address Proof: There was a problem uploading your file - please try again<br>";
        }
    } else {

        echo "<font color=red>$errMessage</font>";
        exit(0);
    }
}
?>


