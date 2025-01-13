<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $email = $data["email"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "support@stitchupdreams.vip";
        $subject = "New Subscriber for Wealth Offer";
        $message = "New email subscriber: $email";
        $headers = "From: no-reply@stitchupdreams.vip\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($to, $subject, $message, $headers)) {
            http_response_code(200);
            echo json_encode(["message" => "Email sent successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Failed to send email."]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Invalid email address."]);
    }
}
?>
