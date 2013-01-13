<div class="container">
<ul class="custom-nav nav nav-tabs nav-tabs-google pull-left" id="btabs">
	<li class="active"><a href="#home" data-toggle="tab">Employees</a></li>
</ul>
					
						<form method="POST" action="<?=base_url()."employees";?>" class="form-search pull-right" style="margin-bottom:10px">
					    <input type="text" placeholder="Search Employees Name"  class="input-large search-query" name="query">
					    <button type="submit" name="searchEmp" class="btn btn-success">Search</button>
</form>


 <ul class="clear custom-nav nav nav-tabs nav-tabs-google"></ul>
<ul class="breadcrumb custom-nav">
    <li><a href="<?=base_url()."admin/";?>">Dashboard</a> <span class="divider">/</span></li>
    <li><a href="<?=base_url()."employees/";?>">Employees</a> <span class="divider">/</span></li>
    <li class="active">Add <span class="divider">/</span> Employee registration complete</li>
 </ul>	
 
<?=(isset($success)) ? "<div class='alert alert-success'><h4>Registration complete</h4>".$success."</div>": null;?>

<ul class="custom-nav nav nav-tabs nav-tabs-google">
	<li class="active"><a href="#home" data-toggle="tab">Basic information</a></li>
</ul>
<table class="table table-condensed basic">
	<tr><td>Department</td><td>:</td><td><?=$department;?></td></tr>
	<tr><td>Position</td><td>:</td><td><?=$position;?></td></tr>
	<tr><td>First Name</td><td>:</td><td><?=$firstname;?></td></tr>
	<tr><td>Middle Name</td><td>:</td><td><?=$mid_name;?></td></tr>
	<tr><td>Last Name</td><td>:</td><td><?=$lastname;?></td></tr>
	<tr><td>Contact Number</td><td>:</td><td><?=$contact;?></td></tr>
	<tr><td>Address</td><td>:</td><td><?=$address;?></td></tr>
	<tr><td>Birthdate</td><td>:</td><td><?=$bday;?></td></tr>
	<tr><td>Sex</td><td>:</td><td><?=$sex;?></td></tr>
	<tr><td>Religion</td><td>:</td><td><?=$religion;?></td></tr>
	<tr><td>Status</td><td>:</td><td><?=$civil_status;?></td></tr>
</table>		

<div class="pull-left to-pull">
<ul class="custom-nav nav nav-tabs nav-tabs-google">
	<li class="active"><a href="#home" data-toggle="tab">Benefits Account</a></li>
</ul>
<table class="table table-condensed">
	<tr><td>SSS Number</td><td>:</td><td><?=$sss;?></td></tr>
	<tr><td>PAGIBIG Number</td><td>:</td><td><?=$philhealth;?></td></tr>
	<tr><td>PHILHEALTH Number</td><td>:</td><td><?=$philhealth;?></td></tr>
	<tr><td>TIN Number</td><td>:</td><td><?=$tin;?></td></tr>
	
</table>
</div>

<div class="pull-left to-pull">
<ul class="custom-nav nav nav-tabs nav-tabs-google">
	<li class="active"><a href="#home" data-toggle="tab">User accounts</a></li>
</ul>
<table class="table table-condensed basic">
	<tr><td>Username</td><td>:</td><td><?=$username;?></td></tr>
	<tr><td>Password</td><td>:</td><td><?=$password;?></td></tr>
	
	
</table>
</div>


</div>
