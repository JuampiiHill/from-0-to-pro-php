<?php 

require "mail.php";

function validate($name, $email, $subject, $message) {
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if ( isset($_POST["form"]) ) {

    if ( validate($_POST["name"],
    $_POST["email"], $_POST["subject"], $_POST["message"]) ) {

        $name = htmlentities($_POST["name"]);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $subject = htmlentities($_POST["subject"]);
        $message = htmlentities($_POST["message"]);

        $body = "$name <$email> te envia el siguiente mensaje: <br><br> $message";

        // Mandar el correo
        sendMail($subject, $body, $email, $name, true);

        $status = "success";
    }
    else {
        $status = "danger";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact form</title>
</head>
<body>

    <?php if($status == "danger"): ?>
    <div class="alert danger">
        <span>Danger alert! Change a few things up and try again</span>
    </div>
    <?php endif; ?>

    <?php if($status == "success"): ?>
    <div class="alert success">
        <span>Success</span>
    </div>
    <?php endif; ?>

    <form action="./" method="POST">

        <h1>Contact us!</h1>

        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject">
        </div>

        <div class="input-group">
            <label for="message">Mesagge</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div class="button-container">
            <button name="form" type="submit">Send</button>
        </div>

        <div class="contact-info">
            <div class="info">
                <span><i class="fas fa-map-marker-alt"></i>13 Saw Mill Circle, North Olmested.</span>
            </div>

            <div class="info">
                <span><i class="fas fa-phone"></i>+1 2345 654354</span>
            </div>
        </div>
    </form>
    
    <script src="https://kit.fontawesome.com/77c611d2bd.js" crossorigin="anonymous"></script>
</body>
</html>