<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");

	$pageTitle = "Resolve Jewelry";
	$section = "stockists";

	if ($_SERVER[REQUEST_METHOD] == "POST")
	{
        $contact_name = trim($_POST["contact_name"]);
		$company_name = trim($_POST["company_name"]);
		$email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $street = trim($_POST["street"]);
        $city = trim($_POST["city"]);
        $state = trim($_POST["state"]);
        $zip = trim($_POST["zip"]);
        $website = trim($_POST["website"]);

        // echo $contact_name . $company_name . $email . $phone . $street . $city . $state . $zip . $website;
        // exit;

    	// the fields name, email, and message are required
        if ($contact_name == "" OR $company_name == "" OR $email == "" OR $phone == "" OR $street == "" OR $city == "" OR $state == "" OR $zip == "" OR $website == "") {
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
            $email_body = $email_body . "Contact Name: " . $contact_name . "\r";
            $email_body = $email_body . "Company Name: " . $company_name . "\r";
            $email_body = $email_body . "Email: " . $email . "\r";
            $email_body = $email_body . "Phone: " . $phone . "\r";
            $email_body = $email_body . "Street: " . $street . "\r";
            $email_body = $email_body . "City: " . $city . "\r";
            $email_body = $email_body . "State: " . $state . "\r";
            $email_body = $email_body . "ZIP Code: " . $zip . "\r";
            $email_body = $email_body . "Website: " . $website;

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
            $mail->Subject = "Stockist Email from " . $company_name;
            $mail->Body = $email_body;
            $mail->AddAddress(GMAIL_EMAIL);

            // if the email is sent successfully, redirect to a thank you page;
            // otherwise, set a new error message
            if($mail->Send()) {
                header("Location:" . BASE_URL . "stockists/?status=thanks");
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
        <!-- ESRA TYPE HERE -->   
        <h3>Milk & Ice Vintage</h3>
        <p>Baltimore, MD 21211</p>
        <!--For information please email <a class="no-underline" href="mailto:info@resolvejewelry.com">info@resolvejewelry.com.</a>-->
        <h3>Boii LLC.</h3>
        <p>Miami, FL 33165</p>
        <!--<a class="no-underline" target="_blank" href="http://www.shopboii.com">www.shopboii.com</a>-->
    </div>



    <div id="contact-form">
    <p>Think Resolve would be a great fit for your shop?  Please fill out the form and I'll contact you with more information. </p>
    <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
        <p>We'll talk soon!</p>
    <?php } else { ?>

        <?php
            if (!isset($error_message)) {
            } else {
                echo '<p class="message error-message">' . $error_message . '</p>';
            }
        ?>

        <form class="contact-form" method="post" action="<?php echo BASE_URL; ?>stockists/">
            <label for="contact name">Contact Name</label>
            <input type="text" name="contact name" id="contact name" value="<?php if (isset($contact_name)) { echo htmlspecialchars($contact_name); } ?>">
            <!-- <div class="border-bottom"></div> -->
            <label for="company name">Company Name</label>
            <input type="text" name="company name" id="company name" value="<?php if(isset($company_name)) { echo htmlspecialchars($company_name); } ?>">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>">
            <label for="Phone">Phone</label>
            <input type="text" name="phone" id="phone" value="<?php if(isset($phone)) { echo htmlspecialchars($phone); } ?>">
            <label for="street">Street Address</label>
            <input type="text" name="street" id="address-field" value="<?php if(isset($street)) { echo htmlspecialchars($street); } ?>">
            <label for="city">City</label>
            <input type="text" name="city" id="city" value="<?php if(isset($city)) { echo htmlspecialchars($city); } ?>">
            <label for="state">State</label>
            <input type="text" name="state" id="state" value="<?php if(isset($state)) { echo htmlspecialchars($state); } ?>">
            <label for="zip">ZIP</label>
            <input type="text" name="zip" id="zip" value="<?php if(isset($zip)) { echo htmlspecialchars($zip); } ?>">
            <label for="website">Website</label>
            <input class="last" type="text" value="http://" name="website" id="website" value="<?php if(isset($website)) { echo htmlspecialchars($website); } ?>">
            
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