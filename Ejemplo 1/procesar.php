<?php
// Función en PHP para validar una dirección de correo electrónico usando expresiones regulares
function validarEmail($email) {
    // Expresión regular para validar una dirección de correo electrónico
    $patron = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    // Utilizamos la función preg_match() para verificar si el email cumple con el patrón
    return preg_match($patron, $email);
}

// Verificar si se ha enviado una dirección de correo a través del formulario
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    
    // Llamar a la función para validar la dirección de correo
    $es_valido = validarEmail($email);
    
    // Mostrar el resultado
    echo "<h2>Resultado</h2>";
    if ($es_valido) {
        echo "<p>La dirección de correo electrónico $email es válida.</p>";
    } else {
        echo "<p>La dirección de correo electrónico $email no es válida.</p>";
    }
} else {
    // Mostrar un mensaje de error si no se ha enviado una dirección de correo
    echo "<h2>Error</h2>";
    echo "<p>No se ha enviado ninguna dirección de correo electrónico.</p>";
}
?>
