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
    <li class="active">Add <span class="divider">/</span> <?=ucfirst($formenu);?></li>
 </ul>	
 <ul class="custom-nav nav nav-tabs nav-tabs-google"></ul>
			<ul id="multi-step">


				<li class="active"><a href="#"><span class="badge badge-success">1</span><br /> <strong>Select Department</strong></a></li>
				<li class="active"><a href="#"><span class="badge badge-success">2</span><br /> <strong>Basic Information</strong></a></li>
				<li class="active"><a href="#"><span class="badge badge-success">3</span><br /> <strong>Benefits Accounts</strong></a></li>
				<li class="<?=($formenu=='user-accounts') ? 'active' : null;?>"><a href="#"><span class="badge <?=($formenu=='user-accounts') ? 'badge-success' : null;?>">4</span><br /> <strong>User Accounts</strong></a></li>
			</ul>
<ul class="custom-nav nav nav-tabs nav-tabs-google" id="btabs">
	<li class="active"><h4>Benefits</h4></li>
</ul>
			<script type="text/javascript">
				$(document).ready(function(){
						$('#dp_error').hide()
						$('#selectDep').bind('click',function(){
								var id = $(this).val();

								if(id=="" || id==null){
										$('#dp_error').show();
									}else{

										$.post('<?=base_url()."employees/add";?>',{dep:true,id:id},function(data){
											$('#dept').val(id);
										$('#tjob').html(data);
									
										});
									}
								
							//$('#tjo').html('Select Job position');
							//$('#tjob').html(data);
							});

						$('#tjob').bind('click',function(){
							var id = $(this).val();

							$.post('<?=base_url()."employees/add";?>',{pos:true,id:id},function(data){
										$('#sal').val(data);
									
							});
						})
					

				});
			</script>
			<div class="alert alert-error" id="dp_error"><p>Please select Department</p></div>
			<form action="<?=base_url()."employees/user_account";?>" method="POST" onSubmit="return validate_benefits();">
				<table class="table">
					<tr><td>SSS Number</td> <td><input type="text"  value="" autocomplete="off" name="sss" id="sss"></td></tr>
					<tr><td>Philhealth Number</td> <td><input type="text" class="inp-search" value="" autocomplete="off" name="philhealth" id="philhealth"></td></tr>
					<tr><td>Pagibig Number</td> <td><input type="text" class="inp-search" value="" autocomplete="off" name="pagibig" id="pagibig"></td></tr>
					<tr><td>TIN Number</td> <td><input type="text" class="inp-search" value="" autocomplete="off" name="tin" id="tin"></td></tr>
				</table>
				
										
				<button type="submit" class="btn btn-success" name="select-department">Next</button>
			</form>



							

</div>

<!--


					<form action="<?=base_url()."employees/add";?>" method="POST" onsubmit="return validate();">
						

					<div class="thebox">
					<?=isset($success) ? "<p class='add_success'>".$success."</p>" : null;?>
					<h1 class="title2"><span>All fields are required</span></h1>
						

						<table style="margin:0" id="tbl-emp">
							
									</td><td><p>Salary <br /><div class="g-button-group"><input type="text" name="sal" id="sal" /></div></p></td></tr>
										</table>
										<table class="tbl-inpt">
											<tr>
												<td>Lastname <br /><br /><div class="g-button-group"><input type="text" onkeyup="genUname(this.value)" autocomplete="off" class="inp-search" id="lname" name="lname"></div></td>
												<td>Firstname<br /><br /><input type="text" autocomplete="off" class="inp-search"  id ="fname" name="fname"></td>
												<td>Middle Name<br /><br /><input type="text" autocomplete="off" class="inp-search" id="mname" name="mname"></td>
											</tr>
											<tr>
												<td> Birth date<br /><br />
													<input type="text" name="bday" id="bday" class="inp-search " onChange="comp()"/>
												</td>
											
												<td>Age <br /><br /><input type="text" autocomplete="off" value="" style="width:30px" maxlength="2" name="age" id="age"></td>
												<td>
													Gender<br /><br />
													<select name="gender" class="dropdown">
																				<option selected="selected" value="">-</option>
																				<option value="Male">Male</option>
																				<option value="Female">Female</option>
													</select>
												</td>
												
											</tr>
											<tr><td colspan="3">Address <br /><br /><input type="text" id="address" name="address" style="width:100%"/></td></tr>
											<tr >
												<td>Religion <br /><br /><select id="relg" name="religion" class="dropdown">
													<option value="">Select Religion</option>
													<option value="Roman Catholic">Roman Catholic</option>
													<option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
													<option value="Christian">Christian</option>
													<option value="other">Other</option>
												
												</select></td>
											<td>Civil Status <br /><br />
													<select name="cv_stat" class="dropdown" id="gender">
																	<option selected="selected" value="">Select status</option>
																	<option value="Single">Single</option>
																	<option value="Married">Married</option>
																	<option value="Widowed">Widowed</option>
																	</select><br>
										
													
												</td>
												<td>Contact Number <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="cnumber" id="cnumber"></td>
											</tr>
										</table>
										<fieldset class="left">
										<legend>Benefits</legend>
										<ul id="bnfts">
										<li>SSS Number <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="sss" id="sss"></li>
										<li>PhilHealth Number <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="philhealth" id="philhealth"></li>
										<li>PAG-IBIG Number <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="pagibig" id="pagibig"></li>
										<li>TIN Number <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="tin" id="tin"></li>
										
										</ul>
										</fieldset>
										<fieldset class="left">
										<legend>Account</legend>
										<ul id="bnfts">
										<li>Username <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="regusername" id="regusername"></li>
										<li>Password <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="regpassword" id="regpassword"></li>
										
										</ul>
										</fieldset>
										<br class="clear" />
									
					</div>
					<div class="action-con">
											<input type="submit" value="Submit" name="addemp" class="g-button green" />
					</div>
					</form>

-->