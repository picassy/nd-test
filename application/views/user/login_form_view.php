<script>
	$(document).ready(function(){
		$("#registration_form").click(function(){
			$( ".container" ).load("index.php/user/register");
		});
	});
</script>
<div class="container">
	<div class="jumbotron">
		<?php if ($msg) : ?><div style="color:red;"><?=$msg;?><div><?php endif; ?>
		<form id="login-form" method="post" action="log">
			<div class="input-group space-bt">
				<div class="input-group-addon">
					<span class="glyphicon glyphicon-envelope"></span>
				</div>
				<input type="text" name="email" class="form-control" placeholder="E-mail">
			</div>
			<div class="input-group">
				<div class="input-group-addon">
					<span class="glyphicon glyphicon-lock"></span>
				</div>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me
			</label>
			<div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
			<p>
				<a class="btn btn-lg btn-success" id="registration_form" role="button">
					Sign up today
				</a>
			</p>
		</form>
	</div>
</div>
