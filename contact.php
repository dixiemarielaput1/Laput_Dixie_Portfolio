<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once('includes/connect.php');  


$fname = trim($_POST['first_name'] ?? ''); 
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$msg = trim($_POST['comments'] ?? '');

$errors = [];  
$response = [];


if ($fname === '') {
    $errors['first_name'] = 'First Name cannot be empty';
}

if ($msg === '') {
    $errors['comments'] = 'Message cannot be empty';
}

if ($email === '') {
    $errors['email'] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email_invalid'] = 'Please provide a valid email address';
}


if (!empty($errors)) {
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit();
}

try {

    $query = "INSERT INTO contacts (name, phone, email, message) 
              VALUES (:fname, :phone, :email, :msg)";
    $stmt = $connection->prepare($query);

    $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);  
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);  
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);  
    $stmt->bindParam(':msg', $msg, PDO::PARAM_STR);      

   
    if ($stmt->execute()) {

        $to = 'dixiemarielaput1@gmail.com';  
        $subject = 'New Contact Form Submission';
        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: $fname\n";
        $message .= "Phone: $phone\n";
        $message .= "Email: $email\n";
        $message .= "Message: $msg\n";


        if (mail($to, $subject, $message)) {
            $response = ['success' => true, 'message' => 'Your message has been successfully submitted!'];
        } else {
            $response = ['success' => false, 'message' => 'Failed to send email. Please try again later.'];
        }
    } else {
        $response = ['success' => false, 'message' => 'Could not save your message in the database. Please try again later.'];
    }

    echo json_encode($response);

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}

$stmt = null;

?>
