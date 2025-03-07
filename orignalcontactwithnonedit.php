<?php

require_once('includes/connect.php');  

// Collect POST data and initialize errors array
$fname = isset($_POST['first_name']) ? trim($_POST['first_name']) : ''; 
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$msg = isset($_POST['comments']) ? trim($_POST['comments']) : '';  

$errors = [];  
$response = [];

// Validate inputs
if (empty($fname)) {
    $errors['first_name'] = 'First Name cannot be empty';
}

if (empty($msg)) {
    $errors['comments'] = 'Message cannot be empty';
}

if (empty($email)) {
    $errors['email'] = 'Email is required';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email_invalid'] = 'Please provide a valid email address';
}

// If there are validation errors, return the error messages
if (!empty($errors)) {
    $response['success'] = false;
    $response['errors'] = $errors;
    echo json_encode($response);
    exit();
}

try {
    // Prepare the SQL query to insert data into the contacts table
    $query = "INSERT INTO contacts (name, phone, email, message) 
            VALUES (:fname, :phone, :email, :msg)";
    $stmt = $connection->prepare($query);

    // Bind the parameters to the statement
    $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);  
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);  
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);  
    $stmt->bindParam(':msg', $msg, PDO::PARAM_STR);      

    // Execute the statement and check if the insert was successful
    if ($stmt->execute()) {
        // Prepare the email content
        $to = 'dixiemarielaput1@gmail.com';  
        $subject = 'New Contact Form Submission';
        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: $fname\n";
        $message .= "Phone: $phone\n";
        $message .= "Email: $email\n";
        $message .= "Message: $msg\n";

        // Send the email using PHP's mail function
        if (mail($to, $subject, $message)) {
            // Send success response
            $response['success'] = true;
            $response['message'] = 'Your message has been successfully submitted!';
        } else {
            // If email fails to send
            $response['success'] = false;
            $response['message'] = 'Failed to send email. Please try again later.';
        }

    } else {
        // If database insertion fails
        $response['success'] = false;
        $response['message'] = 'Could not save your message in the database. Please try again later.';
    }

    // Return the response in JSON format
    echo json_encode($response);

} catch (PDOException $e) {
    // If there is a database exception, return error
    $response['success'] = false;
    $response['message'] = 'Database error: ' . $e->getMessage();
    echo json_encode($response);
}

// Close the statement
$stmt = null;

?>
