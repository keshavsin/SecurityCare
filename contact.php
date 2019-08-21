<?php include 'header.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
.odd{
	background: rgba(0, 0, 0, .05);
}
.main-conatct-form-area .main-contact-form fieldset input
{
	border-radius:6px !important;
	
}
.main-conatct-form-area .main-contact-form fieldset textarea
{
	border-radius:6px !important;
	
}
.even{
	background: rgba(0, 0, 0, .1);
}
.padding-bottom-30 {
    padding-bottom: 5px;
}
.padding-top-30 {
    padding-top: 5px;
}
.clearfix {
    clear: both;
}

.breadcrumb-finance {
    background-color: transparent;
    margin-bottom: 0;
    padding: 6px 15px 12px 0px;
}
.breadcrumb-finance > .active {
    color: #888;
    font-size: 13px;
}
h2{
 margin:0px;	
 
}
.bottom20{
	bottom:20px;
}
.contact-info{
	background: #ccc;
    border-left: 4px solid #1cb9c8;
    padding: 8px 25px !important;
    color: #000;
}
.main-conatct-form-area .page-sidebar-area .single-sidebar ul li {
   display: inline-flex;
}
.main-conatct-form-area .page-sidebar-area .single-sidebar ul li i {
    margin-top: 3%;
}
.header-banner-area {
    background: url(img/contact-banner.jpg) no-repeat;
}
</style>

<script>
  $(document).ready(function() {
  $("#contact").addClass("active");
  });
  
</script>

	<?php
if($_POST)
{
//require('constant.php');
    
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $phone      = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_message   = filter_var($_POST["messages"], FILTER_SANITIZE_STRING);
    
    if(empty($user_name)) {
		$empty[] = "<b>Name</b>";		
	}
	if(empty($user_email)) {
		$empty[] = "<b>Email</b>";
	}
	
	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
        die($output);
	}
	
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> is an invalid Email, please correct it.'));
		die($output);
	}
	
	
	
	$toEmail = "prnka.08@gmail.com";
	$message .="Full name:".$user_name."\n\n";	
	$message .="Phone  No:".$phone."\n\n";	
	$message .="Email:".$user_email."\n\n";		
	$message .="Message:".$user_message."\n\n";
	$mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
// 	if (mail($toEmail, "Contact Mail", $message, $mailHeaders)) {
// 	    $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the comments. We will get back to you shortly.'));
// 	    die($output);
// 	} else {
// 	    $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact'.SENDER_EMAIL));
// 	    die($output);
// 	}
}
?>
   <!-- Header Banner Area section Start Here -->
   
   
  <section class="bg-grey clearfix" style="background-image: url(img/cu0.png);">
      <div class="container">
          <div class="row">
            <div class="section-title">
              <div class="col-md-12">
                <h2 style="color:white;">Contact Us</h2>
				<ol class="breadcrumb breadcrumb-finance">
                    <li><a href="index.php" style="color:white;"> <i class="fa fa-home" aria-hidden="true" style="color:white;"></i> Home</a></li>
                    <li class="active" style="color:white;">Contact us</li>
                  </ol>
              </div>
            </div>
          </div><!-- End Row -->
      </div><!-- End container -->
    </section>
    <!-- Contact Form Page start Here -->
    <div class="main-conatct-form-area" style="padding: 60px 0 40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:0px;">
                    <div class="main-contact-form contact-form" style="    margin-top: -3%;">
                       <form class="request-form" id="submit-form" method="POST" action="">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group" style="margin-bottom: 0px;">
                                                <input id="name" name="name" placeholder="Your Name*" class="form-control" type="text" data-error="Name field is required" required="" style="margin-top: 0px;">
                                               <br>
                                               <div class="help-block with-errors" style="margin-bottom: 0px;"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6" style="padding-bottom:20px;">
                                            <div class="form-group">
                                                <input id="phone" name="phone" placeholder="Phone Number*" class="form-control" type="text" data-error="Phone field is required" required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input id="email" name="email" placeholder="Your Email*" class="form-control" type="text" data-error="Email field is required" required="">
                                                
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea class="textarea form-control" rows="4" id="messages" name="messages" placeholder="Message*" data-error="Message field is required" required=""></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
										<!--<div class="col-sm-12">-->
										<!--<strong><div id="success-message"></div></strong>-->
										<!--</div>-->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <button type="submit" name="submit" id="submit" class="btn-send submit-botton">Submit <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-response"></div>
                            </form>
                    </div>
                </div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="homepage-contact-faq-tab">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                         OFFICE ADDRESS
                      </a>
                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <nav>
									<ul>
									<li><b>Unique Services</b></li>
                                    <li><i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp; Tuljabhavani Circle</br>Dajibanpeth </br>HUBBALLI-580020</li>
                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;  +91 94 4960 7125,  0836 2260044,  </li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;uniqueservices96@gmail.com</li>
                                </ul>
                            </nav>
										
                                    </div>
                                </div>
                            </div>
							
                           
                        </div>
                    </div>
                </div>
				
                
            </div>
        </div>
    </div>
	<section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.5720445256884!2d75.13878531432837!3d15.345475162502952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8d7685b9c324d%3A0xa17b2f300f090a97!2sUnique+Services!5e0!3m2!1sen!2sin!4v1551779187031" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>								
							
	</section>
	
    <!-- Contact Form Page end Here -->

<?php include 'footer.php'; ?>