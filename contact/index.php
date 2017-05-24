<html>
  <head>
    <meta name="viewport"
    content="width=device-width,
    initial-scale=1.0">
    <link rel="stylesheet"  href='/style.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/script.js"></script>
    <title>Hebe's Notes</title>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-76091906-2', 'auto');
ga('send', 'pageview');

</script>
  </head>
  <body>
    <div class="title-container">
      <a class='title' href='/'><h1>Hebe's Notes</h1></a><a class='contact-link' href='/contact'>Contact me</a>
    </div>
    <hr>
    <div class="container">
      <p>Feel free to drop me a message.<br>I will do my best to reply.</p>
      <form action="/contact/" method="post" class="contact_form">
				<label for="message">Message</label><textarea name="message" id="message" cols="30" rows="10" required></textarea>
				<label for="email">Email</label><input type="email" name="email" id="email" required></input>
				<input type="submit" class="submit" value="Send">
			</form>
			<?php if(isset($_POST["message"]) && isset($_POST["email"])){

				$to = "hebe.bown@gmail.com,tgbanister@gmail.com";
				$subject = "Hebe Notes Website Contact";
				$txt = $_POST["message"];
				$headers = "From: ".$_POST["email"];

				mail($to,$subject,$txt,$headers);

				echo "<h3>Thank you, your message has been sent</h3>";
			} ?>
    </div>
  </body>
</html>
