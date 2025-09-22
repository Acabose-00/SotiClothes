<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f2f2f2;
    }

    .monito {
      position: relative;
      width: 120px;
      height: 300px;
    }

    /* Cabeza */
    .cabeza {
      width: 60px;
      height: 60px;
      border: 3px solid black;
      border-radius: 50%;
      position: absolute;
      top: 0;
      left: 30px;
      background: #fff;
    }

    /* Torso */
    .torso {
      width: 10px;
      height: 100px;
      background: black;
      position: absolute;
      top: 60px;
      left: 55px;
    }

    /* Brazos */
    .brazo {
      width: 70px;
      height: 8px;
      background: black;
      position: absolute;
      top: 80px;
      left: 25px;
    }
    .brazo.izq { transform: rotate(25deg); }
    .brazo.der { transform: rotate(-25deg); }

    /* Piernas */
    .pierna {
      width: 8px;
      height: 90px;
      background: black;
      position: absolute;
      top: 160px;
    }
    .pierna.izq { left: 40px; transform: rotate(10deg); }
    .pierna.der { left: 70px; transform: rotate(-10deg); }

    /* --- Ropa --- */
    .polera {
      width: 70px;
      height: 60px;
      background: lightblue;
      border: 2px solid #333;
      position: absolute;
      top: 60px;
      left: 25px;
      z-index: 1; /* encima del torso */
      text-align: center;
      font-size: 12px;
    }

    .pantalon {
      width: 60px;
      height: 80px;
      background: navy;
      border: 2px solid #333;
      position: absolute;
      top: 120px;
      left: 30px;
      z-index: 1;
      text-align: center;
      font-size: 12px;
      color: white;
    }
  </style>
</head>
<body>
  <div class="monito">
    <div class="cabeza"></div>
    <div class="torso"></div>
    <div class="brazo izq"></div>
    <div class="brazo der"></div>
    <div class="pierna izq"></div>
    <div class="pierna der"></div>

    <!-- Prendas -->
    <div class="polera">Polera</div>
    <div class="pantalon">Pantalón</div>
  </div>
</body>
</html>