<div class="container" id="admin">

					<h1 class="title"><span>Leave request</span></h1>		
	
<div class="datagrid">
	<table class="table table-striped">
								<thead>	<tr><th>Emp_ID</th><th>Employees Name</th><th>Position</th><th>Salary</th><th>Leave to apply</th><th>Reason</th><th>From</th><th>To</th><th>Date request</th><th>Satus</th></tr>
	</thead>


								<tbody>
								<?php

	$ctr = 0;
	foreach($leave as $key){
	$oddoreven = (($ctr++)%2) ? "even" : "info";
		$button = ($key['status']==0) ?  "<span class='label label-important'>Pending</span>": "<span class='label label-success'>-</span>";
		echo "<tr class=".$oddoreven."><td>".$key['emp_id']."</td><td>".$key['lastname'].",".$key['firstname']." ".$key['mid_name']."</td><td>".$key['job_name']."</td><td>".$key['salary']."</td><td>".$key['leave_apply']."</td><td><a href='".base_url()."leave/view/".$key['emp_id']."/".$key['id']."'>View</a></td><td>".$key['fr']."</td><td>".$key['tod']."</td><td>".$key['date']."</td><td>".$button."</td></tr>";
	}
	
	?>
								</tbody>
								</table>

</div>
	
	
</div>