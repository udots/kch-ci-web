<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KRISCHAN - Welcome</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
	<link href="<?php echo base_url();?>assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />    
  	<!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body onload="getCounter()">
   
 	<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
		<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>" onclick="getContent(1,1)"><img class="logo-custom" src="assets/img/kch-logo180-50.png" alt=""  /></a>                
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url();?>" onclick="getContent(1,1)">HOME</a></li>
                    <li><a href="#contentStart" onclick="getContent(1,1)">TENTANG KAMI</a></li>
                    <li><a href="http://udots.blogspot.com">BLOGGER</a></li>
                    <li><a href="#contact-sec">CONTACT</a></li>
                    <?php 
                    	if ($this->session->pos == "Staf Administrator"){
                    		echo '<li class="Dropdown"><a href=""#contentStart" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN TOOLS<span class="caret"></span></a>';
                    		echo '<ul class="dropdown-menu">';
							echo '<li><a href="javascript:void(0)" onclick="getAdmTools(1)">Pesan</a></li>';
							echo '<li><a href="javascript:void(0)" onclick="getAdmTools(2)">Buat Artikel</a></li>';
							echo '<li><a href="javascript:void(0)" onclick="getAdmTools(3)">Edit Artikel</a></li>';
							echo '<li><a href="javascript:void(0)" onclick="getAdmTools(4)">Visitors</a></li>';
							echo '</ul>';
							echo '</li>';
                    	}
                    ?>
                    <li><a href="javascript:void(0)" onclick="showLogin()"><div id='userField'><?php echo $this->session->user;?></div></a></li>
                </ul>
            </div>
           
        </div>
    </div>
    <!--NAVBAR SECTION END-->
    <div class="home-sec" id="home" >
    	<div class="overlay">
 			<div class="container">
           		<div class="row text-center " >
           
               		<div class="col-lg-12  col-md-12 col-sm-12">
               
                		<div class="flexslider set-flexi" id="main-section" >
                    		<ul class="slides move-me">

                        	<!-- Slider 01 -->
	                        	<li>
		                            <h3>Smart Services for Smartphone</h3>
		                           	<h1>UPGRADE OPERATING SYSTEM</h1>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,1);" >
		                                TENTANG KAMI 
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,12);" >
		                                UPGRADE 
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,13);" >
		                                JAILBREAK/ROOTING
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,14);" >
		                                TRANSFER DATA
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,15);" >
		                                SERVICE HARDWARE
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getArticles();" >
		                                BLOG
		                            </a>
		                        </li>
		                        <!-- End Slider 01 -->
		                        
		                        <!-- Slider 02 -->
	                        	<li>
		                            <h3>Smart Services for Smartphone</h3>
		                           	<h1>JAILBREAK APPLE AND ROOTING ANDROID</h1>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,1);" >
		                                TENTANG KAMI 
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,12);" >
		                                UPGRADE 
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,13);" >
		                                JAILBREAK/ROOTING
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,14);" >
		                                TRANSFER DATA
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,15);" >
		                                SERVICE HARDWARE
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getArticles();" >
		                                BLOG
		                            </a>
		                        </li>
		                        <!-- End Slider 02 -->
		                        
		                        <!-- Slider 03 -->
	                        	<li>
		                            <h3>Smart Services for Smartphone</h3>
		                           	<h1>TRANSFER DATA SMARTPHONE</h1>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,1);" >
		                                TENTANG KAMI 
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,12);" >
		                                UPGRADE 
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,13);" >
		                                JAILBREAK/ROOTING
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,14);" >
		                                TRANSFER DATA
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,15);" >
		                                SERVICE HARDWARE
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getArticles();" >
		                                BLOG
		                            </a>
		                        </li>
		                        <!-- End Slider 03 -->

		                        <!-- Slider 04 -->
	                        	<li>
		                            <h3>Smart Services for Smartphone</h3>
		                           	<h1>SERVICE HARDWARE SMARTPHONE</h1>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,1);" >
		                                TENTANG KAMI 
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,12);" >
		                                UPGRADE 
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,13);" >
		                                JAILBREAK/ROOTING
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,14);" >
		                                TRANSFER DATA
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getContent(1,15);" >
		                                SERVICE HARDWARE
		                            </a>
		                            <a  href="#contentStart" class="btn btn-success btn-lg" onclick="getArticles();" >
		                                BLOG
		                            </a>
		                        </li>
		                        <!-- End Slider 04 -->
		                    </ul>
    						<div id="contentStart"></div> <!-- Content slide up point -->
	                	</div>

            		</div>
                
            	</div>
        	</div>
    	</div>
           
    </div>
       <!--HOME SECTION END-->  
    
    <div  class="tag-line" >
       	<div class="container">
           	<div class="row  text-center" >
           
               	<div class="col-lg-12  col-md-12 col-sm-12">
        			<h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> SELAMAT DATANG DI KRISCHAN <i class="fa fa-circle-o-notch"></i> </h2>
                </div>
            </div>
        </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
	<div id="tentang-sec" class="container set-pad" >
    	<div class="row text-center">
        	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            	<p data-scroll-reveal="enter from the bottom after 0.3s" >
                    	
                </p>
			</div>
             <!--/.HEADER LINE END-->


		</div>
	</div>

	<div id="contentSpace" class="container"></div>

	<hr>
    
    <div id="contact-sec"   >
	   	<div class="overlay">
 			<div class="container set-pad">
      			<div class="row text-center">
                	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    	<h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >CONTACT US  </h1>
                     	<p data-scroll-reveal="enter from the bottom after 0.3s">
                      		Jika anda mempunyai pertanyaan, kritik maupun saran silahkan isi form dibawah.
                        </p>
					</div>

				</div>
            	<!--/.HEADER LINE END-->
           		<div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
              		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                   		<form action="<?php echo base_url().'index.php/welcome/savepesan'?>" method="post">
                       		<div class="form-group">
                           		<input type="text" class="form-control "  required="required" placeholder="Nama" name="txNama" />
                       		</div>
                       		<div class="form-group">
                           		<input type="text" class="form-control " required="required"  placeholder="Email" name="txEmail" />
                       		</div>
                       		<div class="form-group">
                           		<input type="text" class="form-control " required="required"  placeholder="No Handphone" name="txHp" />
                       		</div>
                       		<div class="form-group">
                           		<textarea name="txIsi" required="required" class="form-control" style="min-height: 150px;" placeholder="Pesan" ></textarea>
                       		</div>
                       		<div class="form-group">
                           		<button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
                       		</div>

                   		</form>
               		</div>
          		</div>
            </div>
       	</div> 
   	</div>
  	<div class="container">
        <div class="row set-row-pad"  >
  			<div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                <h2 ><strong>Our Location </strong></h2>
      			<hr />
                <div>

                    <h4>BANDUNG ELECTRONIC CENTER (BEC)</h4>
                    <h4>Jl. Purnawarman No. 13-15</h4>
                    <h4>Lantai UG Blok C18</h4>
                    <h4><strong>Call:</strong>  + 62-22-422-2954 </h4>
                    <h4><strong>Email: </strong>udots@yahoo.com</h4>
                    <br>
                    <div id="visitor"></div>
                </div>


            </div>
         
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                <div id="map_canvas">
                	
                </div>

            </div>

        </div>
    </div>
		<!-- CONTACT SECTION END-->
	<div id="footer">
	    &copy 2016 udots.netau.net | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
	</div>
	<!-- FOOTER SECTION END-->
	<div id="loginForm"></div>
	<div>
		<form action="<?php echo base_url().'index.php/welcome/gologin'?>" method="post">
			<div id="loginFormAll">
				<div id="loginFormHeader">
					<h2>Please Login</h2>	
				</div>
				<div id="loginFormInput">
					<input type="text" name="username" placeholder="Username" class="form-control">
					<input type="password" name="password" placeholder="Password" class="form-control">
					<input type="submit" value="Login / Logout" class="btn btn-primary" style="width:100%">
				</div>	
			</div>
		</form>
	</div>

	<!--  Jquery Core Script -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!--  Core Bootstrap Script -->
	<script src="assets/js/bootstrap.js"></script>
	<!--  Flexslider Scripts --> 
	<script src="assets/js/jquery.flexslider.js"></script>
	<!--  Scrolling Reveal Script -->
	<script src="assets/js/scrollReveal.js"></script>
	<!--  Scroll Scripts --> 
	<script src="assets/js/jquery.easing.min.js"></script>
	<!--  Custom Scripts --> 
	<script src="assets/js/custom.js"></script>
	<!-- Google Maps script -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyAQGpSV_LXFrjfBrL_Fna81bIQphGOnugo"></script>
	<script type="text/javascript" src="http://gmap3.net/js/gmap3-4.1-min.js"></script>
	<!-- Page contents script -->	
   	<script type="text/javascript" src="assets/js/proses.js"></script>
   	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-72823448-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
