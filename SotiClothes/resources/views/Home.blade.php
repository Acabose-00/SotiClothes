<!DOCTYPE html>
<html lang="en">
  <!-- Tailwind CSS via Vite -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<header class="bg-[#1B3C53] text-white font-semibold flex items-center justify-between p-4 w-full select-none">
  <div class="flex items-center">
    <span class="font-bold text-lg ml-12">Logo</span>
  </div>
  <nav>
    <ul class="flex gap-4 ml-64">
      <li class="hover:underline cursor-pointer">Inicio</li>
      <li class="hover:underline cursor-pointer">Hombre</li>
      <li class="hover:underline cursor-pointer">Mujer</li>
      <li class="hover:underline cursor-pointer">Ofertas</li>
      <li class="hover:underline cursor-pointer">Nosotros</li>
    </ul>
  </nav>
  <div class="flex items-center gap-4 flex-1 justify-end">
    <input type="text" placeholder="Buscar..." class="italic focus:outline-2 focus:outline-gray-300 border hover:bg-[#456882] rounded-full px-1 py-1 indent-3">
    <button class="bg-[#234C6A] border rounded-full w-9 h-9 flex items-center justify-center transition duration-300 ease-in-out hover:bg-[#456882] hover:text-white hover:scale-110">
      <i class="fa-solid fa-magnifying-glass"></i>
    </button>
    <div class="hover:underline cursor-pointer ml-28"><i class="fa-solid fa-circle-user fa-2xl"></i></div>
    <div class="mr-8 hover:underline cursor-pointer"><i class="fa-solid fa-cart-shopping fa-xl"></i></div>
  </div>
</header>

<body class="bg-[#D2C1B6]">
  <div class="flex flex-row gap-8 p-4">
    <!-- Sección de prendas (izquierda) -->
    <div class="monito grid grid-cols-2 gap-2 w-2/3 max-w-xl select-none">
      <!-- Columna Hombres -->
      <div>
        <h2 class="text-xl font-bold mb-2 text-center">Hombre</h2>
        <ul class="space-y-2 flex flex-col place-items-center">
          <li class="sombrero bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Sombrero</li>
          <li class="gafas bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Gafas</li>
          <li class="camisa bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Camisa</li>
          <li class="cinturon bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Cinturón</li>
          <li class="pantalon bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Pantalón</li>
          <li class="zapatos bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Zapatos</li>
        </ul>
      </div>
      <!-- Columna Mujeres -->
      <div>
        <h2 class="text-xl font-bold mb-2 text-center">Mujer</h2>
        <ul class="space-y-2 text-center flex flex-col place-items-center">
          <li class="sombrero bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Sombrero</li>
          <li class="gafas bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Gafas</li>
          <li class="camisa bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Camisa</li>
          <li class="cinturon bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Cinturón</li>
          <li class="pantalon bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Pantalón</li>
          <li class="zapatos bg-[#234C6A] transition delay-70 duration-300 hover:bg-[#1B3C53] hover:scale-110 shadow-md  text-white text-center rounded-sm w-48 p-2">Zapatos</li>
        </ul>
      </div>
    </div>
    <!-- Placeholder para carrusel (derecha) -->

  </div>
  <div class="mt-8 fixed bottom-0 w-full">
    <script src="https://kit.fontawesome.com/bf1acce7dc.js" crossorigin="anonymous"></script>
      <footer class="bg-[#1B3C53] text-white text-center py-8">
        <ul class="flex flex-col justify-center gap-4 mt-2 ">
          <li><i class="fa-brands fa-square-github fa-2xl"></i></li>
          <li><i class="fa-brands fa-square-whatsapp fa-2xl"></i></li>
          <li><i class="fa-solid fa-envelope fa-2xl"></i></li>
           <li class="text-sm"> &copy; 2025 SotiClothes. Todos los derechos reservados.</li>
        </ul>
      </footer>
  </div>
</body>
</html>