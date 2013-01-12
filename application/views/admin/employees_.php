    

<div class="container">
<ul class="custom-nav nav nav-tabs nav-tabs-google pull-left" id="btabs">
	<li class="active"><a href="#home" data-toggle="tab">Employees</a></li>
</ul>
					
						<form method="POST" action="<?=base_url()."employees";?>" class="form-search pull-right" style="margin-bottom:10px">
					    <input type="text" placeholder="Search Employees Name"  class="input-large search-query" name="query">
					    <button type="submit" name="searchEmp" class="btn btn-success">Search</button>
					    </form>
					    <br class="clear" />
							<?=isset($success) ? "<p class='add_success'>".$success."</p>" : null;?>
					<div class="datagrid">
					
							<table class="table">
								<thead><tr><th>Emp ID</th><th>Employee Name</th><th>Department</th><th>Position</th><th>Contact</th><th>Hire Date</th><th>Action</th></tr></thead>


								<tbody>
								<?php
								$alt = 0;
								foreach($emp as $key){
								$oddoreven = (($ctr++)%2) ? "alt" : "info";
								$name = $key['firstname']." ".$key['mid_name']." ".$key['lastname'];
								?>
								<tr class=<?=$oddoreven;?>><td><?=$key['id'];?></td>
							<td><?=$name;?></td>
								
								<td><?=$key['dep_name'];?></td><td><?=$key['job_name'];?></td><td><?=$key['contact'];?></td><td><?=$key['hiredate'];?></td>
								

								<td><a href="<?=base_url()."employees/view/".$key['id']?>" class="btn btn-small btn-mini btn-success" title="View Or Modify" id="modify"><i class="icon-th-list icon-white"></i></a>
												<!--<a href="<?=base_url()."employees/modify/".$key['id']; ?>" class="btn btn-small btn-mini btn-warning" title="Modify"><i class="icon-edit icon-white"></i></a>-->
												<a href="<?=base_url()."employees/delete/".$key['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete <?php echo $name; ?>')" class="btn btn-small btn-mini btn-danger"><i class="icon-trash icon-white"></i></a></td>
											
								</tr>
								<?}?>
								</tbody>
								</table>
							</div>

						

</div>