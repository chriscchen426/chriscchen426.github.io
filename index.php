<?php 
if(isset($_POST['submit'])){
    $to = "chaochen426@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];

    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['comment'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['comment'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", I will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>My Profile - Single page website</title>
    <meta name="description" content="">
    <meta name="author" content="WebThemez">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Font Awesome -->
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scroll-top logo"><b>My Profile</b></a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="#home" class="scroll-link">Home</a></li>
                        <li><a href="#aboutUs" class="scroll-link">About Me</a></li>
                        <li><a href="#skills" class="scroll-link">Skills</a></li>
                        <li><a href="#experience" class="scroll-link">Experiences</a></li>
                        <li><a href="#portfolio" class="scroll-link">Projects</a></li>
                        <li><a href="#contactUs" class="scroll-link">Contact Me</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
    <div id="#top"></div>
    <section id="home">
        <div class="banner-container">
            <img src="images/banner-bg.jpg" alt="banner" />
            <div class="container banner-content">
                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>I'm Chao Chen</h2>
                        <p>Seeking Full-Time Job as a Software Engineer (Graduating in May 2017)</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>New Grad</h2>
                        <p>Graduating in May 2017. Experienced and collaborative software developer with over 3 years of experience in programming. 
						Strong understanding of complex data structures and algorithms.</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Java</h2>
                        <p>Prefer as a java developer.</p>
                        <div class="da-img"></div>
                    </div>
                <!--    <div class="da-slide">
                        <h2>JavaScript/jQuery</h2>
                        <p>jQuery: Write Less, Do More...</p>
                        <div class="da-img"></div>
                    </div>  -->
				<!--  <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav> -->
                </div>
            </div>
        </div>
    </section>
    <section id="introText">
        <div class="container">
            <div class="text-center">
            <h1>This is my personal websites, Yes I am a program geek</h1>
              <p>Experienced and collaborative software developer with over 3 years of experience in programming
				seeking for leveraging strong understanding of complex data structures and algorithms into a fulltime Software
				Engineer position</p>
			</div>
        </div>

    </section>
    <!--About-->
    <section id="aboutUs" class="secPad">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>I am Chao Chen, a software engineer</h2>
                <p>I am full experienced in Java, PHP and Python</p>
            </div>
            <div class="row">
                <!-- item -->
                <div class="col-md-4 text-center tileBox">
                   <div class="txtHead"> <i class="fa fa-coffee"></i>
                    <h3>Java <span class="id-color">Expert</span></h3></div>
                    <p>Over 3 years programming experiences.</p>
                </div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-4 text-center tileBox">
                    <div class="txtHead"><i class="fa fa-desktop"></i>
                    <h3>PHP <span class="id-color">Expert</span></h3></div>
                    <p>Over 2 years programming experiences.</p>
                </div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-4 text-center tileBox">
                    <div class="txtHead"><i class="fa fa-lightbulb-o"></i>
                    <h3>Python <span class="id-color">Learner</span></h3></div>
                    <p>New learner of Python but have some programming experiences.</p>
                </div>
                <!-- end: -->
            </div>
        </div>
    </section>
    <!--Quote-->
    <section id="quote" class="bg-parlex">
        <div class="parlex-back">
            <div class="container secPad text-center">
				<h2>We�re just enthusiastic about what we do.</h2><h3>-Steve Jobs</h3>
            </div>
            <!--/.container-->
        </div>
    </section>
    
    <!--Skills-->
    <section id="skills" class="secPad white">
    	<div class="container">
        <div class="heading text-center">
                <!-- Heading -->
                <h2>My Skills</h2>
                <p>List of all skills I have</p>
            </div>
        	<div class="row">
                <div class="col-sm-6">
                    <h2>Programming <strong>Skills</strong></h2>
                    <p class="mrgBtm20">
                        It takes knowledge, smart work, and dedication to make great ideas come to life. I have been helping make great ideas happen for the past 7 years and am always ready for new challenges.
                
                    </p>
                    <div class="row">
                        <div class="col-md-2 skilltitle">Java</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">PHP</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">Python</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                    <span class="sr-only">45% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col-md-2 skilltitle">jQuery/Ajax</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>   -->   
                </div>
				<div class="col-sm-6">
                    <h2>DataBase / Web <strong>Skills</strong></h2>
                    <p class="mrgBtm20">
                        It takes knowledge, smart work, and dedication to make great ideas come to life. I have been helping make great ideas happen for the past 7 years and am always ready for new challenges.
                
                    </p>
                    <div class="row">
                        <div class="col-md-2 skilltitle">MySQL</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">SQL Server</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">HTML/CSS</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">JavaScript</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-sm-6">
                    <h2>Other <strong>Skills</strong></h2>
                    <p class="mrgBtm20">
                        Problem solving is not always about sitting in a board room talking about the way things should be done. I have a strong background in UI design which allows me to think on my feet and act upon it.
                
                    </p>
                    <div class="row">
                        <div class="col-md-2 skilltitle">Git</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">Excel Marcos</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">Linux/Unbuntu</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    <span class="sr-only">75% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-2 skilltitle">AWS/EC2</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                    <span class="sr-only">45% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>
    
    <!--Experience-->
    <section id="experience" class="secPad">
    	<div class="container">     
           <div class="heading text-center">
                <!-- Heading -->
                <h2>Personal Experience</h2>
                <p>Grean left are Education Experiences, Red right are Work Experiences</p>
            </div>
        <div id="timeline"><div class="row timeline-movement timeline-movement-top">
        <div class="timeline-badge timeline-future-movement">
            <a href="#">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </div>
        <div class="timeline-badge timeline-filter-movement">
            <a href="#">
                <span class="glyphicon glyphicon-time"></span>
            </a>
        </div>
    
    </div>
    <div class="row timeline-movement">
    
        <div class="timeline-badge">
            <span class="timeline-balloon-date-day">Jan</span>
            <span class="timeline-balloon-date-month">2016</span>
        </div>
    
    
        <div class="col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-11">
                    <div class="timeline-panel credits">
                        <ul class="timeline-panel-ul">
							<li><span class="importo">M.S. in Computer and Information Science</span></li>
                            <li><span class="causale">Kean University. GPA 3.7/4.0 </span> </li>
                            <li><p><small class="text-muted"> 01/2016 - Present</small></p> </li>
                            
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
    
        <div class="col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-11">
                    <div class="timeline-panel debits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">Graduate Assistant</span></li>
                            <li><span class="causale">* Upgraded official IR website, added international Campus components. </span> </li>
							<li><span class="causale">* Improved IR Data Verification System, troubleshot and resolved data logic issues and session timeout
								redirection issues. </span> </li>
							<li><span class="causale">* Developed of SQL Server stored procedures and functions. Responsible for managing the IR database. </span> </li>
							<li><span class="causale">* Automated and streamlined the process of generating IR Profile using VBA, auto retrieved and formatted data
								in excel, created visualized reports with one click. </span> </li>
                            <li><p><small class="text-muted"> 09/2016 - Present</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
    <!--due -->
    
    <div class="row timeline-movement">
    
    
        <div class="timeline-badge">
            <span class="timeline-balloon-date-day">Aug</span>
            <span class="timeline-balloon-date-month">2013</span>
        </div>
    
        <div class="col-sm-offset-6 col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-11">
                    <div class="timeline-panel debits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">Software Developer</span></li>
                            <li><span class="causale">* Technical lead of Software Implementation group in Application Engineering Department. </span> </li>
							<li><span class="causale">* Designed and implemented an online management platform for workflow management, file sharing, time
								tracker etc. Improved 80% efficiency and information transparency. </span> </li>
							<li><span class="causale">* Followed Agile SW development methodologies. </span> </li>
                            <li><p><small class="text-muted"> 08/2013 - 08/2015</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
    
        <!--<div class="col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-11">
                    <div class="timeline-panel credits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">Software Developer</span></li>
                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                            <li><p><small class="text-muted"> 10/03/2013 - 18/02/2014</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div> -->
    
    
    </div>
    <div class="row timeline-movement">
    
    
        <div class="timeline-badge">
            <span class="timeline-balloon-date-day">Sep</span>
            <span class="timeline-balloon-date-month">2009</span>
        </div>
    
        <!--<div class="col-sm-offset-6 col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-11">
                    <div class="timeline-panel debits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                            <li><p><small class="text-muted"> 09/2009 - 07/2013</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div> -->
    
        <div class="col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-11">
                    <div class="timeline-panel credits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">B.S. in Management Information System</span></li>
                            <li><span class="causale">Harbin Institute of Technology, China. </span> </li>
                            <li><p><small class="text-muted"> 09/2009 - 07/2013</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
    
    
    </div>
    </div>
    </div>
    
    </section>
    
  
   <!--Portfolio-->
    <section id="portfolio" class="page-section section appear clearfix secPad">
        <div class="container">

            <div class="heading text-center">
                <!-- Heading -->
                <h2>Projects</h2>
                <p>Here are all my projects.</p>
            </div>

            <div class="row">
                <nav id="filter" class="col-md-12 text-center">
                    <ul>
                        <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                        <li><a href="#" class="btn-theme btn-small" data-filter=".java">Java</a></li>
                        <li><a href="#" class="btn-theme btn-small" data-filter=".php">PHP/MySQL</a></li>
                        <li><a href="#" class="btn-theme btn-small" data-filter=".python">Python</a></li>
                    </ul>
                </nav>
                <div class="col-md-12">
                    <div class="row">
                        <div class="portfolio-items isotopeWrapper clearfix" id="3">

                            <article class="col-sm-4 isotopeItem php">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img1.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img1.jpg" class="fancybox">
                                                <h5>Online Learning and Testing System</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem java">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img2.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img2.jpg" class="fancybox">
                                                <h5>Facebook Traffic Pattern Analytics</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            <article class="col-sm-4 isotopeItem php">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img3.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img3.jpg" class="fancybox">
                                                <h5>Mini Online Store Website</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem java">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img4.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img4.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem java">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img5.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img5.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem java">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img6.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img6.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem java">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img7.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img7.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem java">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img8.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img8.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem python">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img9.jpg" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/img9.jpg" class="fancybox">
                                                <h5>Project Name</h5>
                                                <i class="fa fa-arrows-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </section>

	<!--Contact -->
    <section id="contactUs" class="page-section secPad">
        <div class="container">

            <div class="row">
                <div class="heading text-center">
                    <!-- Heading -->
                    <h2>Let's Keep In Touch!</h2>
                    <p>Thank you for visiting out my profile. If you would like to get into contact with me, please fill out the form below.</p>
                </div>
            </div>

            <div class="row mrgn30">

                <form method="post" action="" id="contactfrm" role="form">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message�" title="Please enter your message (at least 10 characters)"></textarea>
                        </div>
                        <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
                        <div class="result"></div>
                    </div>
                </form>
                <div class="col-sm-4">
                    <h4>Address:</h4>
                    <address>
                        1000 Morris Ave.<br>
                        Union, NJ 07083<br>
              
                    </address>
                    <h4>Email:</h4>
                    <address>
                        chaochen426@gmail.com<br>
                    </address>
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <footer>
        <div class="container">
            <div class="social text-center">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-flickr"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
    </footer>
    <!--/.page-section-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    Copyright 2017 | All Rights Reserved  -- Created by <a href="http://eve.kean.edu/~chechao">Chao Chen</a>
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

    <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    <script src="js/modernizr-latest.js"></script>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="js/jquery.nav.js" type="text/javascript"></script>
    <script src="js/jquery.cslider.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
