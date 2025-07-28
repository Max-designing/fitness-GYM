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
           
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                <table style="width: 100%; border-collapse: collapse; margin: 20px auto; background: #fff;">
    <tr>
      <th style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #333; color: #fff;">Day</th>
      <th style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #333; color: #fff;">Cardio</th>
      <th style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #333; color: #fff;">Boxing / Self-Defence</th>
      <th style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #333; color: #fff;">Sauna</th>
      <th style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #333; color: #fff;">Women's Hours</th>
      <th style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #333; color: #fff;">Men's Hours</th>
    </tr>
    <tr>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">Saturday</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #d1e7dd;">6:00am, 2:00pm, 8:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">-</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">-</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">8:00am – 9:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">5:00am – 10:30pm</td>
    </tr>
    <tr>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">Sunday</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">-</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #ffeeba;">5:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #f8d7da;">Available</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">8:00am – 9:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">5:00am – 10:30pm</td>
    </tr>
    <tr>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">Monday</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #d1e7dd;">6:00am, 2:00pm, 8:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #ffeeba;">5:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">-</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">8:00am – 9:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">5:00am – 10:30pm</td>
    </tr>
    <tr>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">Tuesday</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #d1e7dd;">6:00am, 2:00pm, 8:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #ffeeba;">5:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">-</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">8:00am – 9:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">5:00am – 10:30pm</td>
    </tr>
    <tr>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">Wednesday</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #d1e7dd;">6:00am, 2:00pm, 8:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">-</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">-</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">8:00am – 9:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">5:00am – 10:30pm</td>
    </tr>
    <tr>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">Thursday</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">-</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">-</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; background-color: #f8d7da;">Available</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">8:00am – 9:00pm</td>
      <td style="padding: 10px; border: 1px solid #ccc; text-align: center; font-size: 12px; color: #555;">5:00am – 10:30pm</td>
    </tr>
  </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    


    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">OUR RULES</h2>
            <h2>✅ General Conduct</h2>
  <ul>
    <li>Respect others – No loud grunting, yelling, or offensive language.</li>
    <li>Use equipment properly – Follow instructions and gym guidelines.</li>
    <li>Return equipment – Re-rack weights and clean up after yourself.</li>
    <li>Limit time on machines – Especially during peak hours.</li>
    <li>No loitering – Don’t rest excessively on equipment.</li>
  </ul>

  <h2>🧼 Hygiene and Cleanliness</h2>
  <ul>
    <li>Wipe down equipment after use.</li>
    <li>Bring a clean workout towel.</li>
    <li>Wear proper gym attire and closed-toe shoes.</li>
    <li>Avoid strong perfumes or colognes.</li>
  </ul>

  <h2>🔐 Safety</h2>
  <ul>
    <li>Use a spotter for heavy lifts.</li>
    <li>No dropping or slamming weights.</li>
    <li>Report broken equipment to staff.</li>
    <li>Stay in designated workout areas.</li>
  </ul>

  <h2>🕒 Membership & Access</h2>
  <ul>
    <li>Bring your membership ID or card.</li>
    <li>Follow gym hours strictly.</li>
    <li>All guests must be registered at the front desk.</li>
  </ul>

  <h2>🚫 Prohibited</h2>
  <ul>
    <li>No food or glass bottles in the gym.</li>
    <li>No filming or photography without permission.</li>
    <li>No smoking, alcohol, or drug use.</li>
  </ul>

  <h2>👮 Staff Authority</h2>
  <ul>
    <li>Follow staff instructions at all times.</li>
    <li>Non-compliance can result in membership suspension or cancellation.</li>
  </ul>
          </div>
        </div>

      </div>

      

    



      <footer class="footer-section">
  <div class="container">
    <div class="row">
      
      <!-- About Section -->
      <div class="col-md-4">
        <h3>About BAAZI GYM</h3>
        <p>BAAZI GYM is more than just a place to work out — it's a community built around strength, motivation, and transformation. Our mission is to help you achieve your fitness goals with professional guidance, modern equipment, and a supportive environment. Whether you're a beginner or a seasoned athlete, BAAZI GYM welcomes you to push your limits and become your best self.</p>
      </div>

      <!-- Links Section -->
      <div class="col-md-3 ml-auto">
        <h3>Links</h3>
        <ul class="list-unstyled footer-links">
          <li><a href="#" class="text-warning">Home</a></li>
          <li><a href="#" class="text-warning">Meditation</a></li>
          <li><a href="#" class="text-warning">Gym</a></li>
          <li><a href="#" class="text-warning">Aerobatics</a></li>
        </ul>
      </div>

      <!-- Login & Contact -->
      <div class="col-md-4">
        <h3>Contact Us</h3>
        <ul class="list-unstyled footer-links">
          <li>
            <a href="https://wa.me/252633048757" target="_blank" class="text-success">
              <i class="fa fa-whatsapp"></i> WhatsApp
            </a>
          </li>
          <li>
            <a href="https://facebook.com/baazigym" target="_blank" class="text-primary-dark">
              <i class="fa fa-facebook"></i> Facebook
            </a>
          </li>
          <li>
            <a href="https://instagram.com/baazigym" target="_blank" class="text-danger">
              <i class="fa fa-instagram"></i> Instagram
            </a>
          </li>
          <li>
            <a href="mailto:info@baazigym.com" class="text-dark">
              <i class="fa fa-envelope"></i> Email Us
            </a>
          </li>
        </ul>

        <!-- Login Button -->
        <form action="#" class="cta mt-4">
          <div class="d-flex">
            <a href="./login.php" class="nav-link">
              <span class="rounded border border-light fi fi-bs-entrance">Login</span>
            </a>
          </div>
        </form>
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


