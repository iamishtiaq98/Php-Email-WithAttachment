<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/style1.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
</head>
<div class="content">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row align-items-center">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<h2 class="mb-5">Get in Touch. <br> It's easy.</h2>
						<form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm"  enctype='multipart/form-data'>
							<div class="row">
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" name="s_name" id="s_name" placeholder="First name">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 form-group">
									<input type="email" class="form-control" name="s_email" id="s_email" placeholder="Email">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" name="s_subject" id="s_subject" placeholder="Subject">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 form-group">
									<textarea class="form-control" name="s_message" id="s_message" cols="30" rows="4" placeholder="Write your message"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 form-group">
									<input type="file" name="file" id="file" class="form-control" multiple="multiple">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<input type="submit"  value="Send Message">
									<span class="submitting"></span>
								</div>
							</div>
						</form>
						<div id="form-message-warning mt-4"></div>
						<div id="form-message-success">
							Your message was sent, thank you!
						</div>
					</div>
					<div class="col-lg-4 ml-auto">
						<h3 class="mb-4">Let's talk about everything.</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil deleniti itaque similique magni. Magni, laboriosam perferendis maxime!</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/main.js"></script>
<script defer src="js/beacon.min.js" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7f1669e09f084118","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.7.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>