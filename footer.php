<style>
  body {
    background: #0b0f19;
    font-family: 'Poppins', sans-serif;
}

a:not(.btn):not(.badge):hover, a:not(.btn):not(.badge):focus, a:not(.btn):not(.badge):active {
  text-decoration: none;
  outline: none;
  color: #0087f7;
}
/* Logo */
.logo-icon {
    width: 35px;
    height: 35px;
    background: #0087f7;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    margin-right: 10px;
    font-weight: bold;
    color: #fff;
}

/* Divider */
.divider {
    border-color: rgba(255,255,255,0.1);
}

/* Section title */
.section-title {
    color: #aaa;
    font-size: 13px;
    letter-spacing: 1px;
}

/* TAG BUTTONS */
.calculator-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

/* Default tag */
.tag {
    text-decoration: none;
    color: #ccc;
    border: 1px solid rgba(255,255,255,0.2);
    padding: 6px 12px;
    font-size: 13px;
    border-radius: 4px;
    transition: 0.3s;
}

/* Hover effect */
.tag:hover {
    border-color: #0087f7;
    color: #0087f7;
}

/* Active (orange like your image) */
.tag.active {
    border-color: #0087f7;
    color: #0087f7;
    box-shadow: 0 0 6px rgba(255,106,0,0.4);
}
.footer {
    background: #0b0f19;
    padding: 50px 0;
    border-top: 1px solid rgba(255,255,255,0.1);
}

/* Titles */
.footer-title {
    color: #0087f7;
    font-size: 14px;
    margin-bottom: 15px;
}

/* Text */
.footer-text {
    color: #aaa;
    font-size: 13px;
}

/* Links */
.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 8px;
}

.footer-links a {
    text-decoration: none;
    color: #ccc;
    font-size: 13px;
    transition: 0.3s;
}

.footer-links a:hover {
    color: #0087f7;
}

/* Subscribe */
.subscribe-box input {
    background: #111827;
    border: none;
    color: #fff;
    font-size: 13px;
}

.subscribe-box input::placeholder {
    color: #777;
}

.btn-subscribe {
    background: #0087f7;
    color: #fff;
    border: none;
    font-size: 12px;
}

/* Social Icons */
.social-icons a {
    color: #ccc;
    margin-right: 10px;
    font-size: 18px;
}

.social-icons a:hover {
    color: #0087f7;
}

/* Bottom */
.footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.1);
}

.footer-bottom-links a {
    margin-right: 15px;
    color: #aaa;
    text-decoration: none;
    font-size: 12px;
}

.footer-bottom-links a:hover {
    color: #0087f7;
}

/* Button */
.btn-built {
    background: #0087f7;
    color: #fff;
    font-size: 12px;
    padding: 5px 10px;
}
</style>
<div class="container-fluid m-5 text-center" style="background-color: navy-blue;">
     <!-- LABEL -->
  <h6 class="footer-title">● ALL CALCULATORS</h6>

  <!-- BUTTON GROUP -->
  <div class="calculator-tags text-center ">

  <!-- Finance -->
  <a href="emi-calculator.php" class="tag">EMI Calculator</a>
  <a href="bmi-calculator.php" class="tag">BMI Calculator</a>
  <a href="age-calculator.php" class="tag">Age Calculator</a>
  <a href="gst-calculator.php" class="tag">GST Calculator</a>
  <a href="salary-calculator.php" class="tag">Salary Calculator</a>

  <a href="compound-interest.php" class="tag">Compound Interest</a>
  <a href="simple-interest.php" class="tag">Simple Interest</a>
  <a href="fd-calculator.php" class="tag">FD Calculator</a>
  <a href="rd-calculator.php" class="tag">RD Calculator</a>
  <a href="percentage-calculator.php" class="tag">Percentage</a>

  <!-- Health -->
  <a href="calorie-calculator.php" class="tag">Calorie Calculator</a>
  <a href="water-intake-calculator.php" class="tag">Water Intake</a>

  <!-- Time -->
  <a href="date-difference.php" class="tag">Date Difference</a>
  <a href="workdays-calculator.php" class="tag">Work Days</a>
  <a href="time-duration-calculator.php" class="tag">Time Duration</a>

  <!-- Utility -->
  <a href="discount-calculator.php" class="tag">Discount Calculator</a>
  <a href="fuel-cost-calculator.php" class="tag">Fuel Cost</a>
  <a href="unit-converter.php" class="tag">Unit Converter</a>

  <!-- Student -->
  <a href="student-percentage.php" class="tag">Student %</a>
  <a href="grade-calculator.php" class="tag">Grade Calculator</a>
  <a href="gpa-calculator.php" class="tag">GPA Calculator</a>
  <a href="attendance-calculator.php" class="tag">Attendance</a>

</div>
</div>
<footer class="footer">
<div class="container">

    <div class="row gy-4">

        <!-- COLUMN 1 : LOGO + QUOTE -->
        <div class="col-lg-3 col-md-6">

            <img src="img/logo-dark.png"
                 alt="Logo"
                 style="width:180px; max-width:100%;">

            <p class="footer-text mt-3">
                Every number, every formula — free, fast,
                and always accurate.
            </p>

        </div>

        <!-- COLUMN 2 : QUICK LINKS -->
        <div class="col-lg-2 col-md-6">
            <h6 class="footer-title">COMPANY</h6>

            <ul class="footer-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            
        </div>

        <!-- COLUMN 3 : COMPANY -->
        <div class="col-lg-2 col-md-6">
            <h6 class="footer-title">QUICK LINKS</h6>

            <ul class="footer-links">
                <li><a href="gst-calculator.php">GST Calculator</a></li>
                <li><a href="emi-calculator.php">EMI Calculator</a></li>
                <li><a href="age-calculator.php">Age Calculator</a></li>
                <li><a href="salary-calculator.php">Salary Calculator</a></li>
            </ul>
        </div>

        <!-- COLUMN 4 : SUPPORT -->
        <div class="col-lg-2 col-md-6">
            <h6 class="footer-title">MOST SEARCHED</h6>

            <ul class="footer-links">
    <li><a href="bmi-calculator.php">BMI Calculator</a></li>
    <li><a href="percentage-calculator.php">Percentage Calculator</a></li>
    <li><a href="discount-calculator.php">Discount Calculator</a></li>
    <li><a href="unit-converter.php">Unit Converter</a></li>
</ul>
        </div>

        <!-- COLUMN 5 : SUBSCRIBE + SOCIAL -->
        <div class="col-lg-3 col-md-12">

            <h6 class="footer-title">SUBSCRIBE</h6>

            <p class="footer-text">
                Get updates when we launch new calculators.
            </p>

            <div class="subscribe-box d-flex mb-3">
                <input type="email"
                       placeholder="Enter Email"
                       class="form-control">

                <button class="btn btn-subscribe">
                    Send
                </button>
            </div>

            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>

    </div>

    <!-- BOTTOM BAR -->
    <div class="footer-bottom mt-4 pt-3 d-flex flex-wrap justify-content-between align-items-center">
      <p class="mb-0">© 2026 CalcSpeed — All rights reserved</p>

      <div class="footer-bottom-links">
        <a href="privacy-policy.php">Privacy Policy</a>
        <a href="terms-conditions.php">Terms and Conditions</a>
      </div>

      <button class="btn btn-built">100% FREE</button>
    </div>

  </div>
</footer>