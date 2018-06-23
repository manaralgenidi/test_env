  <!--========================================================
                            CONTENT
  =========================================================-->
<main>        

  <section class="well well4">
	
	<div class="container center991">
		<h2 class="help-box">
			Add Note
		</h2>
	  
		<!-- Add Department Form-->
		<div class="box">

			<div>
				<div>
		            
					<!----CREATION FORM STARTS---->
					<div style="padding: 5px">
		                <div>
		                    <?php echo form_open('admin/addnote/create/');?>
		                        <div class="padded">
		                            
		                            <label class="control-label">Add New Note 
										<input type="text" required name="note"/>										
									</label>
									
									
									
		                        </div>
		                        <div class="form-actions">
								<center>
		                            <button type="submit" class="btn btn-blue">Add new Note</button>
		                        </center>
								</div>
		                    <?php echo form_close();?>                
		                </div>                
					</div>
					<!----CREATION FORM ENDS--->
		            
				</div>
			</div>
		</div>
		  
		  
	</div> 

  </section>  
  

</main>