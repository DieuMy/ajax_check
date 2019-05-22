<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJAX - BASIC</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#username").blur(function(){//sự kiện rời chuột
				var username = $(this).val();
				$.get('checkusername.php',{check:username},function(data){
					if(data==0)
					{
						$("#error").html("Tài khoản có thể sử dụng");
						$('#error').css('color','green');
					}else {
						$("#error").html("Tài khoản đã tồn tại");
						$('#error').css('color','red')
					}
				})
			})
		})
	</script>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form">
		<legend>Register</legend>
	
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" id="username" name="username"><div id="error"></div>
		</div>
	
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
	
	
		<button type="submit" class="btn btn-primary" id="btnRegister">Register</button>
	</form>
	</div>
	
</body>
<script type="text/javascript" src="../css/jquery-3.2.1.min.js"></script>
</html>