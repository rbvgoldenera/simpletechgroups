<?php
include ('../config/config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../libraries/PHPMailer/src/Exception.php';
require '../libraries/PHPMailer/src/PHPMailer.php';
require '../libraries/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 🔐 Sanitize Inputs
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $message = nl2br(htmlspecialchars(trim($_POST['message'])));

    try {

        /* =====================================================
           1️⃣ ADMIN MAIL (MAIL TO US)
        ===================================================== */
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = $mailer_host_name;
        $mail->SMTPAuth   = $mailer_smtp_auth;
        $mail->Username   = $mailer_user_name;
        $mail->Password   = $mailer_user_pass;
        $mail->SMTPSecure = $mailer_protocol;
        $mail->Port       = $mailer_port;

        $mail->setFrom($mailer_from_address, $mailer_from_name);
        $mail->addAddress($mailer_to_address); // ADMIN MAIL
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "New Community Join Request";

        $mail->Body = "
            <h2>New Community Join Request</h2>

            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Message:</strong><br>{$message}</p>

            <hr style='margin:25px 0;'>

            <p style='font-size:13px;color:#777;text-align:center;'>
                © 2026 <strong>Simple Tech Groups</strong> — A Product of
                <strong>RBV Golden Era Evolutions</strong><br>
                Made in India 🇮🇳 | Empowering Digital Futures
            </p>
        ";

        $mail->send();


        /* =====================================================
           2️⃣ USER AUTO-REPLY MAIL (MAIL TO SUBMITTER)
        ===================================================== */
        $userMail = new PHPMailer(true);
        $userMail->isSMTP();
        $userMail->Host       = $mailer_host_name;
        $userMail->SMTPAuth   = $mailer_smtp_auth;
        $userMail->Username   = $mailer_user_name;
        $userMail->Password   = $mailer_user_pass;
        $userMail->SMTPSecure = $mailer_protocol;
        $userMail->Port       = $mailer_port;

        $userMail->setFrom($mailer_from_address, $mailer_from_name);
        $userMail->addAddress($email, $name); // USER MAIL

        $userMail->isHTML(true);
        $userMail->Subject = "Welcome to Simple Tech Groups – Your Freelance & Digital Growth Platform";

        $userMail->Body = "
            <p>Hi <strong>{$name}</strong>,</p>
            
            <p>
            Thank you for connecting with <strong>Simple Tech Groups</strong>.
            We are a <strong>freelancer-driven digital platform</strong> that connects
            <strong>freelancers, students, startups, and businesses</strong> with
            real-world projects, technology solutions, and growth opportunities.
            </p>
            
            <p>
            Your request has been successfully received, and our team will carefully
            review your details. Based on your interest, we will guide you on how you
            can <strong>collaborate, work, or grow</strong> with us through our platform.
            </p>
            
            <p><strong>Your Submitted Message:</strong><br>{$message}</p>
            
            <p>
            If your enquiry is related to <strong>freelance work, internships,
            project collaboration, or digital services</strong>, rest assured —
            you are at the right place.
            </p>
            
            <p>
            Our team will get back to you shortly with the next steps.
            </p>
            
            <hr style='margin:25px 0;'>
            
            <p style='font-size:13px;color:#777;text-align:center;'>
                © 2026 <strong>Simple Tech Groups</strong> — A Product of
                <strong>RBV Golden Era Evolutions</strong><br>
                Made in India 🇮🇳 | Empowering Digital Futures
            </p>
        ";

        $userMail->send();

        // ✅ SUCCESS RESPONSE
        echo "<script>
                alert('Thank you! Your request has been submitted successfully.');
                window.location.href = '".$base_url."';
              </script>";

    } catch (Exception $e) {
        echo "Mail Error: {$mail->ErrorInfo}";
    }
}
