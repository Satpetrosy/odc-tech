<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ODC Technologies</title>
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,400;1,900&display=swap" rel="stylesheet">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <!-- First section -->
    <section id="infinite" class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">              
        <div class="container">   
          <div class="tm-next logo">
              <a href="#infinite">
              <img class="logo-white" src="./img/ODC-Logo_white.svg" alt="ODC Technologies " title="ODC Technologies"/>
              <img class="logo-color" src="./img/ODC-Logo_color.svg" alt="ODC Technologies " title="ODC Technologies"/>
              </a>
          </div>             
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#infinite">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#whatwedo">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tm-nav-link" href="#ourstack-top">Our stack</a>
              </li>
              <!--
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#about">About</a>
              </li>
              -->
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#contact">Contact</a>
              </li>                    
            </ul>
          </div>        
        </div>
      </nav>
      
      <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <h1>Infrastructure Reliability as a Service</h1>
            <p>
              Helping customers solve Cloud Infrastructure challenges.<br> Always on time and on budget!
            </p>
             
            <div class="">
        <a href="#contact" class="text-center tm-button-link">
          <b class="tm-button">Contact us</b>
        </a>
      </div>
            
        </div>        
      </div>
      
    </section>
<!--Section About
 <section id="about" class="tm-section-pad-top">
	   
      <div class="container tm-container-about">
        <div class="row">
          <div class="text-center col-12">
              <h2 class="tm-text-primary tm-section-title mb-4">We build resilient and cost-effective infrastructure</h2>
              <p class="mx-auto tm-section-desc">
                Taking care of our customer’s cloud or on-prem environments from design and early prototyping to resilient, highly-scalable and cost-effective production stage.
              </p>
          </div>            
        </div>
	   </div>  

</section>
		       
      end of About Section-->
      
      
      
    <section id="whatwedo" class="tm-section-pad-top">
      
      <div class="container">


            
      <div class="row tm-content-box"><!-- first row -->
 
                <div class="col-lg-5">
                    <div class="tm-intro-text-container box">
                        <h1 class="tm-text-primary mb-4">What we do</h1>
                        <p class="tm-intro-text">
                          Our areas of expertise and proficiency</p>
                    </div>
                </div>
                
             
                <div class="col-lg-7">
                    <div class="tm-intro-text-container box box-color-green">
						
						<div class="row">
						<div class="col-lg-4 ">
							<div class="box-icon">
								
							<img alt="Cloud management" src="img/cloud-icon.svg"/>
							<h5>Cloud cost<br> management</h5>
							
							</div>
							</div>
							<div class="col-lg-8"><p>- Cloud cost management and efficiency<br>
- Data and metrics-driven workload evaluation<br>
- Resource usage cost optimization
- Automation, access control and best-practices implementation for cloud infrastructure</p></div>
						</div>
						
					
                    </div>
                </div>

            </div><!-- first row -->
            
            
                        <div class="row tm-content-box"><!-- second row -->
        		
                <div class="col-lg-12">
                    <div class="tm-intro-text-container box box-color-blue">
                      <div class="row">
						  <div class="col-lg-3 ">
							  <div class="box-icon">
						  <img alt="Operations" src="img/operations-icon.svg"/>
							<h5>Operations</h5>
							  </div>
						  
						  </div>
						  <div class="col-lg-4">
						  <h2>Day 1</h2> <h5>Setup and Automation </h5>
							  <p>- Automation and Infrastructure as Code<br>
- Provisioning and Deployment automation<br>
- Monitoring, metrics collection and log aggregation setup<br>
- Performance tuning and resource utilization efficiency</p>
						  
						  </div>
				<div class="col-lg-1"></div>		  
						  <div class="col-lg-4">
						  <h2>Day 2</h2> <h5>Maintenance and Operation
</h5>
						  <p>- Longevity and Scalability<br>
- 24/7 on-call rotation and aggressive SLA support<br>
- Backup and Restore automation<br>
- Troubleshooting, debugging, operational incident prevention, and response</p>
						  </div>


						
						</div>  
						
						
						
                    </div>
                </div>                

            </div><!-- second row -->
          
        </div>
      
    </section>
      
      
      
      
    
    <section id="ourstack-top" class="ourstack-pad-top">
	   
      <div class="container tm-container-ourstack">
        <div class="row">
          <div class="text-center col-12">
              <h2 class="tm-text-primary tm-section-title mb-4">Our Stack</h2>
              <p class="mx-auto tm-section-desc">
                Tools and technologies that we use and contribute to
              </p>
          </div>            
        </div>
	   </div>        

    </section>

      
    <section id="ourstack-bottom" class="ourstack-pad-bottom ">
	   
      <div class="container tm-container-ourstack">
        <div class="row tm-content-box">
          <div class="col-lg-6">
            <h3>Cloud Infrastructure</h3>            
            <p>Amazon Web Services (AWS), Google Cloud Platform (GCP), Microsoft Azure Cloud, DigitalOcean</p>
            
            <h3>Container Orchestration and Cloud Native</h3>
            <p>Kubernetes, Helm, Velero</p>

            <h3>CI/CD Pipeline </h3>
            <p>Jenkins, TeamCity, GitLab, Jenkins X, Tekton, ArgoCD</p>
              
            <h3>Provisioning and Deployment</h3>
            <p>Terraform, Ansible</p>
          </div>   
         
          <div class="col-lg-6">
            <h3>Security</h3>
            <p>Operations, Audit, Governance, and Compliance</p>

            <h3>Monitoring and Metrics</h3>
            <p>Prometheus, Grafana, Thanos</p>
  
            <h3>Log Aggregation </h3>
            <p>Elastic Search/Logstash/Kibana stack</p>

            <h3>Development and Automation</h3>
            <p>Python, Go, Shell</p>
          </div> 
        </div>
	   </div>   
 
    </section>  
      
      
      
      
      
      
      <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
    
      <div class="container tm-container-contact">
        
        <div class="row" id="contactUs">
            
            <div class="text-center col-12 contactus-pad">
                <h2 class="tm-section-title mb-4">Contact us</h2>
            </div>
            
            <div class="col-sm-12 col-md-6">
              <form action="contactUs.php" method="post">
                  <?php
                    if(isset($_SESSION['errors'])){
                  ?>
                  <ul>
                      <?php foreach ($_SESSION['errors'] as $error){ ?>
                      <li><?php echo $error; ?> </li>
                      <?php }
                        session_destroy();
                      ?>
                  </ul>
                  <?php
                    }
                  ?>
                <input id="name" name="name" value="<?php echo isset($_SESSION['request_data']['name']) ? $_SESSION['request_data']['name'] : '' ?>" type="text" placeholder="Your Name" class="tm-input" required />
                <input id="email" name="email" value="<?php echo isset($_SESSION['request_data']['email']) ? $_SESSION['request_data']['email'] : '' ?>" type="email" placeholder="Your Email" class="tm-input" required />
                <textarea id="message" name="message" rows="8" placeholder="Message" class="tm-input" required><?php echo isset($_SESSION['request_data']['message']) ? $_SESSION['request_data']['message'] : '' ?></textarea>
                <div class="g-recaptcha" data-sitekey="6LcgZ_cUAAAAAKll23Z5aq836rdNTzoYmp8yju8S"></div>
                <button type="submit" class="btn tm-btn-submit">Submit</button>
              </form>
            </div>
            
            <div class="col-sm-12 col-md-6">

                <div class="contact-item">
                  <a rel="nofollow" href="https://www.linkedin.com/" class="item-link">
                      <i class="fab fa-2x fa-linkedin-in mr-4"></i>
                      <span class="mb-0">Let's connect</span>
                  </a>              
                </div>

            
            </div>
            
            
        </div><!-- row ending -->
        
      </div>

      	<footer class="text-center small tm-footer">
          <p class="mb-0">
          Copyright &copy; 2020 ODC Technologies inc . All Rights Reserved.
          
        </p>
        </footer>

    </section>
    
    <script src="js/jquery-1.9.1.min.js"></script>     

    <script src="js/easing.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
    <script>

      function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
          _offset = 400;
        } 
        if(windowHeight > 680) {
          _offset = 300
        }
        if(windowHeight > 830) {
          _offset = 210;
        }

        return _offset;
      }

      function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
          bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
      }

      // Parallax function
      // Adapted based on https://codepen.io/roborich/pen/wpAsm        
      var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
          setParallaxPosition($doc, multiplier, $object);
        } else {
          $(window).scroll(function(){          
            setParallaxPosition($doc, multiplier, $object);
          });
        }
      };

      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});
        
        $(window).scroll(function(){
          if($(window).width() > 768) {
            var firstTop = $object.offset().top,
                pos = $(window).scrollTop(),
                yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

            var bg_css = 'center ' + yPos + 'px';

            $object.css({"background-position" : bg_css });
          } else {
            $object.css({"background-position" : "center" });
          }
        });
      };
      
      $(function(){
        // First Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);   
        
        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){          
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });
        
        // Close mobile menu after click 
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show'); 
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav({
          'easing': 'easeInOutExpo',
          'speed': 600
        });        
        
        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 600, 'easeInOutExpo', function(){
              window.location.hash = hash;
            });
          } // End if
        });

        

        
      });
    </script>
  </body>
</html>