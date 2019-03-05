<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bottle | Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/contact_us_form_style.css" />
	<?php include_once("layout/head.php"); ?>
</head>
<body>
	<div class="wrapper">

		<?php include_once("layout/menu.php"); ?>
		
		<section class="sec1_contact_us"></section>
		
		<section class="content">
			<div class="contact_us_form">
				<form method="post" action="" enctype="multipart/form-data">
					<table cellpadding="5" cellpadding="5" border="0">
						<tr>
							<td class="display-4"><h1>Contact Us</h1></td>
						</tr>
						<tr>
							<td>
								<label for="name">Name</label>
								<input type="text" size="30" name="name" id="name" />
							</td>
						</tr>
						<tr>
							<td>
								<label for="">phone</label>
								<input type="text" size="30" name="phone" />
							</td>
						</tr>
						<tr>
							<td>
								<label for="">Email</label>
								<input type="text" size="30" name="email" />
							</td>
						</tr>
						<tr>
							<td>
								<label for="">Message</label>
								<textarea name="msg"></textarea>
							</td>
						</tr>

						<tr>
							<td>
								<input type="submit" name="sbmt" value="SEND" />
								<input type="reset" value="CLEAR" />
							</td>
						</tr>
					</table>
				</form>
				<?php 

					$str = "Hell0 world .. This is a programming language for PHP";
					// echo md5($str);
					// echo crypt(5,$str);
					// echo sha1($str);

				?>
			</div>
		</section>

		<?php include_once("layout/footer.php"); ?>
	</div>
</body>
</html>