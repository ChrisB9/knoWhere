<?php
if (!isset($_SESSION['errormsg']))
    $_SESSION['errormsg'] = '';
?>
<!--Formular für den Login -->
<div id="loginwrapper">
    <h1>Login</h1>
    <div id="fehlerMeldungLogin">
        <?php
        echo $_SESSION['errormsg'];
        ?>
    </div>
    <form name="loginFormular" method="post" action="index.php?page=LoginPHP" id="login">
        <label for="username">Benutzername:</label>
        <input type="text" name="username" id="username" required autofocus placeholder="Username">
        <label for="password">Passwort:</label>
        <input type="password" name="password" id="password" required placeholder="Password">
        <input type="submit" value="Login" name="btnlogin" id="btnlogin">
    </form>
    <p><a href="index.php?page=register">oder registrieren</a></p>
</div>
