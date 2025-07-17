<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize Inputs
    $name     = htmlspecialchars($_POST['name'] ?? '');
    $email    = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone    = htmlspecialchars($_POST['phone'] ?? '');
    $from     = htmlspecialchars($_POST['from'] ?? '');
    $to       = htmlspecialchars($_POST['to'] ?? '');
    $date     = htmlspecialchars($_POST['date'] ?? '');
    $time     = htmlspecialchars($_POST['time'] ?? '');
    $ampm     = htmlspecialchars($_POST['ampm'] ?? '');

    $fullTime = $time . ' ' . strtoupper($ampm);

    // Validate inputs
    if (!$name || !$email || !$phone || !$from || !$to || !$date || !$time || !$ampm) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address.'); window.history.back();</script>";
        exit;
    }

    // 1. Email to Kuber Cab
    $toEmail = "kubercab4444@gmail.com";
    $subject = "Nashik Local Booking - $name";

    $message  = "🛺 Nashik Local Cab Booking Request:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Pickup Location: $from\n";
    $message .= "Drop Location: $to\n";
    $message .= "Date: $date\n";
    $message .= "Time: $fullTime\n";
    $message .= "\n📞 Please contact the customer to confirm.";

    $headers  = "From: Kuber Cab <kubercab4444@gmail.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 2. Auto-reply to Customer
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

      <p>Warm regards,<br>
      Kuber Cab Team</p>
    </body>
    </html>
    ";

    $autoHeaders  = "From: Kuber Cab <kubercab4444@gmail.com>\r\n";
    $autoHeaders .= "MIME-Version: 1.0\r\n";
    $autoHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";

    // 3. Send Emails
    if (mail($toEmail, $subject, $message, $headers)) {
        mail($email, $autoSubject, $autoMessage, $autoHeaders); // auto-reply
        echo "<script>window.location.href='thank-you.html';</script>";
    } else {
        echo "<script>alert('Failed to send booking. Please try again.'); window.history.back();</script>";
    }
} else {
    echo "Invalid request.";
}
?>
