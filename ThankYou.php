<?php
function safe_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}
$name = isset($_POST['name']) ? safe_input($_POST['name']) : 'Guest';
$email = isset($_POST['email']) ? safe_input($_POST['email']) : 'Not provided';
$message = isset($_POST['message']) ? safe_input($_POST['message']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <h1>Thank You!</h1>
    </header>
    <main>
        <section>
            <p>Thank you, <strong><?php echo $name; ?></strong>, for your feedback.</p>
            <p>We have received your message:</p>
            <blockquote><?php echo $message; ?></blockquote>
            <p>We will get back to you at <em><?php echo $email; ?></em> soon.</p>
        </section>
    </main>
    <footer>
    <div class="social-links">
        <a href="https://www.instagram.com/f01j_/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.snapchat.com/add/msk_a00?invite_id=i9fCSu1F&locale=en_US%40rg%3Dauzzzz&share_id=_d1YM7uKQKmO6yFeODiSZg&sid=6ef3f461c93f4021aa43b458c0eaf6d6" target="_blank"><i class="fab fa-snapchat"></i></a>
        <a href="https://www.tiktok.com/@msd_ad?_t=ZS-8wk94SQOIOF&_r=1" target="_blank"><i class="fab fa-tiktok"></i></a>
    </div>
    <p>&copy;Mohamed Al Katheeri 2025</p>
</footer>
</body>
</html>