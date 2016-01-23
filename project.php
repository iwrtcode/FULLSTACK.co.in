<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))    
ob_start("ob_gzhandler");
else ob_start();?>
<!DOCTYPE html>
<html>
  <head>
    <title>FULLSTACK | WEBAPPLICATION, FACEBOOK APPLICATION AND WEBSITE</title>
    <meta http-equiv="Content-Type" Content-Type: "text/html" charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="http://static.fullstack.co.in/assets/css/all.css">
  	<link href="http://static.fullstack.co.in/assets/image/favicon.png" rel="icon">
  	<script src="http://static.fullstack.co.in/assets/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
       $(document).ready(function() {
           $("#noscript").remove();
          });
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46809675-1', 'fullstack.co.in');
      ga('send', 'pageview');
    </script>
  </head>
  <body>
  	<div id="main-container">
  		<div class="header-container">
	     	<div class = "container_12" id = "header">
          <div id="show">
    	     		<div class="grid_3" id="logo">
    	     			<a href="index.php#home"><img src="http://static.fullstack.co.in/assets/image/logo_fullstack.png" alt="logo" /></a>
    	     		</div>
    	     		<div class="grid_9" id="navigation">
    	     			 <ul id="navigation-content">
    	     			  	    <li class="header-link"><a href="index.php#wwd">WHAT WE DO</a></li>
                        <li class="header-link"><a href="index.php#ourwork">OUR WORK</a></li>
                        <li class="header-link"><a href="index.php#process">OUR PROCESS</a></li>
                        <li class="header-link"><a href="index.php#hire-us">GET IN TOUCH</a></li>
    	     		  	</ul>
    	     		</div>
          </div>    
	     	</div>
	    </div>
      <div id="noscript">
          <div class="noscript-content">
                <noscript><div class="grid_12 noscript-message">Fullstack works best with java script enabled</div></noscript>
            </div>    
       </div>
       <?php 
       include_once('GetGalleryData.php');
        $project = new GetGalleryData();
        $getData = $project->selectProjectData(urldecode($_REQUEST['p']));
       if(!empty($getData)) {?>
          <div class="container_12" id="breadcrumb">
            <div class="grid_12 breadcrumb">
               <span id="main-content" class="bc-content"><a href="index.php#ourwork">Our work</a></span>
               <span class="bc-content">&gt;</span>
               <span id="sub-content" class="bc-content"><?php echo $_REQUEST['p']; ?></span>
            </div>
        </div>
      <?php
        }
      if(!empty($_REQUEST['p'])){ 
                 if (!empty($getData)){
          ?>
      <div class="container_12">
             <div class="grid_12" id="project-title">
                <?php echo $getData[0]['projectname']; ?>
             </div>    
             <div class="grid_12" id="project-content">
                <?php echo $getData[0]['description']; ?>
             </div>
             <div class="grid_12" id="project-screenshot">
                 <div class="grid_12" id="screenshot-title">
                    Preview 
                 </div>
                 <div class="grid_12" id="screenshot">
                    <?php if(!empty($getData[0]['url'])) { ?>
                        <a href="<?php echo $getData[0]['url']; ?>" target="_blank"><img src="http://static.fullstack.co.in/assets/image/<?php echo $getData[0]['screenshot']; ?>" alt="screenshot"/></a>
                        <?php }
                          else{ ?>
                        <img src="http://static.fullstack.co.in/assets/image/<?php echo $getData[0]['screenshot']; ?>" alt="screenshot"/>
                         <?php } ?>
                 </div>
                 <?php if(!empty($getData[0]['url'])) {?>
                 <div class="grid_12" id="view-project">
                    <span><img src="http://static.fullstack.co.in/assets/image/url.png" id="url" alt="view project"/></span>
                    <span><a href="<?php echo $getData[0]['url']; ?>" target="_blank"><?php echo $getData[0]['url']; ?></a></span>
                 </div>
                 <?php } ?>
                 <div class="grid_2 push_10" id="hireus-link">
                    <a href="index.php#hire-us">Get in touch</a>
                 </div>
            </div>
                <?php }
                else{?>
                   <div class="container_12">
                     <div class="grid_12 notfound">
                       <img src="http://static.fullstack.co.in/assets/image/404.png" alt="404"/>
                            <p class="notfound-message">OOPS.</p>
                            <p class="notfound-message">WE COULDN'T FIND THIS PAGE.</p>
                            <p class="notfound-message">Sorry about that.</p>
                            <p id="homepage">You might be able to find out what you’re looking for on our<a href="index.php">home page.</a></p>
                     </div>
                 </div>
            <?php }
                }
             else{ ?>
                 <div class="container_12">
                     <div class="grid_12 notfound">
                        <img src="http://static.fullstack.co.in/assets/image/404.png" alt="404"/>
                        <div id="notfound-content">
                            <p class="notfound-message">OOPS.</p>
                            <p class="notfound-message">WE COULDN'T FIND THIS PAGE.</p>
                            <p class="notfound-message">Sorry about that.</p>
                            <p id="homepage">You might be able to find out what you’re looking for on our<a href="index.php">home page.</a></p>
                        </div>
                     </div>
                 </div>
            <?php      
             } ?>
      </div>
      <div id="footer">
          <div class="container_12">
            <div class="grid_12 footer-content" id="page-footer">
              <p>Hand-crafted by FULLSTACK</p>
            </div>
            <div class="grid_12 footer-content">
              Follow us on <span class="social"><a class="social-facebook" href="https://www.facebook.com/pages/Fullstack/397916223673131"  target="_blank"></a></span><span class="social"><a class="social-twitter" href="https://twitter.com/fullstackHQ" target="_blank"></a></span>
            </div>
            <div class="grid_12 footer-content">
              <p>&copy; 2014 Fullstack All rights reserved</p>
            </div>  
        </div>
      </div>
</div>
</body>
</html>
