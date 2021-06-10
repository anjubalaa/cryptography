


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Playfair Cipher</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		.label{
			background: linear-gradient(to bottom, #333 0%, #33ccff 100%);
			color: white; 
			text-align: center; 
			padding: 5px 10px; 
			border-radius: 5px;
		}
	</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
		
			<div class="wrap-login100">
			<a href="index.php"><img height="30 px" width="30px" src="data:image/jpeg;base64,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" alt=""></a>
				<br>
				<div>
				<form class="login100-form validate-form" method="post">
				
					<span class="login100-form-title p-b-26" style="">Playfair Cipher</span>		
					<div class="label">PLAIN TEXT </div>

					<div class="wrap-input100">
						<textarea style="padding-top: 15px;" class="input100" type="text" name="plain"></textarea>
					</div>
					<div class="label">Key</div>

					<!-- form input key -->
					<div class="wrap-input100">
						<input class="input100" type="number" name="key">
					</div>
					<div class="login100-form-title" style="padding-bottom: 30px;">

					
	                    <button type="submit" name="encrypt" class="btn btn-success">Encrypt</button>
	                    <button type="submit" name="decrypt" class="btn btn-danger">Decrypt</button>
				    </div>
				</form>
					<div class="label">CIPHER TEXT</div>
				    <div style=" padding-top: 10px;" class="wrap-input100">

						<textarea style="padding-top: 15px;" class="input100" type="text" name="">
						<?php  
								

								if (isset($_POST['encrypt'])) {
								
									$simple_string = $_POST['plain'];
									$ciphering = "AES-128-CTR";//cipher method
									$option = 0;//hold bitwise disjuction of the flags
									$encryption_iv = '1234567890123456';//hold the initialization vector which is not null
									$encryption_key = $_POST['key'];
									$encryption = openssl_encrypt($simple_string,$ciphering,$encryption_key,$option,$encryption_iv);
									echo $encryption;
									
								
								}
								
								if (isset($_POST['decrypt'])) {
								
									$text = $_POST['plain'];
									$ciphering = "AES-128-CTR";//cipher method
									$option = 0;//hold bitwise disjuction of the flags
									$decryption_key = $_POST['key'];
									$decryption_iv = '1234567890123456';
								
									$decryption = openssl_decrypt($text,$ciphering,$decryption_key,$option,$decryption_iv);
									
									echo $decryption;
									
								
								}
								
							
						?>

						</textarea>
					</div>
			</div>
		</div>
	</div>
	</div>

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	<footer>
	<p align="center">&copy; copyright 2021 Anjubalaa106@gmail.com</p>
	</footer>
</body>
</html>