<div class="container">
	<div class="wrapper minh" id="login">
			
			<div id="emp_pics">
					<h1 class="title" style="color:rgb(2,77,145);">Welcome! to Universal Commercial Corporation</h1>
			</div>

				<div class="signin-box">
					<form action="<?=base_url()."main/login";?>" method="POST">
						 <fieldset>
						<h1 class="title" style="color:gray">Login</h1>
						<?=(isset($error))? "<p class='label label-important'>".$error."</p>": null;?>
						<p><input type="text" placeholder="Username" name="userLogin" autofocus="autofocus"/></p>
						<p><input type="password" placeholder="Password" name="userPass" /></p>
						<p>
						<input type="submit" class="btn btn-success" name="userlogin" value="Login" /></p>

						<a href="<?=base_url()."main/forgot";?>">Forgot password</a>
					</fieldset>
					</form>
			</div>
	</div>
</div>