<div class="container" >

	
					<h1 class="title">Departments and Positions</h1>
					
				<?=(isset($errordel)) ? $errordel : null;?>
				<?=(isset($addpstsuccess)) ? $addpstsuccess : null;?>
			
			<div class="datagrid">

				<table class="table table-condensed">
					<thead>
					<tr>
						<th>Department Name</th>
						<th>Positions</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
						$alt = 1;
						for ($x=0; $x<=count ($deps)-1; $x++){
						if (is_int($alt/2)){
							$class = "class='success'";
						} else {
							$class= "";
						}
					?>
							<tr <?php echo $class; ?>>
								<td style="width:130px"><p id='forMod_<?=$deps[$x]['id'];?>'><?php echo $deps[$x]['dep_name']; ?></p></td>
								<td><a href="<?=base_url()."depandpos/department/view/".$deps[$x]['id'];?>">View</a></td>
								<td class="act" style="text-align:right">
									<!--<a href="<?=base_url()."admin/depandpos/view/".$deps[$x]['id']; ?>" class="g-button blue mini">View</a>//-->
									<a href="<?=base_url()."admin/depandpos/modify/".$deps[$x]['id'];?>" onClick="to_modf('<?=$deps[$x]['dep_name'];?>',<?=$deps[$x]['id'];?>)" class="btn btn-success btn-mini" title="Modify" data-reveal-id='myModal2' id="to_modf/<?=$deps[$x]['id'];?>"><i class="icon-edit icon-white"></i></a>
									<a onclick="return confirm('Are you sure you want to delete this Department?')" href="<?=base_url()."depandpos/delete/".$deps[$x]['id'];?>" class="btn btn-danger btn-mini" class="Delete" title="Delete"><i class="icon-trash icon-white"></i></a>
								</td>
							</tr>
					<?php $alt++; } ?>
					</tbody>
				</table>
			</div>
			
		
		
	
</div>