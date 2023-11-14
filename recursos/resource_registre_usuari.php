<html lang="ca">
    <head>
        <title>Registre d'usuari</title>
    </head>
    <body>
        <form action="controlador/registrarUsuari.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="direccio">Adreça:</label>
        <input type="text" id="direccio" name="direccio" required><br>

        <label for="codi_postal">Codi Postal:</label>
        <input type="text" id="codi_postal" name="codi_postal" required><br>

        <label for="poblacio">Poblacio:</label>
        <input type="text" id="poblacio" name="poblacio" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Registrar">
    </form>
    </body>
</html>