<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Tarrant County Appliance Contact Form';
		$to = 'service@tarrantcountyappliance.com';
		$subject = 'Message From Tarrant County Appliance';

		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}


// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will get back to you shortly.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Search Engine Opt-->
<meta name="description" content="Appliance Repair Arlington 817-412-4219 Refrigerator Repair Washer Repair Dryer Repair Washer Repair Dryer Repair Oven Repair Ice Maker ">


<!--Facebook SEO-->
 <meta property="og:type" content="website">

 <meta property="og:title" content="Appliance Repair Arlington Tx Same Day Service">

 <meta property="og:site_name" content="Appliance Repair Experts">

 <meta property="og:url" content="http://tarrantcountyappliance.com/index">

 <meta property="og:description" content="Appliance Repair Arlington 817-412-4219 Refrigerator Repair Washer Repair Dryer Repair Washer Repair Dryer Repair Oven Repair Ice Maker ">

 <meta property="og:image" content="tarrantcountyappliance.com/images/CouponV2.png">
 <!--End Facebook Optimization-->


 <!--End Search Engine Opt-->

<!--Google Android Theme and Icon-->
<meta name="theme-color" content="#0F1567">
<link rel="icon" sizes="192x192" href="nice-highres.png">

<!--Title-->

<title>Appliance Repair Arlington Tx Same Day Service</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/practice.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/aguafina-script:n4:default;brush-script-std:n4:default;engagement:n4:default;advent-pro:n4,n1:default;alex-brush:n4:default;goblin-one:n4:default;italianno:n4:default;dynalight:n4:default;dancing-script:n4:default;rosario:n4:default;lato:n4:default;alfa-slab-one:n4:default;patua-one:n4:default.js" type="text/javascript"></script>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid" id="navbarContainer">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="http://www.appliance-repair-experts.com/" ><img src="images/Logomed.png" alt="" class="logo" title="Same Day Appliance Repair!"/></a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://www.appliance-repair-experts.com/" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home <span class="sr-only">(current)</span></a> </li>
        <li><a href="about" ><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> About</a> </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" ><span class="glyphicon 			glyphicon-wrench" aria-hidden="true"></span> Services <span class="caret"></span></a>
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
        <li><a href="contact" ><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a> </li>
        <li><a href="service_area" ><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Service Area</a> </li>
        <li><a href="reviews" ><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Reviews</a> </li>
        <ul class="socialMedia">
        	<li><a href="https://www.facebook.com/tarrantcountyappliance" title="Facebook" target="_blank"><img alt="Facebook" src="images/icons/Social/facebook.svg"></a></li>
        	<li><a href="https://twitter.com/appliancefixdfw" title="Twitter" target="_blank"><img alt="Twitter" src="images/icons/Social/Twitter.svg"></a></li>
        	<li><a href="https://plus.google.com/112324699146833563782" title="Google+" target="_blank"><img alt="Google+" src="images/icons/Social/Googleplus.svg"></a></li>&nbsp;

        </ul>

      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<!-- HEADER -->
<header>

  <div class="container-fluid CouponContainer"><img src="images/CouponV2.png" alt="Same Day Repair!" width="800" height="520" class="Coupon img-responsive" title="10 Percent Off!">

		<h2 class="MainHeading">
			<p class = "SecondHeading">Proud member of &nbsp;<a href="http://www.checkmybadge.com/" title="Click here to go to CheckMyBadge.com!" target="_blank"><img class="Coupon img-responsive" src="/images/shield.jpg" alt="" title="Click here to go to CheckMyBadge.com!" style="width:auto ;height:auto;"></a></p>
			<span class="glyphicon glyphicon-ok PurpleStar" aria-hidden="true"></span>&nbsp; Schedule&nbsp; Online&nbsp;</h2>
    <p class="SecondHeading"><a href="https://tarrantcountyappliance.setmore.com" title="Same Day Repair!" class="ScheduleOnline"> <span class="glyphicon glyphicon-time" aria-hidden="true"></span> &nbsp;Schedule</a> online for 10% off final labor costs or give us a call at <a href="tel:817.412.4219" title="Same Day Repair!" class="LinkText"><span class="NumberSpace"> 817.412.4219</span></a> if you have any questions.</p>
  </div>
  <div class="jumbotron">
<div class="container">
  <div class="row">
        <div class="col-xs-12">
          <h1 class="text-center" id="schedule" ><a href="tel:817.412.4219"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Click or call to schedule!</a></h1>
<p class="text-center SchedP">Call us at&nbsp;&nbsp;<a href="tel:817.412.4219"><b class="phoneNumber">817.412.4219.</b></a> We service Arlington, Texas and surrounding cities.</p>
<p class="text-center"><a class="btn btn-primary btn-lg" href="https://tarrantcountyappliance.setmore.com" role="button">Schedule a 2 hour window</a> </p>
<p class="text-center SchedP">Please provide model number and issue when scheduling.</p>
        </div>
      </div>
  </div>
  </div>
</header>
<!-- / HEADER -->

<!--  SECTION-1 -->
<section>
  <div class="container-fluid WhoContainer">
    <div class="row">
      <div class="col-lg-12 page-header text-center">
        <h2 class="MainHeading"><span class="glyphicon glyphicon-question-sign PurpleStar" aria-hidden="true"></span>&nbsp; What&nbsp; We&nbsp; Service&nbsp;:</h2><hr>
        <div class="container ">
          <div class="row">
            <div class="col-lg-4 col-sm-12 text-center col-md-12"> <a href="kitchen_appliance"><img src="images/icons/kitchenware.svg"  alt="140x140" style="width: 140px; height: 140px;" title="Kitchen Appliance Repair" data-holder-rendered="true"></a>
              <h3 class="SecondHeading"><a href="kitchen_appliance" title="Kitchen Appliance" class="LinkText">Kitchen Appliance</a></h3>
              <p>We service dishwashers, garbage disposals and other kitchen related appliances and equipment</p>
            </div>
            <div class="col-lg-4 col-sm-12 text-center col-md-12"><a href="refrigerators"><img src="images/icons/fridge.svg" alt="140x140" style="width: 140px; height: 140px;" title="Refrigerator Appliance Repair" data-holder-rendered="true"></a>
              <h3 class="SecondHeading"><a href="refrigerators" title="Refrigerators" class="LinkText">Refrigerators</a></h3>
              <p>We service various types refrigeration and cooling appliances</p>
            </div>
            <div class="col-lg-4 col-sm-12 text-center col-md-12"><a href="washer_dryer"><img src="images/icons/washer.svg"  alt="140x140" style="width: 140px; height: 140px;" title="Washer and Dryer Repair" data-holder-rendered="true"></a>
              <h3 class="SecondHeading"><a href="washer_dryer" title="Washers and Dryers" class="LinkText">Washing &amp; Drying</a></h3>
              <p>We service washers, dryers, and other laundry and washing equipment</p>
            </div>
            <div class="col-lg-4 col-sm-12 text-center col-md-12"><a href="cookware"><img src="images/icons/microwave.svg"  alt="140x140" style="width: 140px; height: 140px;" title="Cooking Appliance Repair" data-holder-rendered="true"></a>
              <h3 class="SecondHeading"><a href="cookware" title="Oven Repair" class="LinkText">Cookware</a></h3>
              <p>We service stoves, ovens, ranges and microave Ovens</p>
            </div>
            <div class="col-lg-4 col-sm-12 text-center col-md-12"><a href="freezers_icemakers"><img src="images/icons/freezer.svg"  alt="140x140" style="width: 140px; height: 140px;" title="Freezer and Icemaker Repair" data-holder-rendered="true"></a>
              <h3 class="SecondHeading"><a href="freezers_icemakers" title="Freezers and Ice Machines" class="LinkText">Freezers &amp; Ice Makers</a></h3>
              <p>We service freezers and ice making machines.</p>
            </div>
            <div class="col-lg-4 col-sm-12 text-center col-md-12"><a href="commercial"><img src="images/icons/commercial.svg" alt="140x140" style="width: 140px; height: 140px;" title="Commercial Appliance Repair" data-holder-rendered="true"></a>
              <h3 class="SecondHeading"><a href="commercial" title="Commercial Appliance Repair" class="LinkText">Commercial Appliance</a></h3>
              <p>We also service commercial appliances. </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 page-header text-center">
              <h2 class="testimonials MainHeading"> <a href="reviews" title="5 Star Reviews!" class="Test"><span class="glyphicon glyphicon-pencil YellowStar" aria-hidden="true"></span>&nbsp;Testimonials</a></h2>
            </div>
          </div>
          <div class="row" id="Testimonials">
        <div class="col-6 col-lg-6">
        <blockquote>
          <p>Excellent service, quick and efficient even with a call back. He helped us figure out the issue. Will definitely call him first if we need appliance repair services again.</p>
        <small>Jackie M. <cite title="Source Title">Facebook &nbsp; <span><img src="images/icons/five_star_reviews.svg" alt="Five Star Reviews!"></span></cite></small>
     </blockquote>
     </div>
      <div class="col-6 col-lg-6">
        <blockquote>
          <p>Were on time and fixed my oven fast. The service technician was pleasant and explained the process for checking the product and quoted a fair price. I would recommend to friends and neighbors.</p>
        <small>C. Shorter <cite title="Source Title">Google+ &nbsp;<span><img src="images/icons/five_star_reviews.svg" alt="Five Star Reviews!"/></span></cite></small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
        <blockquote>
          <p>...These guys rock! They are a small company, very honest and will go above and beyond to fix your appliance without cleaning out your bank account. They fix washers, dryers, ac, fridge all at a price you can afford. So if you're tired of being raked over the coals by the big companies to get an appliance fixed, these are the guys to call.</p>
          <small>Shelly Gold Marvin <cite title="Source Title">Facebook &nbsp; <span><img src="images/icons/five_star_reviews.svg" alt="Five Star Reviews!"/></span></cite></small></blockquote>
      </div>
      <div class="col-6 col-lg-6">
        <blockquote>
          <p>Excellent customer service. Could have charged me top dollar to make repairs on appliances that would break soon thereafter, but he instead chose to be honest and tell me to buy another appliance. Thank you. </p>
          <small>Christy Smith <cite title="Source Title">Thumbtack &nbsp; <span><img src="images/icons/five_star_reviews.svg" alt="Five Star Reviews!"/></span></cite></small></blockquote>   </div>
</div>
        </div>
      </div>
    </div>
  </div>
<div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-lg-9 col-md-12">
          <p class="lead" id="leadText">Do you need appliance repair in Arlington?
            Do you need refrigerator appliance repair in Mansfield?
            Do you need washer appliance repair in Grand Prairie?
            Are you, or a loved one, in need of repairs in the metroplex?</p>
        </div>
        <div class=" text-center col-sm-6 col-lg-3 col-sm-offset-3 col-lg-offset-0 col-xs-8 col-xs-offset-2 col-md-6">
        	<a class="btn  btn-block btn-lg btn-success" href="mailto:service@tarrantcountyappliance.com" title="">Request a Quote!</a>
        </div>
      </div>
    </div>
  </div>

  <!-- /Service Details -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12 page-header text-center">
        <h2 class="MainHeading"><span class="glyphicon glyphicon-cog PurpleStar" aria-hidden="true"></span>&nbsp; Service &nbsp; Details&nbsp;:</h2>
      </div>
    </div>
    <div class="row" id="featureDescript">
      <article class="col-lg-4 col-xs-12 col-md-6">
        <h3 class="SecondHeading AlignLeft"><img src="images/icons/kitchenware.svg"  alt="140x140" style="width: 24px; height: 24px;" title="Same Day Appliance Repair in" data-holder-rendered="true"> &nbsp;Kitchen Appliance</h3>
        <p> <em class="icon-desktop "></em>We service all makes and models of various kitchen appliances including dishwashers and garbage disposals. Call us today and see if we can help get your kitchen appliances in working order!</p>
        <p><a href="kitchen_appliance" title="Kitchen Appliance Repair" class="btn btn-default">View details »</a></p>
      </article>
      <article class="col-lg-4 col-xs-12 col-md-6">
        <h3 class="SecondHeading AlignLeft"><img  alt="140x140" style="width: 24px; height: 24px;" src="images/icons/fridge.svg" data-holder-rendered="true"> &nbsp;Refrigerators</h3>
        <p> <em class="icon-desktop "></em> We service all types of refrigeration units and will do a full diagnostic to figure out what are the causes of the problems you may be experiencing with your unit. Give us a call today and let us help you with your problem!</p>
        <p><a href="refrigerators" title="Refrigerator Repair" class="btn btn-default">View details »</a></p>
      </article>
      <div class="clearfix visible-xs-block"></div>
      <article class="col-lg-4 col-xs-12 col-md-6">
        <h3 class="SecondHeading AlignLeft"><img  alt="140x140" style="width: 24px; height: 24px;" src="images/icons/washer.svg" data-holder-rendered="true"> &nbsp;Washing &amp; Drying </h3>
        <p> <em class="icon-desktop "></em> Having issues with your washer or dryer? We can help with that. We service all makes and models of washers and dryers. Give us a call today so we can get started on fixing your appliance!</p>
        <p><a href="washer_dryer" title="Washer and Dryer Repair" class="btn btn-default">View details »</a></p>
      </article>
      <article class="col-lg-4 col-xs-12 col-md-6">
        <h3 class="SecondHeading AlignLeft"><img  alt="140x140" style="width: 24px; height: 24px;" src="images/icons/microwave.svg" data-holder-rendered="true"> &nbsp;Cookware</h3>
        <p> <em class="icon-desktop "></em> We service a variety of makes and models of stoves, ranges, microwaves, and other cookware. Let us help you find a solution to your problems you may be having with your appliance. </p>
        <p><a href="cookware" title="Cooking Appliance Repair" class="btn btn-default">View details »</a></p>
      </article>
      <div class="clearfix visible-xs-block"></div>
      <article class="col-lg-4 col-xs-12 col-md-6">
        <h3 class="SecondHeading AlignLeft"><img  alt="140x140" style="width: 24px; height: 24px;" src="images/icons/freezer.svg" data-holder-rendered="true"> &nbsp;Freezers &amp; Ice Makers</h3>
        <p> <em class="icon-desktop "></em> We also service a wide range of makes and models of freezers and ice makers. Call us today so we can help diagnose any problems you are experienceing with your appliance.</p>
        <p><a href="freezers_icemakers" title="Freezer and Ice Maker Repair" class="btn btn-default">View details »</a></p>
      </article>
      <article class="col-lg-4 col-xs-12 col-md-6">
        <h3 class="SecondHeading AlignLeft"><img  alt="140x140" style="width: 24px; height: 24px;" src="images/icons/commercial.svg" data-holder-rendered="true"> &nbsp;Commercial Appliance</h3>
        <p> <em class="icon-desktop "></em> In addition to the above, we also work on a large scope of commercial appliances. This includes commercial ranges, stovetops, ovens, refrigeration, and other commercial appliance essential to your business!</p>
        <p><a href="commercial" title="Commercial Appliance Repair" class="btn btn-default">View details »</a></p>
      </article>
    </div>
  </div>
  <br><br>
  <!-- / Service Details-->
</section>
<!-- FOOTER -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-lg-offset-1 col-lg-10">
      <div  class="jumbotron">
        <div class="row text-center">
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2 class="FormH2"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp Contact Us</h2>
          </div>
          <div class="text-center col-lg-12">

            <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
            <form role="form" id="feedbackForm" method="post" class="text-center" action="/index#feedbackForm">
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
              <button type="submit" id="submit" value="Send" name="submit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Send</button>
      <?php echo $result;?>
            </form>
            <!-- END CONTACT FORM -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p class="footerText">Copyright 2019 © T.C. Appliance Repair LLC All rights reserved. Visit<a href="http://www.tarrantcountyappliance.com/" class="jpTcA"> Tarrant County Appliance</a> for offers exclusive to T.C. Appliance Repair LLC. <span class="LogoLine"> Website designed by: &nbsp; <a href="mailto:jpdesignz@gmail.com" title="Facebook" target="_blank" class="jpDesignz"><img src="images/icons/JPD.svg" alt="Jp Designz" class="jpImg" title="Jp Designz"> Jp Designz</a></span>  </p>
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
