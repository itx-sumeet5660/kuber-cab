<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $formType = strtolower($_POST['form_type'] ?? '');

    $name     = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone    = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $from     = filter_input(INPUT_POST, 'from', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $to       = filter_input(INPUT_POST, 'to', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $date     = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $time     = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $days     = filter_input(INPUT_POST, 'days', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $fullTime = trim($time . ' ' . strtoupper($_POST['ampm'] ?? ''));

    if (
        empty($formType) || empty($name) || empty($email) || empty($phone) ||
        empty($from) || empty($to) || empty($date) || empty($time)
    ) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.'); window.history.back();</script>";
        exit;
    }

    if ($formType === 'outstation' && empty($days)) {
        echo "<script>alert('Please enter number of days.'); window.history.back();</script>";
        exit;
    }

    $toEmail = "kubercab4444@gmail.com";
    $subject = "New " . ucfirst($formType) . " Booking from $name";

    $message  = "Form Type: " . ucfirst($formType) . "\n\n";
    $message .= "Name: $name\nEmail: $email\nPhone: $phone\n";
    $message .= "Pickup: $from\nDrop: $to\nDate: $date\nTime: $fullTime\n";

    if ($formType === 'outstation') {
        $message .= "Days: $days\n";
    }

    $message .= "\nPlease contact the customer to confirm the booking.";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    if (mail($toEmail, $subject, $message, $headers)) {

        // ✅ Auto-reply to customer
        $autoSubject = "Your booking with Kuber Cab is received!";
        $autoMessage = "
        <html>
        <body style='font-family: Arial, sans-serif;'>
          <p>Dear $name,</p>
          <p>Thank you for booking with <strong>Kuber Cab</strong>!</p>
          <p>We’ve received your request and will contact you shortly.</p>

          <p style='margin-top: 20px;'>
            📞 <strong>Call us:</strong>
            <a href='tel:+917775000223'>+91 77750 00223</a><br>
            💬 <strong>WhatsApp us:</strong>
            <a href='https://wa.me/917775000223' target='_blank'>Click to Chat</a>
          </p>

          <p><strong>Feel free to call us or contact us on WhatsApp if you have any questions.</strong></p>

          <p>Warm regards,<br>Kuber Cab Team</p>
        </body>
        </html>
        ";

        $autoHeaders  = "From: Kuber Cab <kubercab4444@gmail.com>\r\n";
        $autoHeaders .= "MIME-Version: 1.0\r\n";
        $autoHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";

        mail($email, $autoSubject, $autoMessage, $autoHeaders); // ✅ send auto-reply

        echo "<script>alert('Booking submitted successfully.'); window.location.href='thank-you.php';</script>";
    } else {
        echo "<script>alert('Failed to send email.'); window.history.back();</script>";
    }
} else {
    echo "Invalid request.";
}
?>
