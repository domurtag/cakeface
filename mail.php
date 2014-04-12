<?php
if ($_POST) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $message  = $_POST['text'];
    $subject = "cakefacemakeup.ie enquiry from: $name";

    $headers = "" .
        "Reply-To:" . $email . "\r\n" .
        "From:" . $email . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    //send email   
    mail("info@cakefacemakeup.ie", $subject, $message, $headers);
}

?>