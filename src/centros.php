<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Centros Educativos</title>
  <meta
    name="description"
    content="Programas de formación profesional de madera, mueble y corcho en las Islas Canarias" />
  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin="" />
  <script
    src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
  <meta
    name="description"
    content="Programas de formación profesional de madera, mueble y corcho en las Islas Canarias" />
  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center mb-4 md:mb-0">
          <div class="text-3xl font-bold text-brown-700">
            <span style="color: var(--primary-color)">FP</span> Madera y
            Mueble
          </div>
        </div>
        <nav class="flex flex-wrap justify-center">
          <a
            href="index.php"
            class="px-3 py-2 text-sm font-medium hover:text-amber-700">Inicio</a>
          <a
            href="centros.php"
            class="px-3 py-2 text-sm font-medium hover:text-amber-700">Centros Educativos</a>
          <a
            href="programas.php"
            class="px-3 py-2 text-sm font-medium hover:text-amber-700">Programas Formativos</a>
          <a
            href="colaboracion.php"
            class="px-3 py-2 text-sm font-medium hover:text-amber-700">Colaboración Empresarial</a>
          <a
            href="innovacion.php"
            class="px-3 py-2 text-sm font-medium hover:text-amber-700">Innovación</a>
          <a
            href="noticias.php"
            class="px-3 py-2 text-sm font-medium hover:text-amber-700">Noticias</a>
          <a
            href="recursos.php"
            class="px-3 py-2 text-sm font-medium hover:text-amber-700">Recursos</a>
          <a
            href="contacto.php"
            class="px-3 py-2 text-sm font-medium hover:text-amber-700">Contacto</a>
        </nav>
      </div>
    </div>
  </header>

  <!-- SECCIÓN CENTROS -->
  <section id="centros" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="section-title centered text-3xl font-bold text-center mb-12">
        Centros Educativos
      </h2>
      <p class="text-center max-w-3xl mx-auto mb-12">
        Conoce los centros educativos que imparten formación profesional en el
        sector de la madera, el mueble y el corcho en las Islas Canarias. Cada
        centro cuenta con instalaciones especializadas y un equipo docente
        cualificado.
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
        <!-- GRAN CANARIA -->
        <div
          id="tony-gallardo"
          class="card bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-4 wood-bg">
            <div class="flex justify-center items-center h-32">
              <div class="text-center">
                <img
                  src="img/tonygallardo.jpg"
                  alt="Logo CIFP Tony Gallardo"
                  class="h-28 mx-auto bg-white rounded-full p-2" />
              </div>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">CIFP Tony Gallardo</h3>
            <p class="text-sm text-gray-600 mb-4">
              Las Palmas de Gran Canaria, Gran Canaria
            </p>
            <div class="mb-4">
              <div class="flex items-center mb-2">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">Ctra. de las Coloradas, 1</span>
              </div>
              <div class="flex items-center mb-2">
                <i class="fas fa-phone text-blue-600 mr-2"></i>
                <span class="text-sm">928 79 62 92</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-globe text-green-600 mr-2"></i>
                <a
                  href="https://www3.gobiernodecanarias.org/medusa/edublog/cifptonygallardo/"
                  target="_blank"
                  class="text-sm text-blue-600 hover:underline">Web oficial</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="font-medium mb-2">Ciclos formativos:</h4>
              <ul class="text-sm space-y-1 pl-5 list-disc">
                <li>Formación Profesional Básica en Carpintería y Mueble</li>
                <li>Grado Medio en Instalación y Amueblamiento</li>
                <li>Grado Superior en Diseño y Amueblamiento</li>
              </ul>
            </div>
            <a
              href="https://www.gobiernodecanarias.org/educacion/web/centros/centros_educativos/buscador-centros/resultados/detalle?codigo=35015887"
              class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium mt-2"
              target="_blank">Ver detalles</a>
          </div>
        </div>

        <div
          id="ana-luisa"
          class="card bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-4 wood-bg">
            <div class="flex justify-center items-center h-32">
              <div class="text-center">
                <img
                  src="img/analuisa.jpg"
                  alt="Logo IES Ana Luisa Benítez"
                  class="h-28 mx-auto bg-white rounded-full p-2" />
              </div>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">IES Ana Luisa Benítez</h3>
            <p class="text-sm text-gray-600 mb-4">
              Las Palmas de Gran Canaria, Gran Canaria
            </p>
            <div class="mb-4">
              <div class="flex items-center mb-2">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">C/ Ana Benítez, 15</span>
              </div>
              <div class="flex items-center mb-2">
                <i class="fas fa-phone text-blue-600 mr-2"></i>
                <span class="text-sm">928 35 77 97</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-globe text-green-600 mr-2"></i>
                <a
                  href="https://www3.gobiernodecanarias.org/medusa/edublog/iesanaluisabenitez/"
                  target="_blank"
                  class="text-sm text-blue-600 hover:underline">Web oficial</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="font-medium mb-2">Ciclos formativos:</h4>
              <ul class="text-sm space-y-1 pl-5 list-disc">
                <li>Formación Profesional Básica en Carpintería y Mueble</li>
                <li>Grado Medio en Carpintería y Mueble</li>
              </ul>
            </div>
            <a
              href="https://www.gobiernodecanarias.org/educacion/web/centros/centros_educativos/buscador-centros/resultados/detalle?codigo=35007842"
              class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium mt-2"
              target="_blank">Ver detalles</a>
          </div>
        </div>

        <div
          id="fernando-sagaseta"
          class="card bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-4 wood-bg">
            <div class="flex justify-center items-center h-32">
              <div class="text-center">
                <img
                  src="img/fernandosagaseta.jpg"
                  alt="Logo IES Fernando Sagaseta"
                  class="h-28 mx-auto bg-white rounded-full p-2" />
              </div>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">IES Fernando Sagaseta</h3>
            <p class="text-sm text-gray-600 mb-4">
              Valle de Jinámar, Gran Canaria
            </p>
            <div class="mb-4">
              <div class="flex items-center mb-2">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">C/ Manuel Alemán Álamo, 1</span>
              </div>
              <div class="flex items-center mb-2">
                <i class="fas fa-phone text-blue-600 mr-2"></i>
                <span class="text-sm">928 71 73 22</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-globe text-green-600 mr-2"></i>
                <a
                  href="https://www3.gobiernodecanarias.org/medusa/edublog/iesfernandosagaseta/"
                  target="_blank"
                  class="text-sm text-blue-600 hover:underline">Web oficial</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="font-medium mb-2">Ciclos formativos:</h4>
              <ul class="text-sm space-y-1 pl-5 list-disc">
                <li>Formación Profesional Básica en Carpintería y Mueble</li>
                <li>Grado Medio en Instalación y Amueblamiento</li>
              </ul>
            </div>
            <a
              href="https://www.gobiernodecanarias.org/educacion/web/centros/centros_educativos/buscador-centros/resultados/detalle?codigo=35014664"
              class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium mt-2"
              target="_blank">Ver detalles</a>
          </div>
        </div>

        <div
          id="villa-aguimes"
          class="card bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-4 wood-bg">
            <div class="flex justify-center items-center h-32">
              <div class="text-center">
                <img
                  src="img/aguimes.png"
                  alt="Logo CIFP Villa de Agüimes"
                  class="h-28 mx-auto bg-white rounded-full p-2" />
              </div>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">CIFP Villa de Agüimes</h3>
            <p class="text-sm text-gray-600 mb-4">Agüimes, Gran Canaria</p>
            <div class="mb-4">
              <div class="flex items-center mb-2">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">C/ Alcorac, 50</span>
              </div>
              <div class="flex items-center mb-2">
                <i class="fas fa-phone text-blue-600 mr-2"></i>
                <span class="text-sm">928 18 50 90</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-globe text-green-600 mr-2"></i>
                <a
                  href="https://www3.gobiernodecanarias.org/medusa/edublog/cifpvilladeaguimes/"
                  target="_blank"
                  class="text-sm text-blue-600 hover:underline">Web oficial</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="font-medium mb-2">Ciclos formativos:</h4>
              <ul class="text-sm space-y-1 pl-5 list-disc">
                <li>Grado Medio en Instalación y Amueblamiento</li>
              </ul>
            </div>
            <a
              href="https://www.gobiernodecanarias.org/educacion/web/centros/centros_educativos/buscador-centros/resultados/detalle?codigo=35014664"
              class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium mt-2" target="_blank">Ver detalles</a>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- TENERIFE/LA PALMA -->
        <div
          id="geneto"
          class="card bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-4 wood-bg">
            <div class="flex justify-center items-center h-32">
              <div class="text-center">
                <img
                  src="img/iesgeneto.webp"
                  alt="Logo IES Geneto"
                  class="h-28 mx-auto bg-white rounded-full p-2" />
              </div>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">IES Geneto</h3>
            <p class="text-sm text-gray-600 mb-4">
              San Cristóbal de La Laguna, Tenerife
            </p>
            <div class="mb-4">
              <div class="flex items-center mb-2">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">C/ Domingo Glez. Pérez, 11</span>
              </div>
              <div class="flex items-center mb-2">
                <i class="fas fa-phone text-blue-600 mr-2"></i>
                <span class="text-sm">922 26 49 52</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-globe text-green-600 mr-2"></i>
                <a
                  href="https://www3.gobiernodecanarias.org/medusa/edublog/iesgeneto/"
                  target="_blank"
                  class="text-sm text-blue-600 hover:underline">Web oficial</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="font-medium mb-2">Ciclos formativos:</h4>
              <ul class="text-sm space-y-1 pl-5 list-disc">
                <li>Formación Profesional Básica en Carpintería y Mueble</li>
                <li>Grado Medio en Carpintería y Mueble</li>
                <li>Grado Superior en Diseño y Amueblamiento</li>
              </ul>
            </div>
            <a
              href="https://www.gobiernodecanarias.org/educacion/web/centros/centros_educativos/buscador-centros/resultados/detalle?codigo=38010414"
              class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium mt-2"
              target="_blank"
              gtty>Ver detalles</a>
          </div>
        </div>

        <div
          id="la-orotava"
          class="card bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-4 wood-bg">
            <div class="flex justify-center items-center h-32">
              <div class="text-center">
                <img
                  src="img/laorotava.jpg"
                  alt="Logo IES La Orotava"
                  class="h-28 mx-auto bg-white rounded-full p-2" />
              </div>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">
              IES La Orotava-Manuel González Pérez
            </h3>
            <p class="text-sm text-gray-600 mb-4">La Orotava, Tenerife</p>
            <div class="mb-4">
              <div class="flex items-center mb-2">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">Avda. Comunidad Iberoamericana, s/n</span>
              </div>
              <div class="flex items-center mb-2">
                <i class="fas fa-phone text-blue-600 mr-2"></i>
                <span class="text-sm">922 32 15 97</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-globe text-green-600 mr-2"></i>
                <a
                  href="https://www3.gobiernodecanarias.org/medusa/edublog/ieslaorotava/"
                  target="_blank"
                  class="text-sm text-blue-600 hover:underline">Web oficial</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="font-medium mb-2">Ciclos formativos:</h4>
              <ul class="text-sm space-y-1 pl-5 list-disc">
                <li>Grado Medio en Carpintería y Mueble</li>
                <li>Grado Superior en Diseño y Amueblamiento</li>
              </ul>
            </div>
            <a
              href="https://www.gobiernodecanarias.org/educacion/web/centros/centros_educativos/buscador-centros/resultados/detalle?codigo=38003631"
              class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium mt-2" target="_blank">Ver detalles</a>
          </div>
        </div>

        <div
          id="mencey-acaymo"
          class="card bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-4 wood-bg">
            <div class="flex justify-center items-center h-32">
              <div class="text-center">
                <img
                  src="img/menceyacaymo.jpg"
                  alt="Logo IES Mencey Acaymo"
                  class="h-28 mx-auto bg-white rounded-full p-2" />
              </div>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">IES Mencey Acaymo</h3>
            <p class="text-sm text-gray-600 mb-4">Güímar, Tenerife</p>
            <div class="mb-4">
              <div class="flex items-center mb-2">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">C/ Poeta Ariosto, 9</span>
              </div>
              <div class="flex items-center mb-2">
                <i class="fas fa-phone text-blue-600 mr-2"></i>
                <span class="text-sm">922 51 11 21</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-globe text-green-600 mr-2"></i>
                <a
                  href="https://www3.gobiernodecanarias.org/medusa/edublog/iesmenceyacaymo/"
                  target="_blank"
                  class="text-sm text-blue-600 hover:underline">Web oficial</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="font-medium mb-2">Ciclos formativos:</h4>
              <ul class="text-sm space-y-1 pl-5 list-disc">
                <li>Formación Profesional Básica en Carpintería y Mueble</li>
              </ul>
            </div>
            <a
              href="https://www.gobiernodecanarias.org/educacion/web/centros/centros_educativos/buscador-centros/resultados/detalle?codigo=38001644"
              class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium mt-2">Ver detalles</a>
          </div>
        </div>

        <div
          id="las-brenas"
          class="card bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-4 wood-bg">
            <div class="flex justify-center items-center h-32">
              <div class="text-center">
                <img
                  src="img/lasbrenas.jpg"
                  alt="Logo IES Las Breñas"
                  class="h-28 mx-auto bg-white rounded-full p-2" />
              </div>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">IES Las Breñas</h3>
            <p class="text-sm text-gray-600 mb-4">Breña Baja, La Palma</p>
            <div class="mb-4">
              <div class="flex items-center mb-2">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">C/ San José, 212</span>
              </div>
              <div class="flex items-center mb-2">
                <i class="fas fa-phone text-blue-600 mr-2"></i>
                <span class="text-sm">922 47 86 11</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-globe text-green-600 mr-2"></i>
                <a
                  href="https://www3.gobiernodecanarias.org/medusa/edublog/ieslasbrenas/"
                  target="_blank"
                  class="text-sm text-blue-600 hover:underline">Web oficial</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="font-medium mb-2">Ciclos formativos:</h4>
              <ul class="text-sm space-y-1 pl-5 list-disc">
                <li>Formación Profesional Básica en Carpintería y Mueble</li>
                <li>Grado Medio en Carpintería y Mueble</li>
              </ul>
            </div>
            <a
              href="https://www.gobiernodecanarias.org/educacion/web/centros/centros_educativos/buscador-centros/resultados/detalle?codigo=38012010"
              class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium mt-2">Ver detalles</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MAPA -->
  <section id="mapa" class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="section-title centered text-3xl font-bold text-center mb-12">
        Mapa de Centros Educativos
      </h2>
      <p class="text-center max-w-3xl mx-auto mb-10">
        Explora los centros educativos que ofrecen formación profesional en
        madera, mueble y corcho en las diferentes islas del archipiélago
        canario. Haz clic en los marcadores para obtener más información.
      </p>

      <!-- Mapa interactivo con leaflet.js -->
      <div class="map-container">
        <div id="map"></div>
      </div>

      <div
        class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
        <div class="bg-amber-50 p-4 rounded-lg shadow">
          <h3 class="font-bold text-lg mb-2 text-amber-900">Gran Canaria</h3>
          <ul class="space-y-2">
            <li class="flex items-center">
              <i class="fas fa-map-marker-alt text-red-600 mr-2"></i> CIFP
              Tony Gallardo
            </li>
            <li class="flex items-center">
              <i class="fas fa-map-marker-alt text-red-600 mr-2"></i> IES Ana
              Luisa Benítez
            </li>
            <li class="flex items-center">
              <i class="fas fa-map-marker-alt text-red-600 mr-2"></i> IES
              Fernando Sagaseta
            </li>
            <li class="flex items-center">
              <i class="fas fa-map-marker-alt text-red-600 mr-2"></i> CIFP
              Villa de Agüimes
            </li>
          </ul>
        </div>

        <div class="bg-amber-50 p-4 rounded-lg shadow">
          <h3 class="font-bold text-lg mb-2 text-amber-900">Tenerife</h3>
          <ul class="space-y-2">
            <li class="flex items-center">
              <i class="fas fa-map-marker-alt text-red-600 mr-2"></i> IES
              Geneto
            </li>
            <li class="flex items-center">
              <i class="fas fa-map-marker-alt text-red-600 mr-2"></i> IES La
              Orotava-Manuel González Pérez
            </li>
            <li class="flex items-center">
              <i class="fas fa-map-marker-alt text-red-600 mr-2"></i> IES
              Mencey Acaymo
            </li>
          </ul>
        </div>

        <div class="bg-amber-50 p-4 rounded-lg shadow">
          <h3 class="font-bold text-lg mb-2 text-amber-900">La Palma</h3>
          <ul class="space-y-2">
            <li class="flex items-center">
              <i class="fas fa-map-marker-alt text-red-600 mr-2"></i> IES Las
              Breñas
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer class="wood-bg py-12">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
        <div>
          <h3 class="text-xl font-bold mb-4 text-white">
            FP Madera y Mueble
          </h3>
          <p class="text-gray-200 mb-4">
            Formación profesional de calidad en el sector de la madera, el
            mueble y el corcho en las Islas Canarias.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="text-white hover:text-gray-300 transition">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-300 transition">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-300 transition">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-300 transition">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-4 text-white">Enlaces rápidos</h3>
          <ul class="space-y-2">
            <li>
              <a
                href="index.php"
                class="text-gray-200 hover:text-white transition">Inicio</a>
            </li>
            <li>
              <a
                href="centros.php"
                class="text-gray-200 hover:text-white transition">Centros Educativos</a>
            </li>
            <li>
              <a
                href="programas.php"
                class="text-gray-200 hover:text-white transition">Programas Formativos</a>
            </li>
            <li>
              <a
                href="colaboracion.php"
                class="text-gray-200 hover:text-white transition">Colaboración Empresarial</a>
            </li>
            <li>
              <a
                href="innovacion.php"
                class="text-gray-200 hover:text-white transition">Innovación</a>
            </li>
          </ul>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-4 text-white">
            Centros educativos
          </h3>
          <ul class="space-y-2">
            <li><a href="https://www3.gobiernodecanarias.org/medusa/edublog/cifptonygallardo/" class="text-gray-200 hover:text-white transition">CIFP Tony Gallardo</a></li>
            <li><a href="https://www3.gobiernodecanarias.org/medusa/edublog/iesanaluisabenitez/" class="text-gray-200 hover:text-white transition">IES Ana Luisa Benítez</a></li>
            <li><a href="https://www3.gobiernodecanarias.org/medusa/edublog/iesfernandosagaseta/" class="text-gray-200 hover:text-white transition">IES Fernando Sagaseta</a></li>
            <li><a href="https://www3.gobiernodecanarias.org/medusa/edublog/cifpvilladeaguimes/" class="text-gray-200 hover:text-white transition">CIFP Villa de Agüimes</a></li>
            <li><a href="https://www3.gobiernodecanarias.org/medusa/edublog/iesgeneto/" class="text-gray-200 hover:text-white transition">IES Geneto</a></li>
            <li><a href="https://www.iesorotava.es/" class="text-gray-200 hover:text-white transition">IES La Orotava</a></li>
            <li><a href="https://www3.gobiernodecanarias.org/medusa/edublog/iesmenceyacaymo/" class="text-gray-200 hover:text-white transition">IES Mencey Acaymo</a></li>
            <li><a href="https://www3.gobiernodecanarias.org/medusa/edublog/ieslasbrenas/" class="text-gray-200 hover:text-white transition">IES Las Breñas</a></li>
          </ul>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-4 text-white">Contacto</h3>
          <ul class="space-y-2">
            <li class="flex items-start">
              <i class="fas fa-envelope text-gray-300 mt-1 mr-2"></i>
              <a
                href="mailto:fp.maderaymueble@gobiernodecanarias.org?Subject=Interesado%20en%20el%20curso"
                class="text-gray-200 hover:text-white transition">Mandar un email</a>
            </li>
            <li class="flex items-start">
              <i class="fas fa-phone text-gray-300 mt-1 mr-2"></i>
              <span class="text-gray-200">928 455 600 (ext. 2143)</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-map-marker-alt text-gray-300 mt-1 mr-2"></i>
              <span class="text-gray-200">Avda. Buenos Aires, 5<br />Edificio Tres de Mayo<br />38071
                Santa Cruz de Tenerife</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="border-t border-amber-800 pt-8 text-center">
        <p class="text-gray-200">
          © 2025 Formación Profesional Madera, Mueble y Corcho - Islas
          Canarias. Todos los derechos reservados.
        </p>
        <div class="mt-4 space-x-4">
          <a href="#" class="text-gray-200 hover:text-white transition">Aviso legal</a>
          <a href="#" class="text-gray-200 hover:text-white transition">Política de privacidad</a>
          <a href="#" class="text-gray-200 hover:text-white transition">Política de cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    var map = L.map("map").setView(
      [28.034136076294008, -16.07636244371232],
      8
    );

    L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map);

    // IES Tony Gallardo
    var marker = L.marker([28.15548505715901, -15.430132209953271]).addTo(
      map
    );
    marker.bindPopup(
      "<b>CIFP Tony Gallardo</b><br>Ctra. de las Coloradas, 35009 Las Palmas de Gran Canaria, Las Palmas<br><a href='https://maps.app.goo.gl/zyTQwBbYF2djjJr78' target=_blank>Cómo llegar</a>"
    );
    // IES Ana Luisa Benitez
    var marker = L.marker([28.097712906410802, -15.439277726515536]).addTo(
      map
    );
    marker.bindPopup(
      "<b>IES Ana Luisa Benítez</b><br>C. Ana Luisa Benítez, 15, 35014, Las Palmas de Gran Canaria, Las Palmas<br><a href='https://maps.app.goo.gl/wLUVVKZEGgnw2b757' target=_blank>Cómo llegar</a>"
    );
    // IES Fernando Sagaseta
    var marker = L.marker([28.028767824252395, -15.41048843075212]).addTo(
      map
    );
    marker.bindPopup(
      "<b>IES Fernnado Sagaseta</b><br>C. Manuel Alemán Álamo, 1, 35220 Valle de Jinamar, Las Palmas<br><a href='https://maps.app.goo.gl/cVfah3QEezvUjtdC9' target=_blank>Cómo llegar</a>"
    );
    // CIFP Villa de Agüimes
    var marker = L.marker([27.871040574524393, -15.4241770111775]).addTo(map);
    marker.bindPopup(
      "<b>CIFP Villa de Agüimes</b><br>Polígono Residencial de Arinaga, C. Alcorac, 50, 35118 Agüimes, Las Palmas<br><a href='https://maps.app.goo.gl/yikFSxiFofUCAqFq6' target=_blank>Cómo llegar</a>"
    );
    // IES Geneto
    var marker = L.marker([28.488256741638033, -16.314352125711757]).addTo(
      map
    );
    marker.bindPopup(
      "<b>IES Geneto</b><br>C. Domingo González Pérez, 11, 38296 La Laguna, Santa Cruz de Tenerife<br><a href='https://maps.app.goo.gl/vmwu9t729ur1iDge7' target=_blank>Cómo llegar</a>"
    );
    // IES La Orotava-Manuel González Pérez
    var marker = L.marker([28.380771275719752, -16.533898771219942]).addTo(
      map
    );
    marker.bindPopup(
      "<b>IES La Orotava-Manuel González Pérez</b><br>Lugar Barranco San Antonio, s/n, 38300 La Orotava, Santa Cruz de Tenerife<br><a href='https://maps.app.goo.gl/yb6rFNtEvAgBeXmP8' target=_blank>Cómo llegar</a>"
    );
    // IES Mencey Acaymo
    var marker = L.marker([28.31825118375265, -16.40551272889333]).addTo(map);
    marker.bindPopup(
      "<b>IES Mencey Acaymo</b><br>C. Juan Álvarez Delgado, 38500 Güímar, Santa Cruz de Tenerife<br><a href='https://maps.app.goo.gl/oZ3xqeUMRo1uY4yx5' target=_blank>Cómo llegar</a>"
    );
    // IES Las Breñas
    var marker = L.marker([28.644363833264336, -17.771382513009534]).addTo(
      map
    );
    marker.bindPopup(
      "<b>IES Las Breñas</b><br>C. San José, 212, 38712 Breña Baja, La Palma<br><a href='https://maps.app.goo.gl/kR3TxaiUm9xk8Ly89' target=_blank>Cómo llegar</a>"
    );
  </script>
</body>

</html>