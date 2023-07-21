<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $question = $_POST['question'];

    $email_from = 'lprevost1208@gmail.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n" .
                  "User Email: $visitor_email.\n" .
                  "Subject: $subject.\n" .
                  "User Question: $question.\n";

    $to = 'lprevost1208@gmail.com';

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: contact.html");
        exit;
    } else {
        echo "There was a problem sending the email. Please try again later.";
    }
}
?>
