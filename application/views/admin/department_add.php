	
			<!--add new department//-->
			<div class="container">
			<h1 class="title">Departments and Positions</h1>
			<div class="well">
				<ul class="nav nav-tabs nav-tabs-google" id="btabs">
					 <li class="active"><a href="#adddep" data-toggle="tab">Add new Department and Positions</a></li>
					
				</ul>
				<form action="<?=base_url()."depandpos/add/";?>" name="add_dep" method="post">
					<?=(isset($rs)) ? $rs : null;?>
					<?=(isset($error)) ? $error : null;?>
			<p>Department Name:<br />
			<input type="text" name="dep_n" value="" class="inp-search">
			</p>
			<p>Add Position<br />
			<input type="text" value="" name="pos[]" class="inp-search"> <a href="#more" onClick="addmore()">[+]Add more</a>
			</p>
			<span id="addmorespan">
			</span>
			<p><input type="submit" name="adddep" value="Save" class="btn btn-success btn-large"/></p>
			</form>
		
			</div>
			</div>