<?php
// index.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Hola mundo - Jafet Escobar</title>
  <style>
    /* Reset básico */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Estilos generales */
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      color: #333;
      line-height: 1.6;
    }

    /* Contenedor principal */
    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    /* Encabezado */
    header {
      background-color: #003366;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      font-size: 1.8rem;
      margin-bottom: 5px;
    }

    header p {
      font-size: 1rem;
      opacity: 0.9;
    }

    /* Contenido principal */
    .content {
      padding: 20px;
    }

    .content img {
      display: block;
      max-width: 100%;
      margin: 0 auto 20px auto;
      border: 2px solid #ddd;
      border-radius: 6px;
    }

    .content p {
      margin-bottom: 15px;
      font-size: 1.1rem;
      text-align: center;
    }

    /* Pie de página */
    footer {
      background-color: #003366;
      color: #fff;
      text-align: center;
      padding: 10px;
      font-size: 0.9rem;
    }

    footer a {
      color: #ffd700;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="container">
    <header>
      <h1>Hola mundo</h1>
      <p>Soy Jafet Escobar</p>
    </header>

    <div class="content">
    <img src="/actividad_03/ai_human.webp" alt="Imagen representativa" />
      <p>
        Bienvenido a mi página de ejemplo en PHP.  
        Aquí mostramos cómo incluir una imagen local y un estilo sencillo, 
        con una estructura que luzca limpia y profesional.
      </p>
      <p>
        <?php
          // Imprime un mensaje desde PHP
          echo "Este texto está siendo generado dinámicamente con PHP.";
        ?>
      </p>
    </div>

    <footer>
      &copy; <?php echo date('Y'); ?> - Desarrollado por 
      <a href="https://example.com" target="_blank">Jafet Escobar</a>
    </footer>
  </div>

</body>
</html>