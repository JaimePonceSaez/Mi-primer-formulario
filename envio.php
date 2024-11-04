<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<h3>Datos Recibidos:</h3>";
            echo "<p>Nombre: " . htmlspecialchars($_POST['nombre']) . "</p>";
            echo "<p>Correo Electrónico: " . htmlspecialchars($_POST['email']) . "</p>";
            echo "<p>Mensaje: " . htmlspecialchars($_POST['mensaje']) . "</p>";
            echo "<p>Tipo de Usuario: " . (isset($_POST['tipo_usuario']) ? htmlspecialchars($_POST['tipo_usuario']) : 'No especificado') . "</p>";
        }
    ?>