<?php
session_start();

// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize form input
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        // Redirect back with error if needed
        $_SESSION['error_message'] = "Please fill in all required fields.";
        header("Location: contact.php");
        exit;
    }

    // Email sending logic
    $to = "support@youritguy.net"; // Change to your actual email
    $subject = "New Contact Form Message from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (!mail($to, $subject, $body, $headers)) {
        $_SESSION['error_message'] = "There was an issue sending your message. Please try again.";
        header("Location: contact.php");
        exit;
    }

    // Show a JavaScript alert and redirect
    echo "<script>
        alert('Thank you, $name! Your message has been sent. If it is urgent please call us.');
        window.location.href = 'index.php';
    </script>";
    exit;
} else {
    // If accessed without POST, redirect to contact page
    header("Location: index.php");
    exit;
}
