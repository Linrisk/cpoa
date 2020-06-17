
    <link rel="stylesheet" href="asset/css/style.css">

<form action="controllers/connexion.php"  method="post">
		<div class="emaill">
		<!--<label for="login">login :</label>-->
        <input type="mail" id="mail" name="login">
</div >
<div class="mdp">
   <!-- <label for="pass">Password :</label> -->
    <input type="password" id="pass" name="password"
           minlength="3" required>
</div>

         <div class="button" style="margin-top: 15px">
        <button type="submit">Connexion</button>
    </div>
</form>