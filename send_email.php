<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your-email@example.com";  // 🔹 Replace with your email
    $subject = "New Quran Student Registration - ReadRight Institute";

    $message = "📖 Quran Student Registration Form\n\n";
    foreach ($_POST as $key => $value) {
        if(is_array($value)) {
            $value = implode(", ", $value);
        }
        $message .= ucfirst(str_replace("_", " ", $key)) . ": " . $value . "\n";
    }

    $headers = "From: noreply@yourdomain.com";

    if(mail($to, $subject, $message, $headers)) {
        echo "✅ Thank you! Your registration has been submitted successfully.";
    } else {
        echo "❌ Error: Could not send your registration. Please try again.";
    }
}
?>
