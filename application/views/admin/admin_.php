<div class="container min-height">
		<div id="small-left">

			<?php echo loadImage('public/img/avatar.png','left','','width:40px;height:40px;margin:3px');?>
			<h4 style="margin:0;margin-top:3px"><?=$info['lastname'].", ".$info['firstname'];?></h4>
			<a href="<?=base_url()."account/settings";?>" >Account Settings</a> |
			<a href="<?=base_url()."account/benefits";?>" >Benefits Accounts</a> |
			<a href="<?=base_url()."main/logout";?>" >Logout</a>
		</div>
					
					<h1 class='left'>Welcome <?=$info['lastname'].", ".$info['firstname'];?> <span>What would you like to do today?</span></h1>
		
			
		
	
</div>