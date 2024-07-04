<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $firstName = htmlspecialchars($_POST['firstname']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);

    
    echo "<h2>Your Input:</h2>";
    echo "First Name: " . $firstName . "<br>";
    echo "Last Name: " . $lastName . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Subject: " . $subject . "<br>";
    
    $to = "cveg2019@gmail.com";
    $headers = "From: " . $email;
    $txt = "You have received an email from " . $firstName . " " . $lastName . ".\n\n" . $subject;


	if (mail($to, $emailSubject, $message, $headers)) {
        echo "Thank you for contacting us, $firstName. Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }

}
?>
