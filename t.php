<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.mixin.one/transfers");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"amount\":\"10\",\"asset_id\":\"43d61dcd-e413-450d-80b8-101d5e903357\",\"opponent_id\":\"a465ffdb-4441-4cb9-8b45-00cf79dfbc46\",\"memo\":\"hello\",\"pin\":\"EuqzITL12ooj2Q2M3GVejJO/kzeyg2hxDZ2N6ByXidqoSY+MDiqL0DdprzU9RFojLWo0Sdziwz7zNYU8clPa9kDtTR5QQV4a1TE5bp99LpgSR+glDsVVr2dVkbOOOeCL01dpK/nuM1rc5YQ/uqdVd2mYweP7+AUfVUH6HihEISk=\",\"trace_id\":\"7c67e8e8-b142-488b-80a3-61d4d29c90bf\"}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Content-Type: application/json";
$headers[] = "Authorization: Bearer eyJhbGciOiJSUzUxMiIsInR5cCI6IkpXVCJ9.eyJhaWQiOiIzMmIzZjE2MS1jMzQ4LTQwOWItYTg1Yy03YWRkMzBjMDE2NDciLCJleHAiOjE1NzY4OTQ0NDksImlhdCI6MTU0NTM1ODQ0OSwiaXNzIjoiMGEzZTM3Y2UtZTQ4MC00YzZiLWEwYmQtZTE4NmRmYmZiMzk3In0.U08czaTDvceparzZnzW2gTgW-Yj-u34FpDFMFgwRrolm6yUMhmGRGjpFijBOmQGYMZBZq2YOS5pQMUg86p729e6dLHR0gE0kLEKzjb5C0B34_3hPPB0jxGvmO1Ohwb9sMQpnFoW6O1ZvA-4Es3b3HPPDhH74eGeDQPstLXvqAr4";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$data=$result;
extract(json_decode($data, true));
print_r($data);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>

<!DOCTYPE html>
<html lang="en">

  <head
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BlockGrants</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">BlockGrants</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">what's new</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">donate them</a>
            </li>-->
        
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signup.html">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Thanks for donation!</div>
           <div class="intro-lead-in"><h3>User id</h3></div>
         
          <div class="intro-lead-in"><h3>Amount transfered</h3></div>
         

        
          
        </div>
      </div>
    </header>

    

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; www.grantblocks.com</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
