<?php

$options = array(
    'location' => 'http://localhost/webservices/appwebservices/server.php',
    'uri' => 'http://localhost/webservices/appwebservices/'
);

$client = new SoapClient(NULL, $options);

$numero1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
$numero2 = isset($_POST['num2']) ? $_POST['num2'] : 0;
$operador = isset($_POST['operacion']) ? $_POST['operacion'] : '+';

$resultado = $client->analisis($numero1, $numero2, $operador);
$saludo = $client->saludar("Yefer");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4;">

    <div style="background: white; padding: 3%; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); text-align: center; width: 80%; max-width: 400px;">
        
        <h2 style="font-size: 150%; font-weight: bold; color: #333;"><?php echo $saludo; ?></h2>

        <p style="font-size: 120%; color: #666;">El resultado de <b><?php echo "$numero1 $operador $numero2"; ?></b> es:</p>

        <div style="font-size: 200%; font-weight: bold; color: #007BFF; background: #EAF2FF; padding: 10px; border-radius: 8px; margin-top: 10px;">
            <?php echo $resultado; ?>
        </div>

        <a href="index.php" style="display: inline-block; margin-top: 20px; padding: 10px 20px; font-size: 100%; color: white; background: #007BFF; text-decoration: none; border-radius: 5px;">
            Volver
        </a>

    </div>

</body>
</html>
