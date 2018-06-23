		<!-- CSS files-->
        <link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/search.css">
		<link href="css/external.css" media="screen" rel="stylesheet" />
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
	
		<!-- Javascript files-->
	    <script src="js/jquery.js"></script>
	    <script src="js/jquery-migrate-1.2.1.min.js"></script>
	    <script src="js/rd-smoothscroll.min.js"></script>
		<script src='js/device.min.js'></script>
		<script src="js/jquery-1.12.4.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		
	
        
        <!-- LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS-->
        <?php
		$system_name	=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
		$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
		$language	=	$this->db->get_where('settings' , array('type'=>'language'))->row()->description;
		?>