<?php
define("TITLE", "Contect | The name of the resturant");
include('includes/header.php');
?>

<div id="contact">
    <hr>
    <h1>Get in touch with us</h1>

    <?php

    //check for header injection
    function has_header_injection($str)
    {
        return preg_match("/[\r\n]/", $str);
    }




    if (isset($_POST['contact-submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg  = $_POST['message'];

        if (has_header_injection($name) || has_header_injection($email)) {
            die(); //if true kill the script
        }

        if (!$name || !$email || !$msg) {
            echo '<h4 class="error">All fields required</h4>
            <a href="contant.php" class="button block">Go back and try again</a>';
            exit;
        }

        //add the recipient email to variable
        $to = "gyma762@gmail.com";

        //creat a subject
        $subject = "$name sent your message to your contant form";

        //construct the message 
        $message = "Name: $name\r\n";
        $message .= "Email: $email\r\n";
        $message .= "Message: \r\n$msg";

        //if the subscribe cheackbox was checked

        if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {
            $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
        }

        $message = wordwrap($message, 72);

        //set the mail into a variable
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $name <$email>\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";


        //send the mail 
        mail($to, $subject, $message, $headers);
    ?>

        <!-- show succes message after you sent -->
        <h5>Thanks for contact the name of the resturant</h5>
        <p>please allow 24 hours for aresponse </p>
        <p><a href="home.php" class="button block">&laquo; Go to Home Page </a></p>

    <?php } else { ?>

        <form method="post" action="" id="contact-form">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name">

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email">

            <label for="message">and your message</label>
            <textarea name="message" id="message"></textarea>

            <input type="checkbox" id="subscribe" name="subscribe" value="subscribe">
            <label for="subscribe">subscribe to news letter</label>

            <input type="submit" name="contact-submit" class="button next" value="Sand Message">

        </form>
    <?php } ?>
    <hr>

</div>



<?php
include('includes/footer.php');
?>