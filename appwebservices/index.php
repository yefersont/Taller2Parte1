<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 2 parte 1</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4;">

    <form action="cliente.php" method="POST" 
        style="background: white; padding: 3%; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); text-align: center; width: 80%; max-width: 400px;">
        
        <label for="num1" 
            style="display: block; font-size: 150%; font-weight: bold; margin-bottom: 3%; color: #333;">
            Calculadora
        </label>

        <input type="text" name="num1" id="num1" required 
            style="width: 100%; padding: 3%; font-size: 120%; border: 2px solid #ccc; border-radius: 8px; text-align: center; margin-bottom: 10px;"
            oninput="validarInput(this)" placeholder="Ingrese el primer número">

        <select name="operacion" id="operacion" required 
            style="width: 100%; padding: 3%; font-size: 120%; border: 2px solid #ccc; border-radius: 8px; text-align: center; margin-bottom: 10px;">
            <option value="">Seleccione una operación</option>
            <option value="+">Suma (+)</option>
            <option value="-">Resta (-)</option>
            <option value="*">Multiplicación (*)</option>
            <option value="/">División (/)</option>
        </select>

        <input type="text" name="num2" id="num2" required 
            style="width: 100%; padding: 3%; font-size: 120%; border: 2px solid #ccc; border-radius: 8px; text-align: center; margin-bottom: 10px;"
            oninput="validarInput(this)" placeholder="Ingrese el segundo número">

        <button type="submit" style="width: 100%; padding: 3%; font-size: 120%; border: none; border-radius: 8px; background-color: #28a745; color: white; cursor: pointer;">
            Calcular
        </button>
        <p id="error" style="color: red; font-size: 90%; display: none; margin-top: 5px;">
            Solo se permiten números.
        </p>
    </form>

    <script>
        function validarInput(input) {
            const valor = input.value;
            const regex = /^[0-9]*$/; 
            const mensajeError = document.getElementById("error");

            if (!regex.test(valor)) {
                mensajeError.style.display = "block";
                input.value = valor.slice(0, -1); 
            } else {
                mensajeError.style.display = "none";
            }
        }
    </script>

</body>
</html>
