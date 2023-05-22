<!DOCTYPE html>
<html>
<head>
    <title>[DEMO] Autoescalado de la Aplicación  Andreani</title>
        <link rel="icon" type="image/x-icon" href="https://www.andreani.com/assets/images/favicon.png" />
 <meta charset="UTF-8">
</head>
<body>
    <script>
        // Obtener el elemento del contador
        var contadorElemento = document.getElementById('contador');
    
        // Obtener el valor actual del contador desde el almacenamiento local, si existe
        var contador = localStorage.getItem('contador');
    
        // Verificar si el contador existe en el almacenamiento local
        if (contador) {
          contador = parseInt(contador); // Convertir a número entero
        } else {
          contador = 0; // Establecer el contador a 0 si no existe en el almacenamiento local
        }
    
        // Incrementar el contador
        contador++;
    
        // Actualizar el valor del contador en el elemento HTML
        contadorElemento.textContent = contador;
    
        // Guardar el nuevo valor del contador en el almacenamiento local
        localStorage.setItem('contador', contador.toString());
      </script>

    <div align="center">
        <h1>¡Test web APP para auto escalado</h1>
        <img src="https://images.ctfassets.net/c63hsprlvlya/4HvAMdBskQqJ8Y2LnzxnEG/6c6d5e788bdcf1e48cd4eab17ebcf5a1/post_image_open_shift_0.png">
        <h1>Consultas en tiempo real para escalar: <span id="contador">0</span></h1>

    </div>
     
</body>
</html>
