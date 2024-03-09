<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Campaigns Display</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

      
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="news.html">News</a></li>
              <li class="active"><a href="display.php">Campaigns</a></li>
              <li><a href="get_started.html">Get Started</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">More</a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="testimonial.html">Testimonial</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li class="dropdown-submenu dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>My Campaigns</span></a>
                    <ul class="dropdown-menu">
                      <li><a href="Create.html">Create a campaign</a></li>
                      <li><a href="FAQ.html">FAQ</a></li>
                    </ul>
                  </li>
                  <li><a href="our community.html">Our Community</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </li>
              
              <li class="probootstra-cta-button last"><a href="donate.html" class="btn btn-primary">Donate</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <section class="probootstrap-hero probootstrap-hero-inner" style="background-image: url(img/hero_bg_bw_1.jpg)"  data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Campaigns <span>Together we can make a difference</span></h1>
              </div>
            </div>
          </div>
        </div>
      </section>
<div class="container mt-5">
    <h2>Campaigns</h2>

    <?php
    $host = "localhost"; // Change this to your database host
	$username = "root";   // Change this to your database username
	$password = "";       // Change this to your database password
	$database = "mydatabase"; // Change this to your database name

	// Create a connection to the database
	$connection = mysqli_connect($host, $username, $password, $database);

	// Check the connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
}

    // SQL query to retrieve campaigns
    $sql = "SELECT * FROM campaigns";
    $result = $connection->query($sql);

    // Check if there are rows in the result
    if ($result->num_rows > 0) {
        echo "<table class='table'>";
        echo "<thead><tr><th><th>Campaign ID</th></th><th>First Name</th><th>Last Name</th><th>Cause</th><th>Grace Period Upto</th><th>Goal($ Dollars)</th></tr></thead><tbody>";

        // Output data of each row
        // Output data of each row
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td><th>" . $row["id"] . "</th></td>";
			echo "<td>" . $row["first_name"] . "</td>";
			echo "<td>" . $row["last_name"] . "</td>";
			echo "<td>" . $row["campaign_cause"] . "</td>";
			echo "<td>" . $row["grace_period"] . "</td>";
			echo "<td>" . $row["urgency_years"] . "</td>";
			echo "<td><img src='" . $row["upload_images"] . "' alt='Campaign Image' style='max-width: 100px; max-height: 100px;'></td>";
			echo "<td>" . $row["description_id"] . "</td>";
			echo "</tr>";
		}


        echo "</tbody></table>";
    } else {
        echo "0 results";
    }

    // Close connection
    $connection->close();
    ?>

</div>
<footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4 probootstrap-animate">
              <div class="probootstrap-footer-widget">
                <h3>About Us</h3>
                <p>CHARITY is a dedicated community of individuals and supporters united by a shared passion for making the world a better place. We believe that every child deserves access to food, health, and education, regardless of their circumstances</p>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
           
            <div class="col-md-4 probootstrap-animate">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Tom Mboya Street, Opposite Time Towers 2nd floor, Nairobi</span></li>
                  <li><i class="icon-mail"></i><span>info@charity.com</span></li>
                  <li><i class="icon-phone2"></i><span>+254 756 7890</span></li>
                </ul>
                
              </div>
            </div>

            <div class="col-md-4 probootstrap-animate">
              <div class="probootstrap-footer-widget">
                <h3>Donation</h3>
                <p>Your generosity can change lives. At CHARITY, we provide a seamless way for you to make a direct impact on individuals and families facing overwhelming medical expenses. Your donation goes beyond financial support; it's a lifeline of hope and relief.</p>
                <p><a href="donate.html" class="btn btn-primary">Donate Now</a></p>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2023 <a href="https://charity.com/">Charity</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://charity.com/">charity.com</a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
