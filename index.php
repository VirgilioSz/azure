<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo en PHP - Azure</title>
</head>
<body>
    <h1><?php echo "¡Hola Mundo desde Azure! 🚀"; ?></h1>
    <p>Este es un archivo PHP básico desplegado en Azure App Service.</p>
    
    <?php
    // Info adicional del servidor (opcional)
    echo "<p><strong>Servidor:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
    echo "<p><strong>PHP version:</strong> " . phpversion() . "</p>";
    ?>
</body>
</html>