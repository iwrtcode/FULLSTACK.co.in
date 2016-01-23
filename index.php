<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))    
ob_start("ob_gzhandler");
else ob_start();?>
<!DOCTYPE html>
<html>
  <head>
    <title>FULLSTACK | WEBAPPLICATION, FACEBOOK APPLICATION AND WEBSITE</title>
    <meta http-equiv="Content-Type" Content-Type: "text/html" charset="utf-8"/>
    <meta name="google-site-verification" content="S43Wbe-kO0mibCIYWJUUlyYoMq2yd_VyTPdaihKq11M" />
  	<link rel="stylesheet" type="text/css" href="http://static.fullstack.co.in/assets/css/all.css">
  	<link href="http://static.fullstack.co.in/assets/image/favicon.png" rel="icon">
  	<script src="http://static.fullstack.co.in/assets/js/jquery-1.7.2.min.js"></script>
  	<script src="http://static.fullstack.co.in/assets/js/all.js"></script>
  </head>
  <body class="ns">
  	<div id="main-container">
	     	<div id="header">
	     	  <div id="show">
	     		<div class="grid_3" id="logo">
	     			 <a href="#home"><img src="http://static.fullstack.co.in/assets/image/logo_fullstack.png" alt="logo" /></a>
	     		</div>
	     		<div class="grid_9" id="navigation">
	     			 <ul id="navigation-content">
	     			  	 	<li ><a href="#wwd" class="header-link">WHAT WE DO</a></li>
	     			  	 	<li class="header-link"><a href="#ourwork">OUR WORK</a></li>
	     			  	 	<li class="header-link"><a href="#process">OUR PROCESS</a></li>
	     			  	 	<li class="header-link"><a href="#hire-us">GET IN TOUCH</a></li>
	     		  	</ul>
	     		</div>
	     	  </div>
	     	</div>
	     	<div id="noscript">
	     		<div class="noscript-content">
	     	        <noscript><div class="grid_12 noscript-message">Fullstack works best with java script enabled</div></noscript>
	     	    </div>    
	     </div>
	    <div id="backtotop"> 	
	      <a id="toTop" href="#"><img src="http://static.fullstack.co.in/assets/image/backtotop.png" alt"back to top"/></a>
	    </div>  
	    <div class="container_12" id="home" tabindex="0">
	    	<div class="grid_12" id="home-content">
	    		We speak tech but we breathe usability. We merge the best of both design and tech to tailor-make a solution for you. We tend to take what you want and turn it into something you need. We at Fullstack are always aiming to make your life easier by painting a clearer, fresher picture of what you are looking at. 
	    	</div>
	    	<div class="grid_12 next-page">
	    		<a href="#wwd" title="what we do"><img class="nextpage" src="http://static.fullstack.co.in/assets/image/nextpage.png" alt="next page arrow"/></a>
	    	</div>	 
	    </div>
	      <div class="container_12" id="wwd" tabindex="0">
	    	<div class="grid_12 wwd-title" id="wwd-title">
	    		<h1>WHAT WE DO</h1>
	    	</div>
	    	<div class="grid_12" id="wwd-content">
	    		<img src="http://static.fullstack.co.in/assets/image/whatwedo.png" alt="what we do" id="wwd-image"/>
	    	</div>
	    	<div class="grid_4 wwd-description">
	    		WEB APPLICATION
	    	</div>
	    	<div class="grid_4 wwd-description">
	    		FACEBOOK APPLICATION
	    	</div>
	    	<div class="grid_4 wwd-description">
	    		WEBSITE
	    	</div>
	    	<div class="grid_12 next-page">
	    		<a href="#ourwork" title="our line-up"><img class="nextpage" src="http://static.fullstack.co.in/assets/image/nextpage.png" alt="next page arrow"/></a>
	    		<p class="arrow-title">Our line-up</p>
	    	</div>
	    </div>
	    <div class="container_12"  id="ourwork" tabindex="0">
	    	<div class="grid_12 wwd-title" id="ow-title">
	    		<h1>OUR WORK</h1>
	    	</div>
	    	<div class="grid_12 ourwork">
	    		<div id="left-arrow" class="left-arrow">
	    		</div>
	    		<div class="holder"></div>
			    		<ul id="ourwork-content">	
			    				<li class="ow-content-hide hide-content">
			    					<p class="project-name">MOBDEEDS.COM</p>
			    					<div id="ourwork-view" class="ourwork-view"><a href="project.php?p=mobdeeds.com">VIEW</a></div>
			    					<p id="ourword-tag" class="ourword-tag">WEB APPLICATION</p>
			    				</li>
			    				<li class="ow-content-hide hide-content">
			    					<p class="project-name">GIFT A CARD</p>
			    					<div id="ourwork-view" class="ourwork-view"><a href="project.php?p=Gift a card">VIEW</a></div>
			    					<p id="ourword-tag" class="ourword-tag">FACEBOOK APPLICATION</p>
			    				</li>
			    				<li class="ow-content-hide hide-content">
			    					<p class="project-name">RECORDER</p>
                                    <div id="ourwork-view" class="ourwork-view"><a href="project.php?p=Recorder">VIEW</a></div>
			    					<p id="ourword-tag" class="ourword-tag">CONCEPT LOGO</p>
			    				</li>
			    				
			    				<li class="ow-content-hide hide-content">
			    					<p class="project-name">MEDWEB</p>
                                    <div id="ourwork-view-secondrow" class="ourwork-view"><a href="project.php?p=Medweb">VIEW</a></div>
			    					<p id="ourword-tag" class="ourword-tag">WEB APPLICATION</p>
			    				</li>
			    				<li class="ow-content-hide hide-content">
			    					<p class="project-name">DRUG STORE</p>
                                    <div id="ourwork-view-secondrow" class="ourwork-view"><a href="project.php?p=Drugstore">VIEW</a></div>
			    					<p id="ourword-tag" class="ourword-tag">WEB APPLICATION</p>
			    				</li>
			    				<li class="ow-content-hide hide-content">
			    					<p class="project-name">MOBDEEDS</p>
                                    <div id="ourwork-view-secondrow" class="ourwork-view"><a href="project.php?p=Mobdeeds">VIEW</a></div>
			    					<p id="ourword-tag" class="ourword-tag">BRANDING</p>
			    				</li>
			    				<li class="ow-content-hide hide-content">
			    					<p class="project-name">VEE VEE TEXTILE</p>
                                    <div id="ourwork-view-thirdrow" class="ourwork-view"><a href="project.php?p=VEE VEE TEXTILE">VIEW</a></div>
			    					<p id="ourword-tag" class="ourword-tag">BRANDING</p>
			    				</li>
			    				<li class="ow-content-hide hide-content">
			    					<p class="project-name">VEE VEE TEX</p>
                                    <div id="ourwork-view-thirdrow" class="ourwork-view"><a href="project.php?p=VEE VEE TEX">VIEW</a></div>
			    					<p id="ourword-tag" class="ourword-tag">BRANDING</p>
			    				</li>
			    		</ul>
                <div id="right-arrow" class="right-arrow">	
                </div>
                <div class="grid_12 next-page">
	    		     <a href="#process" title="our process"><img class="nextpage" src="http://static.fullstack.co.in/assets/image/nextpage_1.png" alt="next page arrow"/></a>
	    	    </div>	
		    </div>
		</div>    
	    <div class="container_12"  id="process" tabindex="0">
	        <div class="grid_12 process wwd-title" id="op-title">
	    		<h1>OUR PROCESS</h1>
	    	</div>
	    	 <div class="grid_12 op-content">
	    	    <div id="process-part-one">	
		    	    <div class="each-process">
		    	        <img src="http://static.fullstack.co.in/assets/image/client_discussion.png" alt="discovery" />
                        <p class="op-description">Let’s talk and make your ideas our own.</p>
		    	    </div>	
		    	    <div class="each-process">
		    	       <img src="http://static.fullstack.co.in/assets/image/informationarchitecture.png" alt="Information architecture" />
		    	       <p class="op-description">Mapping out these ideas to form an ideal structure.</p>
		    	    </div>
		    	    <div class="each-process" id="three">
		    	        <img src="http://static.fullstack.co.in/assets/image/sketching.png" alt="Sketching" />
		    	        <p class="op-description">We get old school by starting with pen and paper.</p>
		    	    </div>
		    	    <div class="each-process">
		    	        <img src="http://static.fullstack.co.in/assets/image/mockup.png" alt="Mock up" />
		    	        <p class="op-description">We have these ideas and see them take actual shape.</p>
		    	    </div>
		    	    <div class="each-process process-part-two">
		    	        <img src="http://static.fullstack.co.in/assets/image/clientapproval.png" alt="Client approval" />
                        <p class="op-description">Let’s have you see what we’ve come up with so far.</p>
		    	    </div>	
		    	    <div class="each-process process-part-two">
		    	       <img src="http://static.fullstack.co.in/assets/image/coding.png" alt="Development" />
		    	       <p class="op-description">We get our geek mask on.</p>
		    	    </div>
		    	    <div class="each-process process-part-two">
		    	        <img src="http://static.fullstack.co.in/assets/image/testing.png" id="op-testing" alt="Cross OS and browser testing" />
		    	        <p class="op-description">We make sure there aren’t any glitches.</p>
		    	    </div>
		    	    <div class="each-process process-part-two">
		    	        <img src="http://static.fullstack.co.in/assets/image/launched.png" alt="Launch" />
		    	        <p class="op-description">Time to roll out the good stuff!</p>
		    	    </div>
		    	</div>
	    	</div>
	    	<div class="grid_12 next-page nextpage-process">
	    		<a href="#hire-us" title="get in touch"><img class="nextpage" src="http://static.fullstack.co.in/assets/image/nextpage_1.png" alt="next page arrow"/></a>
	    	</div>
	    </div>
	    <div class="container_12 " id="hire-us" tabindex="0">
	    	<div class="grid_12 wwd-title" id="hu-title">
	    		<h1>GET IN TOUCH</h1>
	    	</div>
	    	 <?php
		          require_once('Validation.php');
		          if(isset($_POST['submit'])){
				        $webapp_status = "unselected";
		                $facebookapp_status = "unselected";
		                $website_status = "unselected";
		                 $other_status = "unselected";
		                $selected_dropdown = "";
		                if(isset($_POST['subject'])){   
		                $selected_dropdown = $_POST['subject'];
		                    }
		                if ($selected_dropdown == "1") {
		                $webapp_status = "selected";
		                }
		                else if ($selected_dropdown == "2") {
		                
		                $facebookapp_status = "selected";
		                }
		                else if ($selected_dropdown == "3") {
		                $website_status = "selected";
		                }
		                 else if ($selected_dropdown == "4") {
		                $other_status = "selected";
		                }

		          	   $subject_error;
		          	   $email_error;
		               $message_error;
		               $name_error;
		               $object = new Validation();
		               $object->contact($_POST);
		               $errors = array_filter($object->error);
		                if(!empty($errors['message'])){
		                	echo"<script> $.scrollTo(2800,0);</script>";
		                      $message_error =  $errors['message'];
		                  }
		               if(!empty($errors['name'])){
		                	echo"<script> $.scrollTo(2800,0);</script>";
		                    $name_error =  $errors['name'];
		               }
		               if(!empty($errors['subject'])){
		                	echo"<script> $.scrollTo(2800,0);</script>";
		                    $subject_error =  $errors['subject'];
		               }
		               if(!empty($errors['email'])){
		                	echo"<script> $.scrollTo(2800,0);</script>";
		                    $email_error =  $errors['email'];
		               }
		          }
           ?>
           <div class="grid_6 hireus-content alpha">
           	    <?php
                   if(isset($object->success)){ ?>
                       <div class="grid_12 contact-message">
                           	 <?php if($object->success == "0"){ ?>
		           	   	      <script> $.scrollTo(2800,800);</script>
		           	   	      <p>Thanks for showing interest with us. We will get in touch with you.</p>
		           	   	      <?php }
		           	   	             else if($object->success == "1"){ ?>
                                        <p>Failed, Try again.</p>
		           	   	             <?php }
		           	   	      ?>
		           	    </div>        
           	    	    <?php }
	           	    	    else{
	           	    	    ?>
           	              <form id="hireus-message" method="post">
		           	       <div class="grid_6 hiring-title">
		           	   	    <p>FULL NAME*</p>
		           	        </div>
		           	        <div class="grid_6">
		           	   	        <input type="text" class="hiring-field" name="name" id="name" placeholder="It’s a pleasure meeting you" value="<?php if(!empty($_POST['name'])) echo $_POST['name']; ?>">
		           	   	    </div>
		           	        <div class="grid_6 error-message">
		           	   	       <?php if(!empty($name_error)) { echo  $name_error; }   ?>
		           	        </div>
		           	        <div class="grid_6 hiring-title">
		           	   	    <p>EMAIL*</p>
		           	        </div>
		           	        <div class="grid_6">
		           	   	        <input type="text" class="hiring-field" name="email" id="email" placeholder="We won’t spam you. We promise." value="<?php if(!empty($_POST['email'])) echo $_POST['email']; ?>">
		           	        </div>
		           	        <div class="grid_6 error-message">
		           	   	        <?php if(!empty($email_error)) { echo  $email_error; }   ?>
		           	        </div>
		           	   	   	<div class="grid_6 hiring-title">
		           	   	   	  <p>SUBJECT*</p>
		           	   	   	</div>
		           	   	   	<div class="grid_6">
		           	   	   	   <select class="hiring-field" name="subject" id="subject">
		           	   	   	   	   <option value="">What would you like us to do for you?</option>
			           	   	   	   <option <?php if(isset($webapp_status)){ echo $webapp_status; } ?>  value="1">Build a web application for us</option>
			           	   	   	   <option <?php if(isset($facebookapp_status)){ echo $facebookapp_status; } ?>  value="2">Build a facebook application for us</option>
			           	   	   	   <option <?php if(isset($website_status)){ echo $website_status; } ?>  value="3">Build a website for us</option>
			           	   	   	   <option <?php if(isset($other_status)){ echo $other_status; } ?> value="4">Others</option>
		           	   	       </select>	
		           	   	    </div>
		           	   	   	<div class="grid_6 error-message">
		           	  	       <?php if(!empty($subject_error)) { echo  $subject_error; }   ?>
		           	        </div>
		           	   	    <div class="grid_6 hiring-title">
		           	   	    	  <p>MESSAGE*</p>
		           	   	    </div>
		           	   	    <div class="grid_6 message-content">
		           	   	      <textarea id="message" placeholder="Brief outlay of what you’re looking at" name="message"><?php if(!empty($_POST['message'])) echo trim($_POST['message']); ?></textarea>
		           	        </div>
		           	       <div class="grid_6 error-message">
		           	          <?php if(!empty($message_error)) { echo  $message_error; }  ?>
		           	       </div>

			           	   <div class="grid_2 push_4">
			           	   	   <input type="submit" name="submit" id="submit" value="SEND">
			           	   </div>
		            </form>
		        <?php } ?>
          </div>
                  <?php if(!isset($object->success)){ ?>
                      <div class="grid_2 push_1" id="or">
                      	 Or
                      </div>
                      <div class="grid_4 omega contact-content">
 	                     <div class="grid_4 contact-data">
			        	      <span><img src="http://static.fullstack.co.in/assets/image/email.png" class="contact-email-icon"/></span>
			        	      <span><a href="mailto:pv@fullstack.co.in" target="_blank">pv@fullstack.co.in</a></span>
	                     </div>
	                     <div class="grid_4 contact-data">
			        	      <span><img src="http://static.fullstack.co.in/assets/image/mobile.png" class="contact-mobile-icon"/></span>
			        	      <span id="mobile-no">(+91) 80567 37471</span>
	                    </div>
	                 </div>   
	                 <?php } ?>
	    </div>
	    <div id="footer">
		    <div class="container_12">
		    	<div class="grid_12 footer-content" id="page-footer">
		    		<p>Hand-crafted by FULLSTACK</p>
		    	</div>
		    	<div class="grid_12 footer-content">
		    		Follow us on <span class="social"><a class="social-facebook" href="https://www.facebook.com/pages/Fullstack/397916223673131" target="_blank"></a></span><span class="social"><a class="social-twitter" href="https://twitter.com/fullstackHQ" target="_blank"></a></span>
		    	</div>
		    	<div class="grid_12 footer-content">
		    		<p>&copy; 2014 Fullstack All rights reserved</p>
		    	</div>	
		    </div>
		</div>    
    </div> 		
  </body>
</html>