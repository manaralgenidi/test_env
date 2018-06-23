<!--========================================================
                            HEADER
  =========================================================-->
    <header>  
      <div class="container top-sect">
        <div class="navbar-header">
          <h1 class="navbar-brand"><?php echo $system_title;?></h1>
        </div>
		
      </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container">   
        <nav class="navbar navbar-default navbar-static-top">            

            <div class="">  
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li class="<?php if($page_name == 'dashboard')echo 'active';?>">
					<a href="<?php echo base_url();?>index.php?admin/dashboard">Show notes</a>
				</li>
				<li class="<?php if($page_name == 'addnote')echo 'active';?>">
					<a href="<?php echo base_url();?>index.php?admin/addnote">Add Note</a>
                </li>
                <li><a href="<?php echo base_url();?>index.php?login/logout">Logout - <?php echo $this->session->userdata('user_name');?></a>
                </li>
				
              </ul>                           
            </div>
        </nav>
        </div>

      </div>  
    </header>