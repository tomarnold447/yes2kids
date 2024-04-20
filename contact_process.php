<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Validate inputs
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        // Handle validation errors
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email
        echo "Invalid email format.";
    } else {
        // Send email
        $to = "tomarnold447@gmail.com"; // Change this to your email address
        $headers = "From: $name <$email>" . "\r\n";
        $headers .= "Reply-To: $email" . "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $message_body = "
            <html>
            <body>
                <h2>Contact Form Submission</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Subject:</strong> $subject</p>
                <p><strong>Message:</strong> $message</p>
            </body>
            </html>";
        if (mail($to, $subject, $message_body, $headers)) {
            echo "Message sent successfully. We'll get back to you shortly!";
        } else {
            echo "Failed to send message. Please try again later.";
        }
    }
} else {
    // Handle non-POST requests
    echo "Invalid request method.";
}
?>
