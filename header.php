<style>
   #mainMenu nav > ul > li > a {
   position: relative;
   font-family: "Poppins",sans-serif;
   padding: 10px 10px;
   text-transform: uppercase;
   font-size: 13px;
   font-weight: 600;
   letter-spacing: 0.6px;
   color: #000;
   border-radius: 0;
   border-width: 0;
   border-style: solid;
   border-color: transparent;
   transition: all .3s ease;
   line-height: normal;
   background-color: none;
   }
   #mainMenu nav > ul > li .dropdown-menu > li > a, #mainMenu nav > ul > li .dropdown-menu > li > span, #mainMenu nav > ul > li .dropdown-menu > li [class*="col-"] > ul > li > a {
   font-size: 13px;
   line-height: 14px;
   font-weight: 500;
   font-style: normal;
   color: #444;
   font-family: "Poppins",sans-serif;
   padding: 12px 20px 12px 18px;
   display: block;
   transition: .3s ease;
   }
   #header .header-inner #logo a > img, #header #header-wrap #logo a > img {
  vertical-align: inherit;
  transition: all .4s ease-in-out;
  height: 50px;
  width: auto;
  margin: 15px;
}
#mainMenu nav > ul > li {
  float: left;
  border: 0;
  transition: all .3s ease;
  margin-left: 0px;
  position: relative;
}
</style>
<!-- Header -->
<header id="header" data-fullwidth="true" class="dark submenu-light">
   <div class="header-inner">
      <div class="container">
         <!--Logo-->
         <div id="logo">
            <a href="index.php">
            <img class="logo-default" src="img/logo.png" alt="calcspeed">
            <img class="logo-dark" src="img/logo-dark.png" alt="calcspeed">
            </a>
         </div>
         <!--End: Logo-->
         <!-- Search -->
         <div id="search">
            <a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
            <form class="search-form" action="https://inspirothemes.com/calcspeed/search-results-page.html" method="get">
               <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
               <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
            </form>
         </div>
         <!-- end: search -->
         <!--Header Extras-->
         <div class="header-extras">
            <ul>
               <li class="d-none d-xl-block d-lg-block">
                  <a href="contact.php" class="btn btn-rounded btn-primary">Contact Us</a>
               </li>
            </ul>
         </div>
         <!--end: Header Extras-->
         <!--Navigation Resposnive Trigger-->
         <div id="mainMenu-trigger">
            <button class="lines-button x"> <span class="lines"></span> </button>
         </div>
         <!--end: Navigation Resposnive Trigger-->
         <!--Navigation-->
         <div id="mainMenu" class="menu-center light">
            <div class="container">
               <nav>
                  <ul>
                     <li><a href="index.php">Home</a></li>
                     <!-- Finance Calculators -->
                     <li class="dropdown">
                        <a href="#">Finance Calculators</a>
                        <ul class="dropdown-menu">
                           <li><a href="emi-calculator.php">EMI Calculator</a></li>
                           <li><a href="gst-calculator.php">GST Calculator</a></li>
                           <li><a href="currency-converter.php">Currency Converter</a></li>
                           <li><a href="salary-calculator.php">Salary Calculator</a></li>
                           <li><a href="compound-interest.php">Compound Interest Calculator</a></li>
                           <li><a href="simple-interest.php">Simple Interest Calculator</a></li>
                           <li><a href="fd-calculator.php">FD Calculator</a></li>
                           <li><a href="rd-calculator.php">RD Calculator</a></li>
                        </ul>
                     </li>
                      <!-- Utility Calculators -->
                     <li class="dropdown">
                        <a href="#">Business Calculators</a>
                        <ul class="dropdown-menu">
                           <li><a href="roi-calculator.php">ROI Calculator</a></li>
                           <li><a href="breakeven-calculator.php">Break-Even Calculator</a></li>
                           <li><a href="profit-margin-calculator.php">Profit Margin Calculator</a></li>
                           <li><a href="invoice-calculator.php">Invoice billing Calculator</a></li>
                           
                        </ul>
                     </li>
                      <!-- Utility Calculators -->
                     <li class="dropdown">
                        <a href="#">Discount Calculators</a>
                        <ul class="dropdown-menu">
                           <li><a href="phone-emi-cash.php">Phone EMI or CASH</a></li>
                           <li><a href="subscription-cost.php">Subscription Cost</a></li>
                           <li><a href="percentage-calculator.php">Percentage Calculator</a></li>
                           <li><a href="discount-calculator.php">Discount Calculator</a></li>

                           <li><a href="fuel-cost-calculator.php">Fuel Cost Calculator</a></li>
                           <li><a href="unit-converter.php">Unit Converter</a></li>
                        </ul>
                     </li>
                     <!-- Health Calculators -->
                     <li class="dropdown">
                        <a href="#">Health Calculators</a>
                        <ul class="dropdown-menu">
                           <li><a href="bmi-calculator.php">BMI Calculator</a></li>
                           <li><a href="calorie-calculator.php">Calorie Calculator</a></li>
                           <li><a href="water-intake-calculator.php">Water Intake Calculator</a></li>
                        </ul>
                     </li>
                     <!-- Time & Date -->
                     <li class="dropdown">
                        <a href="#">Time & Date</a>
                        <ul class="dropdown-menu">
                           <li><a href="date-calculator.php">Date Calculator</a></li>
                           <li><a href="age-calculator.php">Age Calculator</a></li>
                           <li><a href="date-difference.php">Date Difference Calculator</a></li>
                           <li><a href="workdays-calculator.php">Work Days Calculator</a></li>
                           <li><a href="time-duration-calculator.php">Time Duration Calculator</a></li>
                        </ul>
                     </li>
                    
                     <li class="dropdown">
                        <a href="#">Student Calculators</a>
                        <ul class="dropdown-menu">
                           <li><a href="student-percentage.php">Percentage Calculator</a></li>
                           <li><a href="grade-calculator.php">Grade Calculator</a></li>
                           <li><a href="gpa-calculator.php">GPA Calculator</a></li>
                           <li><a href="attendance-calculator.php">Attendance Calculator</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <!--end: Navigation-->
      </div>
   </div>
</header>
<!-- end: Header -->
