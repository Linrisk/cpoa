<!Doctype html>
<html lang="fr">

  <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
<head>
	<div class="header">

</div>
</head>

<body>
	

	<form action="Connexion.php"  method="post">
		<div class="emaill">
		<label for="">e-mail :</label>
        <input type="text" id="mail" name="user_mail">
</div >
<div class="mdp">
    <label for="pass">Password :</label>
    <input type="password" id="pass" name="password"
           minlength="8" required>
</div>

         <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>
</body>