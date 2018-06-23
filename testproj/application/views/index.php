<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="uploads/favicon.ico" type="image/x-icon">
	<?php include 'includes.php';?>
	<title><?php echo $page_title;?> | <?php echo $system_name;?></title>

    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/google-map.css">
	<link 	rel="stylesheet" 
				href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css" 
				type="text/css" 
				media="all" />

  </head>
    
    
<body>
  <div class="page">
    <?php include $this->session->userdata('login_type').'/header.php';?>
    <div>
        <div class="container-fluid padded">
			<!--------FLASH MESSAGE start--->
			        
			<?php if($this->session->flashdata('flash_message') != ""):?>
			<div class="container-login-err padded">
				<div class="alert-login-err">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <?php echo $this->session->flashdata('flash_message');?>
				</div>
			</div>
			<?php endif;?>
			
			
			<?php if($this->session->flashdata('flash_message') != ""):?>
			<script>
				$(document).ready(function() {
					Growl.info({title:"<?php echo $this->session->flashdata('flash_message');?>",text:""})
				});
			</script>
			<?php endif;?>
			<!---------------------flash message end----------------------->
            <?php include $this->session->userdata('login_type').'/'.$page_name.'.php';?>
        </div>        
	<?php include 'footer.php';?>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>   
</body>
</html>