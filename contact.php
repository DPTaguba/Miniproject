<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $userMessage = $_POST["message"];

    $message = "Thank you, " . htmlspecialchars($username) . "! Your message has been received.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<header>
    <h1>Contact Me</h1>
    <nav>
        <a href="index.html">Home</a>
        <a href="aboutme.php">About Me</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section>

    <h2>Send Me a Message</h2>

    <form method="POST" action="">
        <label>Name:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Email:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Your Message:</label><br>
        <textarea name="message" required></textarea><br><br>

        <button type="submit">Send</button>
    </form>

    <p style="color:white;">
        <?php echo $message; ?>
    </p>

    <hr>

    <h3>Connect with me through these social media</h3>

    <div class="social-links">
        <a href="https://www.facebook.com/adaveil1" target="_blank">
            <i class="fab fa-facebook"></i> Facebook
        </a><br></br>

        <a href="https://www.instagram.com/adaveil1/" target="_blank">
            <i class="fab fa-instagram"></i> Instagram
        </a><br></br>

        <a href="https://github.com/DPTaguba" target="_blank">
            <i class="fab fa-github"></i> Github
   

    </div>

</section>

</body>
</html>
