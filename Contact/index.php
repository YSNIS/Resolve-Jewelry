<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");

	$pageTitle = "Resolve Jewelry";
	$section = "contact";

	if ($_SERVER[REQUEST_METHOD] == "POST")
	{
        $name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$message = trim($_POST["message"]);
        $subject = trim($_POST["subject"]);

    	// the fields name, email, and message are required
        if ($name == "" OR $email == "" OR $message == "" OR $subject == "") {
            $error_message = "Please fill out all fields.";
        }

        // this code checks for malicious code attempting
        // to inject values into the email header
        if (!isset($error_message)) {
            foreach( $_POST as $value ){
                if( stripos($value,'Content-Type:') !== FALSE ){
                    $error_message = "There was a problem with the information you entered.";
                }
            }
        }

        // the field named address is used as a spam honeypot
        // it is hidden from users, and it must be left blank
        if (!isset($error_message) && $_POST["address"] != "") {
            $error_message = "Your form submission has an error.";
        }

        require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
        $mail = new PHPMailer();

        if (!isset($error_message) && !$mail->ValidateAddress($email)){
            $error_message = "You must specify a valid email address.";
        }

        // if, after all the checks above, there is no message, then we
        // have a valid form submission; let's send the email
        if (!isset($error_message)) {
            $email_body = "";
            $email_body = $email_body . "Name: " . $name . "\r";
            $email_body = $email_body . "Email: " . $email . "\r";
            $email_body = $email_body . "Message: " . $message;

            $mail = new PHPMailer();  // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true;  // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465; 
            $mail->Username = GMAIL_EMAIL;  
            $mail->Password = GMAIL_PASSWORD;           
            $mail->SetFrom($email, $name);
            $mail->Subject = "Customer Email: " . $subject;
            $mail->Body = $email_body;
            $mail->AddAddress(GMAIL_EMAIL);

            // if the email is sent successfully, redirect to a thank you page;
            // otherwise, set a new error message
            if($mail->Send()) {
                header("Location:" . BASE_URL . "contact/?status=thanks");
                exit;
            } else {
              $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
            }

        }
    }
    include(ROOT_PATH . 'inc/header.php');

?>
    <div id="contact">
    <div id="contact-info">
    <p>
        For information please email <a class="no-underline" href="mailto:info@resolvejewelry.com">info@resolvejewelry.com.</a>
        <br>
        <br>
        I'd love to hear from you.  Drop me a message any time at <a class="no-underline" href="mailto:esra@resolvejewelry.com">esra@resolvejewelry.com.</a>
    </p>
    </div>
    <div id="contact-form">
    <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
        <p>Thanks for the message! I&rsquo;ll be in touch shortly!</p>
    <?php } else { ?>

        <?php
            if (!isset($error_message)) {
            } else {
                echo '<p class="message error-message">' . $error_message . '</p>';
            }
        ?>

        <form class="contact-form" method="post" action="<?php echo BASE_URL; ?>contact/">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
            <div class="border-bottom"></div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" value="<?php if(isset($subject)) { echo htmlspecialchars($subject); } ?>">
            <label for="message">Message</label>
            <textarea name="message" id="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
        <?php // the field named address is used as a spam honeypot ?>
        <?php // it is hidden from users, and it must be left blank ?>
            <label for="address">Address</label>
            <input type="text" name="address" id="address">           
            <input type="submit" value="Send">
        </form>

    <?php } ?>

    </div>
    </div>

<?php include (ROOT_PATH . "inc/footer.php"); ?>


<!-- GOOGLE ANALYTICS -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55499911-1', 'auto');
  ga('send', 'pageview');

</script>