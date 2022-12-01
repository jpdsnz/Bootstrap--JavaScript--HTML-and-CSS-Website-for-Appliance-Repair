<?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    function post_captcha($user_response)
		{
        $fields_string = '';
        $fields = array(
            'secret' => '6LdcOv8UAAAAAPVnCwesjkhicfPG7w7Ugr3uVxfu',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success'])
		{
        // What happens when the CAPTCHA wasn't checked
        //echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
				 $result='<br><br><div class="alert alert-danger">Please go back and make sure you check the security CAPTCHA box.</div></br></br>';
    }

		else
		{
        // If CAPTCHA is successfully completed...

          if (isset($_POST["submit"]))
					{
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $from = 'Tarrant County Appliance Contact Form';
            $to = 'service@tarrantcountyappliance.com';
            $subject = 'Message From Tarrant County Appliance';

            $body ="From: $name\n E-Mail: $email\n Message:\n $message";

            // Check if name has been entered
            if (!$_POST['name'])
						{
              $errName = 'Please enter your name';
            }

            // Check if email has been entered and is valid
            if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
						{
              $errEmail = 'Please enter a valid email address';
            }

            //Check if message has been entered
            if (!$_POST['message']) {
              $errMessage = 'Please enter your message';
            }


		        // If there are no errors, send the email
		        if (!$errName && !$errEmail && !$errMessage)
						{
		          if (mail ($to, $subject, $body, $from))
							{
		            $result='<div class="alert alert-success">Thank You! We will get back to you shortly.</div>';
		          }
							else
							{
		            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
		          }
		        }
          }

        //echo '<br><p>CAPTCHA was completed successfully!</p><br>';
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Google Android Theme and Icon-->
<meta name="theme-color" content="#0F1567">
<link rel="icon" sizes="192x192" href="nice-highres.png">

<title>Contact</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/practice.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="https://use.edgefonts.net/dancing-script:n4:default;rosario:n4:default;aguafina-script:n4:default;lato:n4:default;alfa-slab-one:n4:default;patua-one:n4:default.js" type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid" id="navbarContainer">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index" ><img src="images/Logomed.png" alt="" class="logo" title="Same Day Repair!"/></a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home <span class="sr-only">(current)</span></a> </li>
        <li><a href="about" ><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> About</a> </li>
        <li class="dropdown"> <a href="https://" class="dropdown-toggle dropdownHover" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" ><span class="glyphicon 			glyphicon-wrench" aria-hidden="true"></span> Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li><a href="parts" ><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Parts</a> </li>
            <li role="separator" class="divider"></li>
            <li><a href="kitchen_appliance">Kitchen Appliance</a> </li>
            <li><a href="refrigerators">Refrigerators</a> </li>
            <li><a href="washer_dryer">Washing &amp; Drying Equipment</a> </li>
            <li><a href="cookware">Cookware</a> </li>
            <li><a href="freezers_icemakers">Freezers &amp; Ice Makers</a> </li>
            <li><a href="commercial">Commercial Appliance</a> </li>
          </ul>
        </li>
        <li class="active"><a href="contact" ><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a> </li>
        <li><a href="service_area" ><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Service Area</a> </li>
        <li><a href="reviews" ><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Reviews</a> </li>
        <ul class="socialMedia">
        	<li><a href="https://www.facebook.com/tarrantcountyappliance" title="Facebook" target="_blank"><img alt="Facebook" src="images/icons/Social/facebook.svg"></a></li>
        	<li><a href="https://twitter.com/appliancefixdfw" title="Twitter" target="_blank"><img alt="Twitter" src="images/icons/Social/Twitter.svg"></a></li>
        	<li><a href="https://plus.google.com/112324699146833563782" title="Google+" target="_blank"><img alt="Google+" src="images/icons/Social/Googleplus.svg"></a></li>
        </ul>

      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<!-- HEADER -->
<header> </header>
<section class="ContactMain">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-lg-offset-1 col-lg-10">
        <div class="jumbotron TopMarginContainer">
          <div class="row text-center">
            <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2 class="FormH2"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp Contact Us</h2>
            </div>
            <div class="text-center col-lg-12">
              <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
              <form role="form" id="feedbackForm" method="post" class="text-center" action="contact">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
				  <?php echo "<span class='text-danger'>$errName</span>";?>
                  <span class="help-block" style="display: none;">Please enter your name.</span>
				  </div>
                <div class="form-group">
                  <label for="email">E-Mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars($_POST['email']); ?>">
				  <?php echo "<span class='text-danger'>$errEmail</span>";?>
                  <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
				  <?php echo "<span class='text-danger'>$errMessage</span>";?>
                  <span class="help-block" style="display: none;">Please enter a message.</span></div>
                <span class="help-block" style="display: none;">Please enter a the security code.</span>
                <!-- ReCaptcha -->

                <div class="g-recaptcha" data-sitekey="6LdcOv8UAAAAAKgaqzQht3ZV7BqwC3fhWG08Jdzw"></div>

                <!-- End Recaptcha -->
                <button type="submit" id="submit" value="Send" name="submit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Send</button>
				<?php echo $result; ?>
              </form>
              <!-- END CONTACT FORM -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / HEADER -->

<!--  SECTION-1 -->

<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="text-center" id="schedule" ><a href="tel:817.412.4219"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Click or call to schedule!</a></h1>
        <p class="text-center SchedP">Call us at <a href="tel:817.412.4219"><b class="phoneNumber">817.412.4219.</b></a> We service Arlington, Texas and surrounding cities.</p>
        <p class="text-center"><a class="btn btn-primary btn-lg" href="https://tarrantcountyappliance.setmore.com" role="button">Schedule</a></p>
      </div>
    </div>
  </div>
</div>
<!-- FOOTER -->

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p class="footerText">Copyright 2019 © T.C. Appliance Repair LLC All rights reserved. Visit<a href="https://www.tarrantcountyappliance.com/" class="jpTcA"> Tarrant County Appliance</a> for offers exclusive to T.C. Appliance Repair LLC.<span class="LogoLine"> Website designed by: &nbsp; <a href="" title="Facebook" target="_blank" class="jpDesignz"><img src="images/icons/JPD.svg" alt="Jp Designz" class="jpImg" title="Jp Designz"> Jp Designz</a></span>  </p>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>
