<div class="container" id="admin">
	<div class="wrapper minh">
					<h1 class="title2"><span>Benefits Accounts</span></h1>
							
					<div class="well">
					<?=isset($success) ? "<p class='alert alert-success'>".$success."</p>" : null;?>
					<?=isset($error) ? "<p class='alert alert-error'>".$error."</p>" : null;?>
					
					        <ul class="nav nav-tabs nav-tabs-google" id="btabs">
							    <li class="active"><a href="#home" data-toggle="tab">SSS</a></li>
							    <li><a href="#profile" data-toggle="tab">Pagibig</a></li>
							    <li><a href="#messages" data-toggle="tab">Philhealth</a></li>
							    <li><a href="#settings" data-toggle="tab">TIN</a></li>
							</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="home">
							<form action="<?=base_url()."account/benefits";?>" method="POST" class="f-box">
									<table class="tbl-inpt">
														<tr>
															<td><h3>SSS account number</h3><input  value="<?=$a_info['sss'];?>" type="text" class="inp-search" autocomplete="off" name="sss" id="sss"></td>
															
														</tr>
														
													</table>
								<input type="submit" name="ssss" value="Submit" class="btn btn-large btn-success"/>
								</form>
						</div>
						<div class="tab-pane" id="profile">
								<form action="<?=base_url()."account/benefits";?>" method="POST" class="f-box">
									<table class="tbl-inpt">
														<tr>
															<td><h3>PAGIBIG account number</h3><input  value="<?=$a_info['pagibig'];?>" type="text" class="inp-search" autocomplete="off" name="pagibig" id="pagibig"></td>
															
														</tr>
														
													</table>
								<input type="submit" name="pagibigbtn" value="Submit" class="btn btn-large btn-success"/>
								</form>

						</div>
						<div class="tab-pane" id="messages">
							<form action="<?=base_url()."account/benefits";?>" method="POST" class="f-box">
										<table class="tbl-inpt">
															<tr>
																<td><h3>Philhealth account number</h3><input  value="<?=$a_info['philhealth'];?>" type="text" class="inp-search" autocomplete="off" name="philhealth" id="pagibig"></td>
																
															</tr>
															
														</table>
									<input type="submit" name="philhealthtbn" value="Submit" class="btn btn-large btn-success"/>
									</form>
						</div>
						<div class="tab-pane" id="settings">
							<form action="<?=base_url()."account/benefits";?>" method="POST" class="f-box">
													<table class="tbl-inpt">
																		<tr>
																			<td><h3>TIN number</h3><input value="<?=$a_info['tin'];?>" type="text" class="inp-search" autocomplete="off" name="tin" id="tin"></td>
																			
																		</tr>
																		
																	</table>
												<input type="submit" name="tinbtn" value="Submit" class="btn btn-large btn-success"/>
												</form>

						</div>
					</div>



				
					
					</div>						
						
	</div>
</div>