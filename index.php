<?php include('./header.php'); ?>

<div class="container">

	<div class="row">
		<div class="col-xs-12 login-wrapper">
			<h2>LOGIN</h2>
		</div>
	</div>

	<hr />

	<div class="row hidden-sm hidden-xs"> <p>&emsp;</p> </div>

	<div class="row">
		<div class="col-sm-8 col-xs-12 col-sm-offset-2">
			<div class="form-wrapper">
				
				<form action="./controller.php" method="POST">
					
					<div class="form-group">
						<label for="name">Username</label>
						<input type="text" name="email" class="form-control" required="" placeholder="Please enter your username" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" class="form-control" required="" placeholder="Please enter your password" />
					</div>

					<div class="form-group">
						<input type="submit" value="Login" class="btn btn-primary btn-block" />
						<input type="hidden" name="intent" value="login" / >
					</div>

				</form>

			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
//	$.backstretch("./bg.jpg");
</script>
</body>
</html>