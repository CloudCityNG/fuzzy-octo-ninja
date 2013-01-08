<div class="container">
			<h1 class="title"><span>Leave request</span></h1>	
			<div class="well">
				<?=isset($success) ? "<div class='alert alert-success'>".$success."</div>" :null ;?>

				 <ul class="nav nav-tabs nav-tabs-google" id="btabs">
							    <li class="active"><a href="#home" data-toggle="tab">Request</a></li>
							    <li><a href="#profile" data-toggle="tab">Send Message</a></li>
							</ul>

				<form method="POST">
				<p>Name : <strong><?=$nme;?>asfsf</strong></p>
				<p>Leave to apply: <span class="label label-important"><?=$leave;?></span></p>
				<p>From : <span class="label label-important"><?=$from;?></span> <br />To : <span class="label label-important"><?=$to;?></span></p>
				<h5 class="ttle">Reason</h5>
				<div class="well" style="background:#fff">
				<?=$reason;?>
				</div>
				<input type="hidden" name="id" value="<?=$emp_id."/".$lrid;?>" />
				<?php

				?>
				<input <?=($lrstatus==1) ? "disabled" : null;?> type="submit" name="accpt" class="btn btn-success btn-large" value="Accept" />
				</form>
			</div>
