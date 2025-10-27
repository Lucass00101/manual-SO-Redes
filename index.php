<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Manuales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Mismo fondo de los manuales */
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh; /* Centra verticalmente */
        }

        .container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 8px; /* Bordes redondeados */
            box-shadow: 0 0 15px rgba(0,0,0,0.1); /* Sombra del manual 2 */
            width: 100%;
            max-width: 600px;
        }

        h1 {
            color: #333;
            border-bottom: 2px solid #0056b3; /* Borde azul del manual 1 */
            padding-bottom: 10px;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Estilo para los botones */
        .btn {
            display: block; /* Ocupa todo el ancho */
            background-color: #0056b3; /* Color primario azul */
            color: #ffffff;
            padding: 15px 20px;
            margin-bottom: 15px;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            font-size: 1.1em;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #004494; /* Azul más oscuro al pasar el ratón */
        }

        /* Estilo secundario para el segundo botón */
        .btn-secondary {
            background-color: #555; /* Gris oscuro */
        }

        .btn-secondary:hover {
            background-color: #333; /* Gris más oscuro */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Índice de Manuales</h1>
        
        <a href="manualSubredes.html" class="btn">
            Manual Sub-redes y Sumar usuarios
        </a>
        
        <a href="manualUsuarios.html" class="btn btn-secondary">
            Manual Crear un usuario
        </a>
    </div>

</body>

</html>
