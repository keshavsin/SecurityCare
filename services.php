<?php include 'header.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
  $(document).ready(function() {
  $("#services").addClass("active");
  });
</script>
<style>
.odd{
	background: rgba(0, 0, 0, .05);
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
section {
    padding: 62px 0px 25px 0px;
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

@media (min-width: 1200px)
.el-col-lg-6 {
    width: 25%;
}

.color
{
	border: 1px solid #dadada;
    margin-bottom: 30px;
    background-color: #fff;
    overflow: hidden;
	a
}
.color:hover{
	box-shadow: 0 0 16px rgba(0,0,0,.12);
}
.content{
	padding-left: 30px;
    padding-right: 30px;
    padding-top: 20px;
    border-top: 1px solid #ccc;
}
</style>
 <!-- Header Banner Area section Start Here -->
   <section class="bg-grey padding-top-30 padding-bottom-30 clearfix" style="background-image: url(img/serv1.png);">
      <div class="container">
          <div class="row">
            <div class="section-title">
              <div class="col-md-12">
                <h2 style="color:white;">Services</h2>
				<ol class="breadcrumb breadcrumb-finance">
                    <li><a href="index.php" style="color:white;"> <i class="fa fa-home" aria-hidden="true" style="color:white;"></i> Home</a></li>
                    <li class="active" style="color:white;">Services</li>
                  </ol>
              </div>
            </div>
          </div><!-- End Row -->
      </div><!-- End container -->
    </section>

<section class="services">
	<div class="container">
	<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6" style="padding-left: 10px; padding-right:10px;">
		<div class="color">		
			<img src="img/amc1.png">
			<div class="content">
				<h4>Site Survey and Identifications</h4>
				<p>Its essential to carry out a site survey before specifying the equipment required for a System installation.This will help to identify <u>no</u> of units required.
				</p>				
			</div>
		</div>
		</div>
		
		<div class="col-lg-3 col-md-3 col-sm-6" style="padding-left: 10px; padding-right:10px;">
		<div class="color">		
			<img src="img/main1.png">
			<div class="content">
				<h4>Installation and Maintenance</h4>
				<p>It’s always best to frequently monitor the functionality of systems; if they were to fail during a break-in, you would regret not taking these steps
				</p>				
			</div>
		</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" style="padding-left: 10px; padding-right:10px;">
		<div class="color">		
			<img src="img/teleem.png">
			<div class="content"> 
				<h4>Telephone and Email Services</h4>
				<p>Provides Telephone and E-mail services.We want to be there for you—whether you’re on the road or off so we are available for you anytime.
				</p>				
			</div>
		</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" style="padding-left: 10px; padding-right:10px;">
			<div class="color">		
			<img src="img/site1.png">
			<div class="content">
				<h4>Annual Maintenance Contract</h4>
				<p>The contract is usually for the period of 1 year and can be extended up to three years or five years as per the mutual understanding of both the parties.
				</p>				
			</div>
			</div>		
		</div>
	</div>
	</div>
</section>
<?php include 'footer.php'; ?>