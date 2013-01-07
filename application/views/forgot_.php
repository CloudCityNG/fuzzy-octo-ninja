<div class="container">
	<div class="wrapper minh" id="login">
			
			<div id="emp_pics">
					<h1 class="title" style="color:rgb(2,77,145);">Welcome! to Universal Commercial Corporation</h1>
			</div>

				<div class="signin-box">
					<form action="<?=base_url()."main/forgot";?>" method="POST">
						<h3 class="title" style="color:gray">Forgot password</h3>
						<?=(isset($error))? "<p class='error'>".$error."</p>": null;?>
						<p>Enter your Cellphone Number<br /><input type="text" name="cpn" class="inp" id="cpn" autofocus="autofocus"/></p>
						<p><input type="submit" class="g-button green" value="Forgot password" name="userforgot" /></p>
						<a href="<?=base_url()."main/login";?>">Login</a>
						</form>
			</div>
	</div>
</div>