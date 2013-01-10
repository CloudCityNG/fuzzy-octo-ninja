<div class="container min-height">
		<div id="small-left">

			<?php echo loadImage('public/img/avatar.png','left','','width:40px;height:40px;margin:3px');?>
			<h4 style="margin:0;margin-top:3px"><?=$info['lastname'].", ".$info['firstname'];?></h4>
			<a href="<?=base_url()."account/settings";?>" >Account Settings</a> |
			<a href="<?=base_url()."account/benefits";?>" >Benefits Accounts</a> |
			<a href="<?=base_url()."main/logout";?>" >Logout</a>
		</div>
					
					<h1 class='left'>Welcome <?=$info['lastname'].", ".$info['firstname'];?> <span>What would you like to do today?</span></h1>
		
			<ul class="nav nav-pills">
				 <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Employees <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?=base_url()."employees/";?>"><i class="icon-list-alt"></i>View Employees</a></li>
                              <li><a href="<?=base_url()."employees/add";?>"><i class="icon-plus-sign"></i>Add Employees</a></li>
                              <li><a href="<?=base_url()."employees/search";?>"><i class="icon-search"></i>Search Employees</a></li>
                            </ul>
                         </li>

                         <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dept. and Positions <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?=base_url()."depandpos/";?>"><i class="icon-list-alt"></i>View Department</a></li>
                            <li><a href="<?=base_url()."depandpos/add/";?>"><i class="icon-plus-sign"></i>Add Departments</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-list-alt"></i>View Positions</a></li>
                            <li><a href="#"><i class="icon-plus-sign"></i>Add Positions</a></li>

                          </ul>
                       </li>

                       <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-list-alt"></i>Payslip</a></li>
                  
                          </ul>
                       </li>
                      <li><a href="#" rel="tooltip" id="adtr" data-original-title="Tooltip on bottom" title="Daily Time Record">DTR</a></li>
                          
              
            </ul>
		
	
</div>