<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formType     = $_POST['form_type'] ?? '';
    $name         = htmlspecialchars($_POST['name'] ?? '');
    $contact      = htmlspecialchars($_POST['contact'] ?? '');
    $from         = htmlspecialchars($_POST['from'] ?? '');
    $to           = htmlspecialchars($_POST['to'] ?? '');
    $pickupDate   = $_POST['pickup_date'] ?? '';
    $pickupTime   = $_POST['pickup_time'] ?? '';
    $ampm         = strtoupper(trim($_POST['ampm'] ?? ''));
    $returnDate   = $_POST['return_date'] ?? '';
    $email        = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $pageTitle    = htmlspecialchars($_POST['page_title'] ?? 'Website Booking');

    $finalTime = $pickupTime . ' ' . $ampm;

    // Required field validation
    if (
        empty($formType) || empty($name) || empty($contact) || empty($email) ||
        empty($from) || empty($to) || empty($pickupDate) || empty($pickupTime) || empty($ampm)
    ) {
        echo "<script>alert('Please fill all required fields.'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.'); window.history.back();</script>";
        exit;
    }

    // 1. Mail to Admin
    $toEmail = "kubercab4444@gmail.com";
    $subject = "Kuber Cab - New " . strtoupper($formType) . " Booking Request";

    $message  = "🚖 Kuber Cab Booking Details:\n\n";
    $message .= "Form Type: " . strtoupper($formType) . "\n";
    $message .= "Page: $pageTitle\n";
    $message .= "Name: $name\n";
    $message .= "Contact Number: $contact\n";
    $message .= "Email: $email\n";
    $message .= "From: $from\n";
    $message .= "To: $to\n";
    $message .= "Pickup Date: $pickupDate\n";
    $message .= "Pickup Time: $finalTime\n";
    if ($formType === 'roundtrip') {
        $message .= "Return Date: $returnDate\n";
    }
    $message .= "\n✅ Please follow up with the customer for confirmation.";

    $headers  = "From: Kuber Cab <kubercab4444@gmail.com>\r\n";
    $headers .= "Reply-To: kubercab4444@gmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 2. Auto reply to Customer
    $autoSubject = "Your booking with Kuber Cab is confirmed!";
    $autoMessage = "
    <html>
    <body style='font-family: Arial, sans-serif;'>
      <p>Dear $name,</p>
      <p>Thank you for booking with <strong>Kuber Cab</strong>!</p>
      <p>We’ve received your <strong>" . strtoupper($formType) . "</strong> request and will contact you shortly.</p>

      <p><strong>Booking Summary:</strong></p>
      <ul>
        <li><strong>From:</strong> $from</li>
        <li><strong>To:</strong> $to</li>
        <li><strong>Pickup Date:</strong> $pickupDate</li>
        <li><strong>Pickup Time:</strong> $finalTime</li>";
    if ($formType === 'roundtrip') {
        $autoMessage .= "<li><strong>Return Date:</strong> $returnDate</li>";
    }
    $autoMessage .= "</ul>

      <p style='margin-top: 20px;'>
        📞 <strong>Call us:</strong>
        <a href='tel:+917775000223'>+91 77750 00223</a><br>
        💬 <strong>WhatsApp us:</strong>
        <a href='https://wa.me/917775000223' target='_blank'>Click to Chat</a>
      </p>

      <p><strong>Feel free to call or WhatsApp us if you have any questions.</strong></p>

      <p>Warm regards,<br>
      <strong>Kuber Cab Team</strong></p>
    </body>
    </html>";

    $autoHeaders  = "From: Kuber Cab <kubercab4444@gmail.com>\r\n";
    $autoHeaders .= "MIME-Version: 1.0\r\n";
    $autoHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($email, $autoSubject, $autoMessage, $autoHeaders);

    // 3. Send to admin
    if (mail($toEmail, $subject, $message, $headers)) {
        echo "<script>window.location.href='thank-you.php';</script>";
    } else {
        echo "<script>alert('Failed to send booking. Please try again.'); window.history.back();</script>";
    }
} else {
    echo "Invalid request.";
}
?>
