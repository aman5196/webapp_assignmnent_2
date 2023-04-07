<!DOCTYPE html>
<html>
<head>
	<title>Contact Us Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="contact-form.css">
</head>
<body>
	<div class="container">
		<form method="POST" action="submit-form.php">
			<label for="name">Name</label>
			<input type="text" name="name" placeholder="Your name..">

			<label for="email">Email</label>
			<input type="email" name="email" placeholder="Your email..">

			<label for="subject">Subject</label>
			<input type="text" name="subject" placeholder="Subject..">

			<label for="message">Message</label>
			<textarea  name="message" placeholder="Write something.." style="height:200px"></textarea>

			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>