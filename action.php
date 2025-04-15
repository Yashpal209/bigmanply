<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

include 'helper.php';

if (isset($_POST['contactus'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $messages = $_POST['messages'];

    $emailSubject = 'Bigman - Contact form';
    $message = "<html><body>
                <p>Name:  $name</p>
                <p>Email:  $email</p>
                <p>Email:  $phone</p>
                <p>Subject:  $subject</p>
                <p>Message:  $messages</p>
                </body></html>";

    $to = "info@bigmanpaly.com";

    $mail = sendmail($to, $emailSubject, $message);
    if ($mail == true) {
        echo "<script>
            alert('Your message has been sent successfully!');
            window.location.href = 'contact.php';
        </script>";
    } else {
        echo "<script>
            alert('Mail not sent. Please try again later.');
            window.location.href = 'contact.php';
        </script>";
    }
}


if (isset($_POST['Enquiry'])) {
    // echo "<pre>";
    // print_r($_POST);die;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $messages = $_POST['messages'];
    unset($_POST['Enquiry']);

    // Email details
    $subject = "Bigman - Enquiry from  $name";
    $message = "
    <html>
        <body>
            <p><strong>Name:</strong> $name </p>
            <p><strong>email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong> $messages</p>
        </body>
    </html>";

    $to = "info@bigmanpaly.com";
    $mail = sendmail($to, $subject, $message);

    if ($mail === true) {
        // // Insert enquiry into the database
        // $sql = "INSERT INTO `tbl_enquiry` (`pick`, `drop`, `bookdatein`, `bookdateend`, `name`, `phone`) 
        //         VALUES ('$pick', '$drop', '$bookdatein', '$bookdateend', '$name', '$phone')";

        // if (mysqli_query($conn, $sql)) {
        //     echo "<script>
        //         alert('Your enquiry has been saved successfully!');
        //         window.location.href = 'index.php';
        //     </script>";
        // } else {
        //     echo "<script>
        //         alert('Error: " . mysqli_error($conn) . "');
        //         window.location.href = 'index.php';
        //     </script>";
        // }

        // // Close the database connection
        // mysqli_close($conn);

        echo "<script>
            alert('Your Enquiry has been sent successfully!');
            window.location.href = 'index.php';
        </script>";
    } else {
        // Failure alert
        echo "<script>
            alert('Enquiry not sent. Please try again later.');
            window.location.href = 'index.php';
        </script>";
    }
}
