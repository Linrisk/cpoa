
    <link rel="stylesheet" href="asset/css/style.css">

<form action="controllers/connexion.php"  method="post">
		<div class="emaill">
		<label for="login">login :</label>
        <input type="text" id="mail" name="login">
</div >
<div class="mdp">
    <label for="pass">Password :</label>
    <input type="password" id="pass" name="password"
           minlength="3" required>
</div>

         <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>