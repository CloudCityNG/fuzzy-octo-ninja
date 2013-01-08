<!---<div class="container" id="menu-con">
	<div class="wrapper">
			<ul id="dash-b">
					<li><a href="<?=base_url()."account/changepass/";?>" class="g-button green"><i class="icon-white icon-cog"></i> Change Password</a></li>
				</ul>
	</div>
</div>//-->
<div class="container" id="admin">
	<div class="wrapper minh">
					<h1 class="title">Account Settings</h1>
							
					<div class="thebox">
					<div class="pull-left" style="width:200px">
					<img src="<?=base_url()."public/img/avatar.png";?>" class="img-polaroid" />
					<h4 style="line-height:20px"><?=$a_info['firstname']." ".$a_info['mid_name']." ".$a_info['lastname'];?></h4>
					</div>
					<div class="pull-right well">
					<?=isset($success) ? "<div class='alert alert-success'>".$success."</div>" : null;?>
					<?=isset($error) ? "<div class='alert alert-error'>".$error."</div>" : null;?>
					
					<h1 class="title2"><span>Personal information</span></h1>
					<p>Update your personal information then click on save changes to see changes</p>
					<form action="<?=base_url()."account/settings";?>" method="POST" class="f-box">
						<table>
											<tr>
												<td>Lastname <br /><br /><div class="g-button-group"><input type="text" value="<?=$a_info['lastname'];?>" autocomplete="off" class="inp-small" id="lname" name="lname"></div></td>
												<td>Firstname<br /><br /><input type="text" autocomplete="off" value="<?=$a_info['firstname'];?>" class="inp-small"  id ="fname" name="fname"></td>
												<td>Middle Name<br /><br /><input type="text" autocomplete="off" value="<?=$a_info['mid_name'];?>" class="inp-small" id="mname" name="mname"></td>
											</tr>
											<tr>
												<td> Birth date<br /><br />
													<input type="text" name="bday" value="<?=$a_info['bday'];?>" id="bday" class="inp-small " onChange="comp()"/>
												</td>
											
												<td>Age <br /><br /><input type="text" autocomplete="off" value="<?=$a_info['age'];?>" value="" style="width:30px" maxlength="2" name="age" id="age"></td>
												<td>
													Gender<br /><br />
													<select name="gender" class="dropdown">
																				<option <?=isequal($a_info['sex'],'-');?> value="">-</option>
																				<option <?=isequal($a_info['sex'],'M');?> value="Male">Male</option>
																				<option <?=isequal($a_info['sex'],'F');?> value="Female">Female</option>
													</select>
												</td>
												
											</tr>
											<tr><td colspan="3">Address <br /><br /><input type="text" id="address" name="address" value="<?=$a_info['address'];?>"  style="width:100%"/></td></tr>
											<tr >
												<td>Religion <br /><br /><select id="relg" name="religion" class="dropdown">
												<option <?=isequal($a_info['religion'],'-');?> value="">Select Religion</option>
													<option <?=isequal($a_info['religion'],'Roman Catholic');?> value="Roman Catholic">Roman Catholic</option>
													<option <?=isequal($a_info['religion'],'Iglesia ni Cristo');?> value="Iglesia ni Cristo">Iglesia ni Cristo</option>
													<option <?=isequal($a_info['religion'],'Christian');?> value="Christian">Christian</option>
													<option <?=isequal($a_info['religion'],'Other');?> value="other">Other</option>
												
												</select></td>
											<td>Civil Status <br /><br />
													<select name="cv_stat" class="dropdown" id="gender">
																	<option <?=isequal($a_info['civil_status'],'-');?> value="">Select status</option>
																	<option <?=isequal($a_info['civil_status'],'Single');?> value="Single">Single</option>
																	<option <?=isequal($a_info['civil_status'],'Married');?> value="Married">Married</option>
																	<option <?=isequal($a_info['civil_status'],'Widowed');?>value="Widowed">Widowed</option>
																	</select><br>
										
													
												</td>
												<td>Contact Number <br /><br /><input type="text" class="inp-small" value="<?=$a_info['contact'];?>" autocomplete="off" name="cnumber" id="cnumber"></td>
											</tr>
										</table>
					<input type="submit" name="acc_info" value="Save" class="btn btn-success btn-large"/>
					</form>
					<h1 class="title2"><span>Change password</span></h1>
					<p>Change your password frequently to prevent your account from attack.</p>
						<form action="<?=base_url()."account/settings";?>" method="POST" class="f-box">
							<p>Old password <br /><input type="password" name="oldpass" class="chp"/></p>
							<p>New password <br /><input type="password" name="newpass" class="chp"/></p>
							<p>Retype password <br /><input type="password" name="retypepass" class="chp"/></p>
							
							<input type="submit" value="Change Password" name="change" class="btn btn-large btn-success"/>
						</form>
						</div>
						<br class="clear" />
					</div>						
						
	</div>
</div>