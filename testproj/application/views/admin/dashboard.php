  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well1 well1_ins1">
		
            
        <div class="container center991">
		<p></p>
		<h2 class="help-box text-left">
          To Do List
        </h2>
		
		
		<p></p>

			<!----TABLE LISTING STARTS--->
			<div>
				
				<table width="100%" cellpadding="0" cellspacing="0" border="1">
					<thead>
						<tr style="text-align:left">
							<th><div></div></th>
							<th><div>Notes</div></th>
							<th><div>Done</div></th>
						</tr>
					</thead>
					<tbody>
						<?php $count = 1;foreach($notes as $row):?>
						<tr>
							<td><?php echo $count++;?></td>
							<td><?php echo $row['note'];?></td>
							<td><input type="checkbox" name="is_done" value="N" > </td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
			<!----TABLE LISTING ENDS--->
        </div>        
      </section>
      
      

    </main>