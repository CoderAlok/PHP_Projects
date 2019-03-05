<?php 

	$country = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bottle | Login</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<?php include_once("layout/head.php"); ?>
</head>
<body>
	<div class="wrapper">
		
		<?php include_once("layout/menu.php"); ?>

		<section class="sec1_login">
			<div class="container_login_form">
				<form class="form-group" method="post" action="" enctype="multipart/form-data">
					<table border="0" cellpadding="5" cellspacing="5">
						<tr>
							<td>
								<h1 class="text-white">login</h1>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="uname" size="30" id="" class="form-control" value="" placeholder="Enter the user name " required="required" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="password" size="30" name="upass" id="" class="form-control" value="" placeholder="********" required="required" />
							</td>
						</tr>
						<tr>
							<td align="right">
								<input type="submit" name="sbmt" id="" class="btn btn-danger" value="login">
								<input type="reset" class="btn btn-primary" value="Clear"/ >
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div class="container_register_form">
				<form class="form-group" method="post" action="" enctype="multipart/form-data">
					<table border="0" cellpadding="5" cellspacing="5">
						<tr>
							<td>
								<h1 class="text-white">Register</h1>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" class="form-control" size="30" name="" placeholder="Enter the first name " required="required" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" class="form-control" size="30" name="" placeholder="Enter the last name " required="required" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" class="form-control" size="30" name="" placeholder="User name " required="required" />
							</td>
						</tr>
						<tr>
							<td>
								<label class="label-danger text-white">Sex</label>
								<select name="sex" class="form-control" required="required">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Transgender">Transgender</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label class="label-default text-white">Hobbies</label>
								<input type="text" class="form-control" size="30" name="" placeholder="Hobbies " required="required" />
							</td>
						</tr>
						<tr>
							<td>
								<label class="label-danger text-white">Country</label>
								<select name="country" class="form-control" required="required">
									<?php for($i=0;$i<count($country);$i++){ ?>
										<option value="<?php echo $country[$i]; ?>"><?php echo $country[$i]; ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label class="text-white">Image</label>
								<input type="file" class="custom-file text-white" name="user_file" />
							</td>
						</tr>

						<tr>
							<td align="right">
								<input type="submit" class="btn btn-default" value="SAVE" />
								<input type="reset" class="btn btn-primary" value="CLEAR" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		</section>

		<?php //include_once("layout/footer.php"); ?>
	</div>
</body>
</html>

<!-- Mehboob 9825088661 -->