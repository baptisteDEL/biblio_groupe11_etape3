<?php require "header.php"; ?>
	<br><br><br><br><br>
	<article>
	<form method="post" action="receive.php">
<fieldset>
	
</fieldset>

<fieldset>
		<legend>Information sur le Client</legend>
		<label for="name">Nom : </label>
		<input type="text" id="name" name="client_name" autofocus="required"><br>


			<label for="mail">Courriel : </label>
			<input type="email" id="mail" name="client_mail" required><br>
</fieldset>

<br>

<fieldset>

			<label for="pack">Raison du message : </label>
			<br>

			<label for="duration"> :</label>
			<select name="duration" required>
				<option>Je ne trouve pas un livre</option>
				<option>Il manque des informations</option>
			</select><br>
		
</fieldset>


		<label for="addreq">Questions :</label><br>
		<textarea id="addreq" name="client_addreq" placeholder="Entrez ici votre question"></textarea>

		<button type="submit">Valider</button>


	</form>
</article>
</body>
</html>