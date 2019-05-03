<!DOCTYPE html>
<html lang="en">

 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ST. MOSES ORIMOLADE</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
        <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="styles/contact.css">
        <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


	<?php include'readmore.php';?>
	<body class="page1" id="top" style="background-color:#3399CC;">
<!--==============================header Starts=================================-->
<?php include'header.php';?>

<!--==============================header Ends=================================-->


				 <div class="container" style="background-color:#FFFFFF"><!-- container-->
            <div class="row"><!-- row-->

                <div class="col-md-6 col-md-offset-3"> <!-- col-->

                    <h2></h2> 
                    <p style= "color: #000000;"> TELL US YOUR VIEW</p>

                     <form name="data" form action="insert.php" method="post" class="registration-form"><!-- form-->

                        <div class="row">

                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name</label>
                                <input type="text" class="form-control" id="Your Name" name="YourName" maxlength="50">
                            </div>

                            <div class="col-sm-6 form-group">
                                <label for="name">Your Email</label>
                                <input type="text" class="form-control" id="Your Email" name="YourEmail" maxlength="50">
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email">Your Phone</label>
                                <input type="text" class="form-control" id="Your Phone" name="YourPhone" maxlength="50">
                            </div>

                                <div class="col-sm-6 form-group">
                                <label for="email">YourAddress</label>
                                <input type="text" class="form-control" id="YourAddress" name="YourAddress" maxlength="50">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name">Your Message</label>
                                <textarea class="form-control" type="textarea" id="Your Message" name="YourMessage" placeholder="Your Message" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Send Message! </button>
                            </div>
                        </div>

                    </form><!--/ form-->

                    <div id="success_message" style="width:100%; height:100%; display:none; "> 
                        <h3>Sent your message successfully!</h3> 
                    </div>

                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. 
                    </div>
<!--==============================Content=================================-->
		
		
		
			<div class="container_12" style="background-color:#FFFFFF;">
				
					<div></div>
                  <div></div>
                </div>
						<br>
						<br>
					
					<div class="clear"></div>						
			</div>
			
			<div class="hor"></div>
			<!-- Footer -->
			
        <?php include'footer.php';?>
										
<!--==============================footer=================================-->

<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
        <script src="js/contact.js"></script>
		
		<script src="js3/jquery-3.2.1.min.js"></script>

<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js3/custom.js"></script>

		
			</body>
</html>