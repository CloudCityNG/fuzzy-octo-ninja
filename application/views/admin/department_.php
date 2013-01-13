
<div class="container" >

				<ul class="custom-nav nav nav-tabs nav-tabs-google" id="btabs">
	<li class="active"><a href="#home" data-toggle="tab">Departments and Positions</a></li>
</ul>
		
					<?=(isset($successremove)) ? $successremove : null;?>

					<ul class="nav nav-list pull-left" style="width:130px">
			 	   			<li class="nav-header">Departments</li>
			      
			                <?php
										
										foreach($gdep as $key){
											$id = $key['id'];
											$active = ($formenu==$id) ? 'active' : null;
			              				 echo "<li class=\"".$active."\"><a href=\"".base_url()."depandpos/department/view/".$key['id']."\">".$key['dep_name']."</a></li>\n";
									//	echo "<li><a href='".base_url()."depandpos/department/view/".$key['id']."' class='slectdep' id='dp_".$key['id']."' title='".$key['dep_name']."'>".$key['dep_name']."</a></li>";
										}
										
										
						?>
             		 </ul>

             		 <div class="pull-left" style="width:700px">
						<ul class="custom-nav nav nav-tabs nav-tabs-google" id="btabs">
							<li class="active"><a href="#home" data-toggle="tab">Positions</a></li>
						</ul>
					<div class="datagrid left" style="margin-top:10px;width:400px">
					<table class="table table-condensed" width="100%" cellspacing="0" id="deptbl">
						<thead>
						<tr>
							<th class="jtr">Positions</th>
							<th>Action</th>
						</tr>
						<?php
							foreach($jobs as $key){
							
							?>
							<tr><td class='jtr'><?=$key['job_name'];?></td>
							<td>
							<a href="<?=base_url()."depandpos/jobs/".$key['id'];?>" onClick="to_modf_pos('<?=$key['job_name'];?>',<?=$key['id'];?>)" class="to_modf g-button green mini no-text" title="Modify" data-reveal-id='myModal2' id="to_modf/<?=$key['id'];?>"><i class="icon-edit icon-white"></i></a>
							<a onclick="return confirm('Are you sure you want to delete this Position?')" href="<?=base_url()."depandpos/department/view/".$current_id."/remove/".$key['id'];?>" class="g-button red mini no-text" class="Delete" title="Delete"><i class="icon-trash icon-white"></i></a>
							</td></tr>
								<?php
								}
						?>
						</table>
					</div>
             		 </div>
				
					<br class="clear" />
				

</div>