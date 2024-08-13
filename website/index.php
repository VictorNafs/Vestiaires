<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<title> Contact </title>

</head>

<title> CSS Grid </title>
<link rel="stylesheet" href="essai.css">

<body>

<h1> CSS Grid ! </h1>

<div class="grille">

	<div class="grid-item">
	</div>
	
	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>

	<div class="grid-item">
	</div>





</div>	



<div class="col-xl-8 col-md-7 content-item">
							<form method="post" class="form-submission contact-form contact-form-padding">
								<label> Votre email </label>
								<input type="hidden" name="Subject" value="Contact form">
								<div class="row gutters-default">
									<div class="col-12">
										<h3>Prenons contact !</h3>
									</div>
									<div class="col-xl-4 col-sm-6 col-12">
										<div class="form-field">
											<label for="contact-name" class="form-field-label">Nom</label>
											<input type="text" class="form-field-input" name="Name" value="" autocomplete="off" id="contact-name" required data-pristine-required-message="This field is required.">
										</div>
									</div>
									<div class="col-xl-4 col-sm-6 col-12">
										<div class="form-field">
											<label for="contact-phone" class="form-field-label">Numéro</label>
											<input type="tel" class="form-field-input mask-phone" name="Phone" value="" autocomplete="off" id="contact-phone" required data-pristine-required-message="This field is required.">
										</div>
									</div>
									<div class="col-xl-4 col-12">
										<div class="form-field">
											<label for="contact-email" class="form-field-label">Addresse Email</label>
											<input type="email" class="form-field-input" name="Email" value="" autocomplete="off" id="contact-email" required data-pristine-required-message="This field is required." data-pristine-email-message="Please enter a valid email address.">
										</div>
									</div>
									<div class="col-12">
										<div class="form-field">
											<label for="contact-message" class="form-field-label">Votre Message</label>
											<textarea name="Message" class="form-field-input" id="contact-message" cols="30" rows="6" required></textarea>
										</div>
										<div class="form-btn">
											<button type="submit" class="btn btn-w240 ripple"><span>Envoyer</span></button>
										</div>
									</div>
								</div>
							</form>

							<?php
							if (isset($_POST['submit']))
							{
								$retour = mail('vivivicava@gmail.com', $_POST['Message'], 'From: cmoikvolelorange.com' . "\r\n" . 'Reply-to:' .$_POST['Email']);
								if($retour)
									echo '<p>Votre message à bien été envoyé</p>';
							}
							?>
						</div>

						<br><br><br>

<form
  action="https://formspree.io/f/xeqwjkep"
  method="POST"
>
  <label>
    Your email:
    <input type="email" name="email">
  </label>
  <label>
    Your message:
    <textarea name="message"></textarea>
  </label>
  <!-- your other form fields go here -->
  <button type="submit">Send</button>
</form>

					</div>
				</div>
			</div>


</body>
</html>