<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--=============== FAVICON ===============-->


  <!--=============== ICONS ===============-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="/css/index.css">

  <title>Consesionaria Assaf</title>
</head>

<body>
  <!--========== HEADER ==========-->
  <header class="header">
    <!-- NAVBAR -->
    <nav class="navbar">
      <!--========== BUSCADOR ==========-->
      <div class="bucador">
        <form class='buscador' id="form1" name="form1" method="get" action="conexion_concensionaria.php">
          <label for="barra"></label>
          <input class="btn" type="submit" name="search" id="search" value="Buscar" />
          <input class='search' type="text" name="txt" id="txt" />
        </form>
        <!--========== PAGES ==========-->
      </div>
      <a href="index.html" class="link" target="_blank"><span class='fas fa-home'></span>Inicio</a>
      <a href="/paginas/productos.html" class="link" target="_blank"><span class='fas fa-car'></span>Productos</a>
      <!--========== LOGO ==========-->
      <picture class="logo">
        <img class="logo" src="/assets/logo2.png" alt="Logo">
      </picture>
      <a href="/paginas/carrito.html" class="link" target="_blank"><span class='fas fa-shopping-cart'></span>Carrito</a>
      <a href="/paginas/envio.html" class="link" target="_blank"><span class='fas fa-phone'></span>Envio</a>
      <a href="/paginas/ingreso.html" class="link" target="_blank"><span class="fas fa-user"></span>Ingresar</a>
    </nav>
  </header>

  <body>
    <style type="text/css">
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;

      }

      body {
        background: #4CA1AF;

        background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);

        background: linear-gradient(to right, #C4E0E5, #4CA1AF);

      }

      .titulo {
        margin-top: 40px;
        text-align: center;
        font-size: 47px;
        font-family: 'Montserrat', sans-serif;
        margin-bottom: 50px;
      }

      .formulario {
        background: rgba(255, 255, 255, 0.15);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(13.5px);
        -webkit-backdrop-filter: blur(13.5px);
        border-radius: 10px;
        margin-left: 40px;
        font-size: 20px;
        font-family: 'Poppins', sans-serif;
        width: 500px;
        padding: 20px 10px 20px 20px;
        padding-bottom: 5px;
        border-radius: 10px;
        margin: auto;

      }

      input {
        font-size: 16px;
        background: rgba(255, 255, 255, 0.15);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(13.5px);
        -webkit-backdrop-filter: blur(13.5px);
        border-radius: 5px;
        border: none;
        color: black;
        font-family: 'Poppins', sans-serif;

      }

      .btn-ingre {
        margin-top: 10px;
        font-size: 18px;
        background-color: #4CA1AF;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 7px;
      }
    </style>


    <h1 class="titulo">Ingrese sus datos </h1>
    <form id="form1" name="form1" method="get" action="insertar502.php">
  <p>
    <label for="txt1">Codigo de Barras</label>
    <input type="text" name="txt1" id="txt1" />
  </p>
  <p>
    <label for="txt2">Descripcion</label>
    <input type="text" name="txt2" id="txt2" />
  </p>
  <p>
    <label for="txt3">Costo</label>
    <input type="text" name="txt3" id="txt3" />
  </p>
  <p>
    <label for="txt4">Clave del Proveedor</label>
    <input type="text" name="txt4" id="txt4" />
  </p>
  <p>
    <input type="submit" name="btn" id="btn" value="Enviar" />
  </p>
</form>
  </body>
</body>

</html>