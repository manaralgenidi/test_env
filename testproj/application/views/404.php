<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="uploads/favicon.ico" type="image/x-icon">
    <title>404</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/search.css">

    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="uploads/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <?php
	include('header.php');
	?>
  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well4 sect-404">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
              <strong class="txt-clr-sec text-uppercase fw-heavy">
                <span>404</span>
                page
              </strong>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
              <p class="lead text-uppercase">
                Sorry!<br /> 
                Page not found
              </p>
              <p>
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
                <br /><br />
                Please try using our search box below to look for information on the website.
              </p>
            </div>
          </div>
        </div>
      </section>   
      

    </main>

	<?php
	include('footer.php');
	?>

  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->


  </body>
</html>
