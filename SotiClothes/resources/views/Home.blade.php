<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <!-- Tailwind CSS via Vite -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
</head>
<body class="bg-[#D2C1B6]">
  <div class="flex flex-row gap-8 p-4">
    <!-- Sección de prendas (izquierda) -->
    <div class="monito grid grid-cols-2 gap-2 w-2/3 max-w-xl">
      <!-- Columna Hombres -->
      <div>
        <h2 class="text-xl font-bold mb-2 text-center">Hombre</h2>
        <ul class="space-y-2 flex flex-col place-items-center">
          <li class="sombrero bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Sombrero</li>
          <li class="gafas bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Gafas</li>
          <li class="camisa bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Camisa</li>
          <li class="cinturon bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Cinturón</li>
          <li class="pantalon bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Pantalón</li>
          <li class="zapatos bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Zapatos</li>
        </ul>
      </div>
      <!-- Columna Mujeres -->
      <div>
        <h2 class="text-xl font-bold mb-2 text-center">Mujer</h2>
        <ul class="space-y-2 text-center flex flex-col place-items-center">
          <li class="sombrero bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Sombrero</li>
          <li class="gafas bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Gafas</li>
          <li class="camisa bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Camisa</li>
          <li class="cinturon bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Cinturón</li>
          <li class="pantalon bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Pantalón</li>
          <li class="zapatos bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 ">Zapatos</li>
        </ul>
      </div>
    </div>
    <!-- Placeholder para carrusel (derecha) -->
    <div class="flex-1 flex items-center justify-center">
      <div class="w-full h-96 bg-white/60 border-2 border-dashed border-gray-400 rounded-lg flex items-center justify-center text-gray-500">
        Carrusel aquí
      </div>
    </div>
  </div>
  <div class="mt-8 fixed bottom-0 w-full">
    <script src="https://kit.fontawesome.com/bf1acce7dc.js" crossorigin="anonymous"></script>
      <footer class="bg-[#1B3C53] text-white text-center py-8">
        
        <ul class="flex-col justify-center gap-4 mt-2 m-8">
          <li class="text-lg m-6"> &copy; 2025 SotiClothes. Todos los derechos reservados.</li>
          <li><i class="fa-brands fa-square-github fa-2xl"></i></li>
          <li><i class="fa-brands fa-square-whatsapp fa-2xl"></i></li>
          <li><i class="fa-solid fa-envelope fa-2xl"></i></li>
        </ul>
      </footer>
  </div>
</body>
</html>