<div id="loginErfolgreichwrapper">
    <h1>Registrierung Erfolgreich!</h1>

    <?php
    header("refresh:3;url=index.php?page=login");
    echo "<div id='loginmsg'>Hallo " . $_SESSION['username'] . "! Danke für die Registrierung!</div>";
    exit;
    ?>

</div>
