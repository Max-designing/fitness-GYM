<?php session_start();
 include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<title><?php echo ucfirst(basename($_SERVER['PHP_SELF'], ".php")); ?> | Baazi</title>
<link rel="shortcut icon" href="./theme/images/logo.JPG" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="./theme/fonts/icomoon/style.css">

  <link rel="stylesheet" href="./theme/css/bootstrap.min.css">
  <link rel="stylesheet" href="./theme/css/jquery-ui.css">
  <link rel="stylesheet" href="./theme/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./theme/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="./theme/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="./theme/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="./theme/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="./theme/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="./theme/css/aos.css">
  <link href="./theme/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="./theme/css/styles.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<style>
.bmi-calculator input::placeholder {
  color: #6c757d !important;
}
.bmi-calculator input:focus {
  border-color: #ffc107;
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
}
</style>

  <div class="site-wrap text-warning">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle "></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="#" class="text-warning">BAAZI</a> <a class="text-dark"href="#">GYM</a></div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#classes-section" class="nav-link">Classes</a></li>
                <li><a href="#schedule-section" class="nav-link">Schedule</a></li>
                <li><a href="#trainer-section" class="nav-link">Trainer</a></li>
                <li><a href="#services-section" class="nav-link">Our Rules</a></li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block">
  <li class="cta">
    <a href="./customer/index.php" class="nav-link">
      <span class="rounded border border-warning">JOIN US</span>
    </a>
  </li>
</ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                class="icon-menu h3-dark "></span></a>
          </div>
        </div>
      </div>

    </header>

    <a id="bgndVideo" class="player"
      data-property="{videoURL:'https://www.youtube.com/watch?v=rd9ZXcabXMU',showYTLogo:false, showAnnotations: false, showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:10, stopAt: 36, opacity:1}">
    </a>

    <div class="intro-section" id="home-section" style="background-color: #ccc;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
            <h1>Welcome To </h1> <h1 class="text-warning">BAAZI</h1><h1 class="text-black">GYM</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section section-1">


      <div class="container">

        <div class="row mb-5">
          <div class="col-lg-3">
        
            <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="">
              <div class="icon-wrap"><span class="flaticon-scale text-warning"></span></div>
              <div class="counter-text">
          
                <strong class="label label-important"><?php include'./admin/actions/dashboard-activecount.php'?></strong>
                <span>Members</span>
              </div>
            </div>
        
        
          </div>
          <div class="col-lg-3">
            <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-wrap"><span class="flaticon-stationary-bike text-warning"></span></div>
              <div class="counter-text">
              <strong><?php include './admin/actions/count-equipments.php';?></strong>
                <span>Available Equipments</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
        
            <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-wrap"><span class="flaticon-muscle text-warning"></span></div>
              <div class="counter-text">
              <strong><?php include './admin/actions/count-trainers.php';?></strong>
                <span>Active Gym Trainers</span>
              </div>
            </div>
        
          </div>
          <div class="col-lg-3">
            <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-wrap"><span class="flaticon-Announcements text-warning"></span></div>
              <div class="counter-text">
              <strong class="label label-important"><?php include'./admin/actions/count-announcements.php'?></strong>
              
                <span>Announcements</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 mr-auto mb-5 align-self-center">

            <div class="mb-5">
              <h2 class="section-title text-warning">About Us</h2>
              <p class="mb-5">Welcome to BAAZI GYM — your ultimate fitness destination in the heart of the city.
At BAAZI, we believe fitness is not just about building muscles, it’s about building confidence, discipline, and a healthy lifestyle.

With a passionate team of certified trainers, state-of-the-art equipment, and a variety of classes for all levels, we are here to support you every step of the way.

Whether you want to lose weight, gain strength, or simply stay active — BAAZI GYM is where your transformation begins.

💪 Train Hard. Stay Strong. Be BAAZI.</p>
              <p>
                <a href="#contact-section" class="btn btn-warning smoothscroll py-3 px-4">Get In Touch</a>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="image-absolute-box">
             
              <img src="./theme/images/logo.jpg" alt="Image" class="img-fluid img-shadow">
            </div>
          </div>
        </div>
      </div>

    </div>
<!-- BMI Calculator Section -->
<div class="intro-section" id="home-section" style="background-color: #1a1a1a;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
        <div class="bmi-calculator p-4 rounded shadow" style="background: rgba(0,0,0,0.7);">
          <h2 class="text-warning mb-4">BMI Calculator</h2>

          <!-- Unit Toggle -->
          <div class="unit-toggle mb-4">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-outline-warning active">
                <input type="radio" name="units" id="metric" autocomplete="off" checked> Metric Units
              </label>
     
            </div>
          </div>

          <!-- Metric Inputs -->
          <div id="metric-inputs">
            <div class="form-group">
              <input type="number" class="form-control bg-dark text-white" id="kg" placeholder="Weight (kg)" step="0.1">
            </div>
            <div class="form-group">
              <input type="number" class="form-control bg-dark text-white" id="cm" placeholder="Height (cm)">
            </div>
          </div>

          <!-- Imperial Inputs -->
          <div id="imperial-inputs" style="display: none;">
            <div class="form-group">
              <input type="number" class="form-control bg-dark text-white" id="lbs" placeholder="Weight (lbs)" step="0.1">
            </div>
            <div class="form-group d-flex">
              <input type="number" class="form-control bg-dark text-white mr-2" id="feet" placeholder="Feet">
              <input type="number" class="form-control bg-dark text-white" id="inches" placeholder="Inches">
            </div>
          </div>

          <button class="btn btn-warning btn-block mt-3" onclick="calculateBMI()">Calculate BMI</button>

          <div id="result" class="mt-4 text-white">
            <h4 class="text-warning">Your BMI: <span id="bmi-value">--</span></h4>
            <p id="bmi-category" class="lead mb-0">Please enter your measurements</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="site-section section-2" id="classes-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title text-warning">Classes</h2>
            <p>At BAAZI GYM, we focus on the four pillars of a powerful body and a healthy lifestyle. Choose your path and transform your fitness journey today!</p>
          </div>
        </div>

      </div>
      <div class="owl-carousel nonloop-block-13">

        <a class="work-thumb" href="#">
          <div class="work-text">
            <h3>Boxing Traning</h3>
            <span class="category">At BAAZI GYM, our Boxing Training sessions are built for both beginners and advanced fighters. Improve your strength, speed, endurance, and coordination — while learning real boxing techniques from experienced coaches.</span>
          </div>
          <img src="./theme/images/box.jpg" alt="Image" class="img-fluid">
        </a>

        <a class="work-thumb" href="#">
          <div class="work-text">
            <h3>Fitness</h3>
            <span class="category">Train your whole body using real-life movements that build strength, balance, and flexibility.</span>
          </div>
          <img src="./theme/images/slide_3.jpg" alt="Image" class="img-fluid">
        </a>

        <a class="work-thumb" href="#">
          <div class="work-text">
            <h3>Cardio </h3>
            <span class="category">Boost your stamina, burn calories fast, and improve heart health with our high-energy cardio sessions.</span>
          </div>
          <img src="./theme/images/slide_1.jpg" alt="Image" class="img-fluid">
        </a>

        <a class="work-thumb" href="#">
          <div class="work-text">
            <h3>Strength</h3>
            <span class="category">Build muscle, increase endurance, and shape your body with guided weight and resistance workouts.</span>
          </div>
          <img src="./theme/images/slide_4.jpg" alt="Image" class="img-fluid">
        </a>



    </div>


    <div class="site-section section-2" id="schedule-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title text-warning">Schedule</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
              voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias
              blanditiis consequuntur
              sunt nisi.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <ul class="nav nav-tabs mb-5 border-bottom-0 justify-content-center tab-list-custom" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday"
                  aria-selected="true">Monday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday"
                  aria-selected="false">Tuesday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday"
                  aria-selected="false">Wednesday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday"
                  aria-selected="false">Thursday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday"
                  aria-selected="false">Friday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday"
                  aria-selected="false">Sunday</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                <table class="table table-bordered table-custom table-striped ">
                  
                  <tbody>
                    <tr>
                      <td>Gym</td>
                      <td>8:00am - 10:00am</td>
                      <td>John Doe</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Meditation</td>
                      <td>10:00am - 10:30am</td>
                      <td>James Holmes</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Weight Lifting</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Ben Smith</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Crossfit</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Craig Peters</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobics</td>
                      <td>5:00pm - 5:30pm</td>
                      <td>Paul Green</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
<table class="table table-bordered table-custom table-striped ">
                  
                  <tbody>
                    <tr>
                      <td>Gym</td>
                      <td>8:00am - 10:00am</td>
                      <td>John Doe</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Meditation</td>
                      <td>10:00am - 10:30am</td>
                      <td>James Holmes</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Weight Lifting</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Ben Smith</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Crossfit</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Craig Peters</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobics</td>
                      <td>5:00pm - 5:30pm</td>
                      <td>Paul Green</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
<table class="table table-bordered table-custom table-striped ">
                  
                  <tbody>
                    <tr>
                      <td>Gym</td>
                      <td>8:00am - 10:00am</td>
                      <td>John Doe</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Meditation</td>
                      <td>10:00am - 10:30am</td>
                      <td>James Holmes</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Weight Lifting</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Ben Smith</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Crossfit</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Craig Peters</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobics</td>
                      <td>5:00pm - 5:30pm</td>
                      <td>Paul Green</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
<table class="table table-bordered table-custom table-striped ">
                  
                  <tbody>
                    <tr>
                      <td>Gym</td>
                      <td>8:00am - 10:00am</td>
                      <td>John Doe</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Meditation</td>
                      <td>10:00am - 10:30am</td>
                      <td>James Holmes</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Weight Lifting</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Ben Smith</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Crossfit</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Craig Peters</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobics</td>
                      <td>5:00pm - 5:30pm</td>
                      <td>Paul Green</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
<table class="table table-bordered table-custom table-striped ">
                  
                  <tbody>
                    <tr>
                      <td>Gym</td>
                      <td>8:00am - 10:00am</td>
                      <td>John Doe</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Meditation</td>
                      <td>10:00am - 10:30am</td>
                      <td>James Holmes</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Weight Lifting</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Ben Smith</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Crossfit</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Craig Peters</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobics</td>
                      <td>5:00pm - 5:30pm</td>
                      <td>Paul Green</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="sunday" role="tabpanel" aria-labelledby="sunday-tab">
<table class="table table-bordered table-custom table-striped ">
                  
                  <tbody>
                    <tr>
                      <td>Gym</td>
                      <td>8:00am - 10:00am</td>
                      <td>John Doe</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Meditation</td>
                      <td>10:00am - 10:30am</td>
                      <td>James Holmes</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Weight Lifting</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Ben Smith</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Crossfit</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Craig Peters</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobics</td>
                      <td>5:00pm - 5:30pm</td>
                      <td>Paul Green</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="site-section" id="trainer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">Trainers</h2>
            <p>At BAAZI GYM, our trainers are more than instructors — they are motivators, mentors, and your biggest supporters. Each of our certified professionals brings unique expertise in fitness, health, and transformation.</p>
          </div>
        </div>
        <div class="row large-gutters">
          <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0">
            <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-5">
            <h3>James Holmes</h3>
            <p class="mb-4 opacity-7">Aerobatics Trainer</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum voluptatem, dignissimos dolorem porro aliquid veritatis!</p>
          </div>
          <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0 mt-5">
            <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-5">
            <h3>Kelly Green</h3>
            <p class="mb-4 opacity-7">Aerobatics Trainer</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum voluptatem,
              dignissimos dolorem porro aliquid veritatis!</p>
          </div>
          <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0">
            <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-5">
            <h3>Ben Smith</h3>
            <p class="mb-4 opacity-7">Aerobatics Trainer</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum voluptatem,
              dignissimos dolorem porro aliquid veritatis!</p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">OUR RULES</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
              voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias
              blanditiis consequuntur
              sunt nisi.</p>
          </div>
        </div>

      </div>

      

    <div class="site-section bg-dark" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">



            <h2 class="section-title mb-3">Contact Us</h2>
            <p class="mb-5">Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam
              temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>

            <form method="post" data-aos="fade">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="10"
                    placeholder="Write your message here."></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">

                  <input type="submit" class="btn btn-warning py-3 px-5 btn-block" value="Send Message">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>



    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About BAAZI GYM</h3>
            <p>BAAZI GYM is more than just a place to work out — it's a community built around strength, motivation, and transformation. Our mission is to help you achieve your fitness goals with professional guidance, modern equipment, and a supportive environment. Whether you're a beginner or a seasoned athlete, BAAZI GYM welcomes you to push your limits and become your best self.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#" class=" text-warning ">Home</a></li>
              <li><a href="#" class=" text-warning ">Meditation</a></li>
              <li><a href="#" class=" text-warning ">Gym</a></li>
              <li><a href="#"class=" text-warning ">Aerobatics</a></li>
            </ul> 
          </div>

          <div class="col-md-4">
        
          
            <form action="#" class="cta">
              <div class="d-flex mb-5">
              <a href="./login.php" class="nav-link">
  <span class="rounded border border-light fi fi-bs-entrance">Login</span>
  
</a>
              </div>
            </form>
          </div>

        </div>

        

        </div>
      </div>
    </footer>



  </div>

  <!-- BMI Script -->
<script>
function calculateBMI() {
  const isMetric = document.getElementById('metric').checked;
  let bmi = null;

  if (isMetric) {
    const weight = parseFloat(document.getElementById('kg').value);
    const height = parseFloat(document.getElementById('cm').value) / 100;
    if (weight > 0 && height > 0) {
      bmi = weight / (height * height);
    }
  } else {
    const weight = parseFloat(document.getElementById('lbs').value);
    const feet = parseFloat(document.getElementById('feet').value);
    const inches = parseFloat(document.getElementById('inches').value);
    const height = feet * 12 + inches;
    if (weight > 0 && height > 0) {
      bmi = (weight * 703) / (height * height);
    }
  }

  if (bmi) {
    const result = document.getElementById('bmi-value');
    const category = document.getElementById('bmi-category');

    result.textContent = bmi.toFixed(1);

    if (bmi < 18.5) {
      category.textContent = "Underweight 🟡";
      category.style.color = '#ffc107';
    } else if (bmi < 25) {
      category.textContent = "Normal Weight 🟢";
      category.style.color = '#28a745';
    } else if (bmi < 30) {
      category.textContent = "Overweight 🟠";
      category.style.color = '#fd7e14';
    } else {
      category.textContent = "Obese 🔴";
      category.style.color = '#dc3545';
    }
  } else {
    alert("Please enter valid measurements");
  }
}

// Toggle Inputs Between Units
document.querySelectorAll('input[name="units"]').forEach((radio) => {
  radio.addEventListener('change', (e) => {
    const isMetric = e.target.id === 'metric';
    document.getElementById('metric-inputs').style.display = isMetric ? 'block' : 'none';
    document.getElementById('imperial-inputs').style.display = isMetric ? 'none' : 'block';
  });
});
</script>
  <!-- .site-wrap -->

  <script src="./theme/js/jquery-3.3.1.min.js"></script>
  <script src="./theme/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="./theme/js/jquery-ui.js"></script>
  <script src="./theme/js/popper.min.js"></script>
  <script src="./theme/js/bootstrap.min.js"></script>
  <script src="./theme/js/owl.carousel.min.js"></script>
  <script src="./theme/js/jquery.stellar.min.js"></script>
  <script src="./theme/js/jquery.countdown.min.js"></script>
  <script src="./theme/js/bootstrap-datepicker.min.js"></script>
  <script src="./theme/js/jquery.easing.1.3.js"></script>
  <script src="./theme/js/aos.js"></script>
  <script src="./theme/js/jquery.fancybox.min.js"></script>
  <script src="./theme/js/jquery.sticky.js"></script>
  <script src="./theme/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="./theme/js/main.js"></script>

</body>

</html>


