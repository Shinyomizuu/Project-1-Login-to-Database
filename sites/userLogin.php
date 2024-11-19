<?php 
include("../modules/config.php"); // Hier wird die Konfiguration eingebunden


include("../sites/navbar.php"); // Hier wird die Navbar eingebunden
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register / Login</title>
    <link rel="stylesheet" href="../assets/styles.css">

</head>
<body>
    <div class="form-upper">
        <div class="form-container">
            <!-- Registrierungsformular -->
            <div id="register-form">
                <h2>Register</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Gib deinen Namen ein" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_repeat">Password wiederholen:</label>
                        <input type="password" id="password_repeat" name="password_repeat" placeholder="Password wiederholen" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail:</label>
                        <input type="email" id="email" name="email" placeholder="Gib deine E-Mail-Adresse ein" required>
                    </div>
                    <button type="submit">Senden</button>
                </form>
                <div class="login-link">
                    <p>Bereits ein Konto? <a href="#" id="show-login">Login</a></p>
                </div>
            </div>

            <!-- Loginformular -->
            <div id="login-form" class="hidden">
                <h2>Login</h2>
                <form action="/login" method="POST">
                    <div class="form-group">
                        <label for="login-email">E-Mail:</label>
                        <input type="email" id="login-email" name="email" placeholder="Gib deine E-Mail-Adresse ein" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password:</label>
                        <input type="password" id="login-password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit">Einloggen</button>
                </form>
                <div class="login-link">
                    <p>Noch kein Konto? <a href="#" id="show-register">Register</a></p>
                </div>
            </div>
        </div>
    </div>

   <script src="../assets/js/loginswitch.js"></script>
</body>
</html>
