<div class="container">

<ul class="custom-nav nav nav-tabs nav-tabs-google" id="btabs">
	<li class="active"><a href="#home" data-toggle="tab">Leave Request</a></li>
</ul>
<ul class="breadcrumb custom-nav">
    <li><a href="<?=base_url()."admin/";?>">Dashboard</a> <span class="divider">/</span></li>
    <li><a href="<?=base_url()."leave/";?>">Leave Request</a> <span class="divider">/</span></li>
    <li class="active"><?=$nme;?></li>
 </ul>
				 <ul class="custom-nav nav nav-tabs nav-tabs-google"></ul>
				<?=isset($success) ? "<div class='alert alert-success'>".$success."</div>" :null ;?>
				<form method="POST">



				<h3>[<?=$leave;?> Leave Request] <strong><?=$nme;?>asfsf</strong></h3>
					
				<table class="table table-condensed " style="width:300px">
					<tr><td style="text-align:right;width:30px">From </td> <td>:</td><td><span class="label label-important"><?=$from;?></span></td></tr>
					<tr><td style="text-align:right;width:30px">To </td> <td>:</td><td><span class="label label-important"><?=$to;?></span></td></tr>
				</table>
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
