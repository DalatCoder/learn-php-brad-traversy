<?php
    $msg = "";
    $msgClass = "";

    $name = '';
    $email = '';
    $message = '';

    // Check for Submit
    if (filter_has_var(INPUT_POST, 'submit')) {
        // Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check Required Fields
        if (!empty($name) && !empty($email) && !empty($message)) {
            // Passed
            // Check Email
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                // Failed
                $msg = "Please use a valid email";
                $msgClass = 'alert-danger';
            } else {
                // Passed

                $toEmail = 'hieuntctk42@gmail.com';
                $subject = 'Contact Request From ' . $name;
                $body = "
                    <h2>Contact Request</h2>
                    <p>Name: $name</p>
                    <p>Email: $email</p>
                    <p>Message: $message</p>
                ";

                // Email Headers
                $header = "MIME-version: 1.0" . "\r\n";
                $header .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

                // Additional Headers
                $header .= "From: $name <$email> \r\n";

                if (mail($toEmail, $subject, $body, $header)) {
                    // Email Sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    // Failed
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            // Failed
            $msg = "Please fill in all fields";
            $msgClass = 'alert-danger';
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">My Website</a>
        </div>
    </div>
</nav>

<div class="container">
    <?php if ($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" class="form-control" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control"><?php echo $message; ?></textarea>
        </div>
        <br>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
</div>
</body>
</html>