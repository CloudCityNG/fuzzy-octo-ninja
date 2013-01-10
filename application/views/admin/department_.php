
<div class="container" >

					<h1 class="title">Departments and Positions</h1>
					<form action="<?=base_url()."employees/add";?>" method="POST" onsubmit="return validate();">
					<div class="thebox">
					<?=(isset($successremove)) ? $successremove : null;?>
					<div class="g-button-group tdepcon" id="dep-c" >
									  <a class="g-button dropdown-toggle blue department"  data-toggle="dropdown" href="#">
											<span id="tdep" title="Select Department"><?=$current[0]['dep_name'];?></span> <span class="caret"></span>
						
									  </a>
									  <ul class="dropdown-menu">
										<?php
							
										
										foreach($gdep as $key){
										echo "<li><a href='".base_url()."depandpos/department/view/".$key['id']."' class='slectdep' id='dp_".$key['id']."' title='".$key['dep_name']."'>".$key['dep_name']."</a></li>";
										}
										
										
										?>
									  </ul>
								
									</div>
									<br class="clear" />

									<select id="selectDep" class="select btn-info">
									  	<option value=""><?=$current[0]['dep_name'];?></option>
									  	<?php
										foreach($gdep as $key){
										echo "<option value=".$key['id'].">".$key['dep_name']."</option>";
										}
										
										?>
										
							
									</select>
					<h1 class="ttle">Positions</h1>
					<div class="datagrid left" style="margin-top:10px;width:400px">
					<table class="table" width="100%" cellspacing="0" id="deptbl">
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
				
					<br class="clear" />
					</div>

</div>