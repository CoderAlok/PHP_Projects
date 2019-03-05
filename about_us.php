<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bottle | About Us</title>
	<?php include_once("layout/head.php"); ?>
</head>
<body>
	<div class="wrapper">
		<?php include_once("layout/menu.php"); ?>
		<section class="sec1_about_us"></section>
		<section class="content">
			<p>
				When you set all options you need to execute the request with curl_exec($ch). This method will provide you with a response that you can present as JSON and is suitable for future parsing. After you execute the request, information about HTTP response code will be available and we will use it later in this tutorial -curl_getinfoIf all went right and HTTP response code from 2xx family was received (200 OK, 201 CREATED, etc.), you can extract the needed information from the response body and present it to your user. In our example we chose to present: Message ID, To, SMS Count, Status Group, Status Group Name, Status ID, Status Name and Status Description, but you can choose whichever you want.
			</p>
			<p>In this example we'll be sending only one message to one destination, so the sent message response array will contain only one element and there is no need for looping it. Anyway, if you decide to send a message to more than one destination, you should iterate through the array of responses.</p>
		</section>
		
		<?php include_once("layout/footer.php"); ?>
	</div>
</body>
</html>