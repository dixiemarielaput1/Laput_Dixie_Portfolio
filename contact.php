<?php

require_once('includes/connect.php');  

$fname = $_POST['first_name'] ?? ''; 
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$msg = $_POST['comments'] ?? '';  

$errors = []; 


$fname = trim($fname);
$phone = trim($phone);
$email = trim($email);
$msg = trim($msg);


if (empty($fname)) {
    $errors['first_name'] = 'First Name can\'t be empty';
}

if (empty($msg)) {
    $errors['comments'] = 'Message field can\'t be empty';
}

if (empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email_invalid'] = 'Please provide a valid email address';
}


echo "First Name: $fname, Phone: $phone, Email: $email, Message: $msg<br>";

if (empty($errors)) {
    $fname = mysqli_real_escape_string($connect, $fname);
    $phone = mysqli_real_escape_string($connect, $phone);
    $email = mysqli_real_escape_string($connect, $email);
    $msg = mysqli_real_escape_string($connect, $msg);

    $query = "INSERT INTO contacts (name, phone, email, message) 
              VALUES ('$fname', '$phone', '$email', '$msg')";

    if (mysqli_query($connect, $query)) {

        $to = 'dixiemarielaput1@gmail.com';  
        $subject = 'New Contact Form Submission';
        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: $fname\n";
        $message .= "Phone: $phone\n";
        $message .= "Email: $email\n";
        $message .= "Message: $msg\n";


        mail($to, $subject, $message);

  
        header('Location: thank_you.php');
        exit(); 
    } else {
     
        echo "Error: " . mysqli_error($connect);  
    }
} else {

    foreach ($errors as $error) {
        echo "<p style='color: red;'>$error</p>";
    }
}
?>
