<?php
// roundtrip-mail.php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] === 'roundtrip') {
    $formType     = 'Round Trip';
    $name         = htmlspecialchars($_POST['name'] ?? '');
    $contact      = htmlspecialchars($_POST['contact'] ?? '');
    $email        = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $from         = htmlspecialchars($_POST['from'] ?? '');
    $to           = htmlspecialchars($_POST['to'] ?? '');
    $pickupDate   = $_POST['pickup_date'] ?? '';
    $returnDate   = $_POST['return_date'] ?? '';
    $pickupTime   = $_POST['pickup_time'] ?? '';
    $ampm         = $_POST['ampm'] ?? '';
    $pageTitle    = htmlspecialchars($_POST['page_title'] ?? 'Website Booking');

    $finalTime = $pickupTime . ' ' . $ampm;

    if (empty($name) || empty($contact) || empty($email) || empty($from) || empty($to) || empty($pickupDate) || empty($pickupTime) || empty($returnDate) || empty($ampm)) {
        echo "<script>alert('Please fill all required fields.'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.'); window.history.back();</script>";
        exit;
    }

    $adminEmail = "kubercab4444@gmail.com";
    $subject = "New Round Trip Booking - Kuber Cab";
    $message = "Page: $pageTitle\nName: $name\nContact: $contact\nEmail: $email\nFrom: $from\nTo: $to\nPickup Date: $pickupDate\nPickup Time: $finalTime\nReturn Date: $returnDate\n";

    $headers = "From: Kuber Cab <kubercab4444@gmail.com>\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $customerSubject = "Your Round Trip Booking Confirmation - Kuber Cab";
    $customerMessage = "<html><body><p>Dear $name,</p><p>Thank you for booking your round trip with <strong>Kuber Cab</strong>.</p><p><strong>Booking Details:</strong></p><ul><li><strong>From:</strong> $from</li><li><strong>To:</strong> $to</li><li><strong>Pickup Date:</strong> $pickupDate</li><li><strong>Pickup Time:</strong> $finalTime</li><li><strong>Return Date:</strong> $returnDate</li></ul><p>We will contact you shortly for confirmation.</p><p>Regards,<br>Kuber Cab Team</p></body></html>";
    $customerHeaders = "From: Kuber Cab <kubercab4444@gmail.com>\r\n";
    $customerHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($adminEmail, $subject, $message, $headers);
    mail($email, $customerSubject, $customerMessage, $customerHeaders);

    echo "<script>window.location.href='thank-you.php';</script>";
} else {
    echo "Invalid request.";
}
?>