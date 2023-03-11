<?php
if (!isset($_POST['submit'])) {
    //This page should not be accessed directly. Need to submit the form.
    echo "error; you need to submit the form!";

}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['house number'];
$street = $_POST['street name'];
$city = $_POST['city town'];
$province = $_POST['province'];
$country = $_POST['country'];
$postal = $_POST['postal code zip'];
$message = $_POST['message'];

//Validate first
if (empty($name) || empty($visitor_email) || empty($number) || empty($street) || empty($city) || empty($province) || empty($country) || empty($postal) || empty($message)) {
    echo "All fields are Mandatory";
}
$email_from = 'bondyacc@gmail.com';
$email_subject = "New Form Submission";
// When I tried to save with the next line it gave me an error, so I revamped it.
$email_body = "You have received a new message from the user $name.\n" .
    "Email address: $visitor_email\n" .
    "House number: $number\n" .
    "Street name: $street\n" .
    "City/Town: $city\n" .
    "Province: $province\n" .
    "Country: $country\n" .
    "Postal code/Zip: $postal\n" .
    "Here is the message:\n$message";

// The next 2 lines are suspect. It wouldn't work with the goofy code that he had there so I changed it to what I thought it should be
// $email_body = "You have received a new message from the user" .
//     $name . "Here is the message:" . $message;

$to = "bondyacc@gmail.com";
$headers = "From: $email_from \r\n";

// syntax mail(to, subject, message, headers)
// Code to send th email
if (mail($to, $email_subject, $email_body, $headers)) {
    echo "Thank you for your message!";
} else {
    echo "Sorry, there was an error sending your message.";
}
?>