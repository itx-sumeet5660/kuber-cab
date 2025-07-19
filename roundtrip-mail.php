<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] === 'roundtrip') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $contact = htmlspecialchars($_POST['contact'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $from = htmlspecialchars($_POST['from'] ?? '');
    $to = htmlspecialchars($_POST['to'] ?? '');
    $pickupDate = $_POST['pickup_date'] ?? '';
    $returnDate = $_POST['return_date'] ?? '';
    $pickupTime = $_POST['pickup_time'] ?? '';
    $ampm = $_POST['ampm'] ?? '';
    $pageTitle = htmlspecialchars($_POST['page_title'] ?? 'Round Trip Booking');

    if (!$name || !$contact || !$email || !$from || !$to || !$pickupDate || !$pickupTime || !$ampm || !$returnDate) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    $finalTime = "$pickupTime $ampm";
    $adminEmail = "kubercab4444@gmail.com";

    // Email to admin
    $subject = "Round Trip Booking - $pageTitle";
    $message = "Page: $pageTitle\nName: $name\nContact: $contact\nEmail: $email\nFrom: $from\nTo: $to\nPickup Date: $pickupDate\nPickup Time: $finalTime\nReturn Date: $returnDate";
    $headers = "From: Kuber Cab <kubercab4444@gmail.com>\r\n";

    // Confirmation to customer
    $customerSubject = "Your Round Trip Booking - Kuber Cab";
    $customerMessage = "
    <html><body>
    <p>Hi $name,</p>
    <p>Thank you for booking your round trip with <strong>Kuber Cab</strong>.</p>
    <p><strong>Booking Details:</strong></p>
    <ul>
      <li>From: $from</li>
      <li>To: $to</li>
      <li>Pickup Date: $pickupDate</li>
      <li>Pickup Time: $finalTime</li>
      <li>Return Date: $returnDate</li>
    </ul>
    <p>We will contact you soon for confirmation.</p>
    <p>Regards,<br>Kuber Cab Team</p>
    </body></html>
    ";
    $customerHeaders = "MIME-Version: 1.0\r\n";
    $customerHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";
    $customerHeaders .= "From: Kuber Cab <kubercab4444@gmail.com>\r\n";

    mail($adminEmail, $subject, $message, $headers);
    mail($email, $customerSubject, $customerMessage, $customerHeaders);

    header("Location: thank-you.php");
    exit;
} else {
    die("Invalid request.");
}
?>
