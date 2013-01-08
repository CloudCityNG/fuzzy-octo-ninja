
<div class="container" >
				<h1 class="title pull-left"><span>Employees</span></h1>
						<form method="POST" class="form-search pull-left" style="margin-top:9px;margin-left:30px">
					    <input type="text" placeholder="Search Employees Name"  class="input-large search-query" name="query">
					    <button type="submit" name="searchEmp" class="btn btn-success">Search</button>
					    </form>
					    <br  class="clear" />
				<div class="well">
					<?=isset($success) ? "<p class='add_success'>".$success."</p>" : null;?>
						<h2>Information</h2>
						<table style="margin:0" id="tbl-emp">
							<tr><td><p>Department<br />
									<div class="g-button-group tdepcon" id="dep-c" >
									  <a class="g-button  blue department"  href="#">
											<span id="tdep" title="Select Department"><?=$e_info['dep_name'];?></span> <span class="caret"></span>
						
									  </a>

									</div>
									</p>
									</td>
									<td><p>
									Job Position<br /><div class="g-button-group tdepcon" id="jobpos">
									  <a class="g-button d blue"  href="#">
											<span id="tjo"><?=$e_info['job_name'];?> </span> <span class="caret"></span>
									  </a>
		
									</div></p>
									</td><td><p>Salary <br /><div class="g-button-group"><input type="text" disabled="disabled" name="sal" id="sal" value="<?=$e_info['b_salary']." PHP";?>" /></div></p></td></tr>
										</table>
										<table class="tbl-inpt">
											<tr>
												<td>Lastname <br /><br /><input value="<?=$e_info['lastname'];?>" type="text" disabled="disabled" class="inp-search" id="lname" name="lname"></td>
												<td>Firstname<br /><br /><input value="<?=$e_info['firstname'];?>" type="text" disabled="disabled" autocomplete="off" class="inp-search"  id ="fname" name="fname"></td>
												<td>Middle Name<br /><br /><input value="<?=$e_info['mid_name'];?>" type="text" disabled="disabled" autocomplete="off" class="inp-search" id="mname" name="mname"></td>
											</tr>
											<tr>
												<td> Birth date<br /><br />
													<input type="text" name="bday" id="bday" class="inp-search " value="<?=$e_info['bday'];?>" disabled="disabled" onChange="comp()"/>
												</td>
											
												<td>Age <br /><br /><input type="text" autocomplete="off" style="width:30px" disabled="disabled" value="<?=$e_info['age'];?>" style="border:0" maxlength="2" name="age" id="age"></td>
												<td>
													Gender<br /><br />
		
													<select name="gender" class="dropdown" disabled="disabled">
												
																				<option <?=isequal($e_info['sex'],'-');?> value="">-</option>
																				<option <?=isequal($e_info['sex'],'M');?> value="M">Male</option>
																				<option <?=isequal($e_info['sex'],'F');?> value="F">Female</option>
													</select>
												</td>
												
											</tr>
											<tr><td colspan="3">Address <br /><br /><input disabled="disabled"  value="<?=$e_info['address'];?>" type="text" id="address" name="address" style="width:100%"/></td></tr>
											<tr >
												<td>Religion <br /><br /><select id="relg" name="religion" class="dropdown" disabled="disabled">
													<option <?=isequal($e_info['religion'],'-');?> value="">Select Religion</option>
													<option <?=isequal($e_info['religion'],'Roman Catholic');?> value="Roman Catholic">Roman Catholic</option>
													<option <?=isequal($e_info['religion'],'Iglesia ni Cristo');?> value="Iglesia ni Cristo">Iglesia ni Cristo</option>
													<option <?=isequal($e_info['religion'],'Christian');?> value="Christian">Christian</option>
													<option <?=isequal($e_info['religion'],'Other');?> value="other">Other</option>
												
												</select></td>
											<td>Civil Status <br /><br />
													<select name="cv_stat" class="dropdown" id="gender" disabled="disabled">
																	<option <?=isequal($e_info['civil_status'],'-');?> value="">Select status</option>
																	<option <?=isequal($e_info['civil_status'],'Single');?> value="Single">Single</option>
																	<option <?=isequal($e_info['civil_status'],'Married');?> value="Married">Married</option>
																	<option <?=isequal($e_info['civil_status'],'Widowed');?>value="Widowed">Widowed</option>
																	</select><br>
										
													
												</td>
												<td>Contact Number <br /><br /><input value="<?=$e_info['contact'];?>" disabled="disabled" type="text" class="inp-search" value="" autocomplete="off" name="cnumber" id="cnumber"></td>
											</tr>
										</table>
										<fieldset class="left">
										<legend>Benefits</legend>
										<ul id="bnfts">
										<li>SSS Number <br /><br /><input disabled="disabled" value="<?=$e_info['sss'];?>" type="text" class="inp-search" value="" autocomplete="off" name="sss" id="sss"></li>
										<li>PhilHealth Number <br /><br /><input disabled="disabled" value="<?=$e_info['philhealth'];?>" type="text" class="inp-search" value="" autocomplete="off" name="philhealth" id="philhealth"></li>
										<li>PAG-IBIG Number <br /><br /><input disabled="disabled" value="<?=$e_info['pagibig'];?>" type="text" class="inp-search" value="" autocomplete="off" name="pagibig" id="pagibig"></li>
										<li>TIN Number <br /><br /><input disabled="disabled" value="<?=$e_info['tin'];?>" type="text" class="inp-search" value="" autocomplete="off" name="tin" id="tin"></li>
										
										</ul>
										</fieldset>
										<fieldset class="left">
										<legend>Account</legend>
										<ul id="bnfts">
										<li>Username <br /><br /><input type="text" disabled="disabled" class="inp-search" value="<?=$account['username'];?>" autocomplete="off" name="regusername" id="regusername"></li>
										<li>Password <br /><br /><input type="text" disabled="disabled" class="inp-search" value="<?=$account['password'];?>" autocomplete="off" name="regpassword" id="regpassword"></li>
									
										</ul>
										</fieldset>
										<br class="clear" />
									
					</div>
				
							

</div>