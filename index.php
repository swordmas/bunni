<!DOCTYPE html>
<html>

	<head>
        <meta charset="utf-8" />
        <meta name="author" content="Chen Chen" />
        
        <meta name="description" content="Chen Chen is an Illustrator, avid gamer, lover of robots, nerd and asian currently residing in the good ole' Silicon Valley." />
        <meta name="keywords" content="Chen Chen, illustrations, art, Chen illustrations, San Francisco, Bay Area"/>
        
        <link rel="icon" type="image/png" href="images/favi.png" />
        <link rel="x-icon" type="image/ong" href="images/favi.png" />

	<title>Chen's Illustrations - Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        
		
        <link rel="stylesheet" type="text/css" href="styles/reset.css" />
	<link rel="stylesheet" type="text/css" href="styles/styles.css" />
        
        <script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/lightbox-2.6.min.js"></script>
        <link href="css/lightbox.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/jquery.parallax.css" />
        
        <!-- Styles specific for parallax viewport, (view per page unconfined within css for ironically, convinence)-->
        
        <style type="text/css" media="screen, projection">
		.parallax-viewport {
			  
		  clear:both;
		  width: 1000px;
			  
		  height: 615px;
		  background-color: #000;			  
		}
			
		.diagram {
		  margin-top: -0.75em;
		}
			
		small {
		text-transform: uppercase;
		}
		</style>
        </head>

    <body>    
        <div id="container" class="home"><!-- main container -->
            <div id="header">
            	<a href="portfolio.php"><div id="main_logo"></div><!-- end logo --></a>
                <div id="nav_bar"><!-- navigation bar -->
                    <!-- probably not optimized code but it'll do -->
                        <div id="bar" class="n_bar1">
                            <h3 id="home" class="active">HOME</h3> <!-- active no hyperlink -->
                        </div><!-- end bar1 -->
                        <div id="bar" class="n_bar2">
                            <a href="portfolio.php"><h3 id="home">PORTFOLIO</h3></a>
                        </div><!-- end bar1 -->
                        <div id="bar" class="n_bar3">
                            <a href="resume.php"><h3 id="home">RESUME</h3></a>
                        </div><!-- end bar1 -->
                        
                        <div id="bar" class="n_bar4">
                            <a href="/blog"><h3 id="home">BLOG</h3></a>
                        </div><!-- end bar1 -->
                        
                        <div id="bar" class="n_bar5">
                            <a href="contact.php"><h3 id="home">BIO|CONTACT</h3></a>
                        </div><!-- end bar1 -->
                </div> <!-- end navigation bar -->
            </div> <!-- end header -->
            <div id="content">
              
              <div class="parallax-viewport" id="parallax">
        
                        <!-- parallax layers -->
                        
                        
                        <div class="parallax-layer" style="width:800px; height:615px;">
                          <img src="images/p_layer_4_1.png" alt="" style="position:absolute; left:-200px; bottom:0px;"/>
                        </div>
                        
                        <div class="parallax-layer" style="width:1045px; height:600px;">
                          <img src="images/p_layer_3_1_v2.png" alt="" style="postion:absolute; bottom:-200px; left: -200px; "/>
                        </div>
                        
                        <div class="parallax-layer" style="width:1100px; height:610px;">
                          <img src="images/p_layer_2_1.png" alt="" style="position: absolute; top: -100px; left:;" />
                        </div>
                        
                        <div class="parallax-layer" style="width:700px; height:500px;">
                          <img src="images/p_layer_1_1.png" alt="" style="position:absolute; top:-145px; left: -240px;"/>
                        </div>
                        
                        <div class="parallax-layer" style="width:1100px; height:615px;">
                          <img src="images/p_layer_0_1.png" alt="" style="position:absolute; top:0; left:0;"/>
                        </div>
                        
                        <div class="parallax-layer" style="width:1100px; height:600px;">
                          
                          <h2 id="welcome">Welcome</h2>
                          
                          
                        </div>
                        
                        <div class="parallax-layer" style="width:1110px; height:603px;">
                          
                          <h3 id="w_sen">Feel Free to look around!</h3>
                          
                          
                        </div>
                        
                        <div class="parallax-layer" style="width:1120px; height:605px;">
                          
                          <h4 id="w_sentence">For questions, inquiries, COMMISSIONS and such</h4> <br />
                          
                          <h4 id="w_sentence"> Email me at: <a href="mailto:chen@chen2illustrations.com" title="chen chen illustrations" id="cmail">chen@chen2illustrations.com</a></h4> <br />
                          
                          <h4 id="w_sentence">Thank you!</h4>
                          
                          <div id="social_icons">
                            
                            
                            <a href="https://www.facebook.com/cchenart"><div id="icon_fb" class="icon_group"></div></a>
                            
                            <a href="https://twitter.com/cchensquared"><div id="icon_tw" class="icon_group"></div></a>
                            
                            <a href="http://www.linkedin.com/profile/view?id=130302830"><div id="icon_li" class="icon_group"></div></a>
                            
                          </div>
                          
                        </div>
                        
                        
              </div> <!-- end parallax viewport -->
              
              <?php 
		 
		 include("includes/footer.inc") 
		 
		 ?> 
              
    </body>
    
    
</html>
