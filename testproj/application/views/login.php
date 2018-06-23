<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<link rel="icon" href="uploads/favicon.ico" type="image/x-icon">
		<?php include 'includes.php';?>
        <title> Login | <?php echo $system_title;?></title>
    </head>
	<body>
		
		
		
		<div class="container top-sect">
	        <div class="navbar-header">
				<h1 class="navbar-brand"><?php echo $system_title;?></h1>
				
	        </div>

		</div>

        <div class="container" style="margin-top:50px;margin-bottom:90px">
		<div class="span4 offset4">

                <div class="padded">
				
                   
					
                    <div class="login box" style="margin-top: 80px;margin-bottom: 30px;">
					<!--------FLASH MESSAGE start--->
			        
					<?php if($this->session->flashdata('flash_message') != ""):?>
			        <div class="container-login-err padded">
			        	<div class="alert-login-err">
			              <button type="button" class="close" data-dismiss="alert">x</button>
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
                        <div class="box-header">
                            <span>Login</span>
                        </div>
                        <div class="box-content padded" style="margin-right: 30px;margin-left: 30px;margin-top: 30px;margin-bottom: 30px;">
                        
                        	<?php echo form_open('login' , array('class' => 'separate-sections'));?>
                                <div class="input-prepend">
                                    <input name="name" type="text" placeholder="Name">
                                </div>
                                <div class="input-prepend">
                                    <input name="password" type="password" placeholder="<Password">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-blue btn-block" >
                                        Login
                                    </button>
                                </div>
								
                            <?php echo form_close();?>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
		<?php include 'footer.php';?>
        
	</body>
</html>