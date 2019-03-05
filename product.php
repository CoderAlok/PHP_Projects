<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bottle | Products</title>
	<?php include_once("layout/head.php"); ?>
</head>
<body>
	<div class="wrapper">
		
		<?php include_once("layout/menu.php"); ?>

		<section class="sec1_product"></section>
		<section class="content">
			<p>
				Welcome to Infobip's beginner tutorial for creating your own SMS web app. We will guide you one step at a time through the implementation of Infobip SMS API and SMS services. The tutorial includes three examples of some of the main features for sending SMS messages and checking their status:
			</p>
			<p> To be able to follow this tutorial, to write and test on your own, you need to set the environment (and we don't mean to dim the lights and make some coffee). In order to send messages, get logs, and receive your delivery reports, you have to enable the cURL php extension in your web server.

			For the purpose of this tutorial, you can use a solution from the AMP solution stack (wamp, xampp, or other). Those are software stacks for various OS consisting of Apache web server, MySQL database and PHP programming language support. You should enable the phpcurl extension for the one you choose.</p>

			<p>Before you start to manipulate values, you have to check if you set them in the right way. In this example we have only checked “toInput” field. You don't have to check them all because POST HTTP method will set everything automatically (if any of the input fields is empty, its value will be an empty string). If you're loading the page for the first time keep in mind that none of these fields will be present. We are just two steps away from setting everything. After checking fields, you need to define the URL for sending request, and the body of the request that is going to be sent. The POST request body will be presented as a JSON string. Forming the request body will look like this</p>
		</section>
		
		<?php include_once("layout/footer.php"); ?>
</body>
</html>