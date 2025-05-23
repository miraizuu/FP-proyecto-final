<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    Formación Profesional Madera, Mueble y Corcho - Islas Canarias
  </title>
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
  <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
  <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
  <link href='fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
  <link href='fullcalendar/packages/list/main.css' rel='stylesheet' />
  <script src='fullcalendar/packages/core/main.js'></script>
  <script src='fullcalendar/packages/interaction/main.js'></script>
  <script src='fullcalendar/packages/daygrid/main.js'></script>
  <script src='fullcalendar/packages/timegrid/main.js'></script>
  <script src='fullcalendar/packages/list/main.js'></script>
  <script src='https://unpkg.com/popper.js/dist/umd/popper.min.js'></script>
  <script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/calendar.css">
</head>

<body class="transition-colors duration-300" id="body">
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

  <main>
    <!-- HERO -->
    <section id="inicio" class="hero-pattern py-16 lg:py-24">
      <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center">
          <div class="lg:w-1/2 mb-10 lg:mb-0">
            <h1
              class="text-4xl lg:text-5xl font-bold mb-6"
              style="color: var(--primary-color)">
              Formación Profesional de Madera, Mueble y Corcho
            </h1>
            <h2 class="text-2xl lg:text-3xl font-semibold mb-6">
              En las Islas Canarias
            </h2>
            <p class="text-lg mb-8">
              Descubre los programas de formación profesional especializados
              en el sector de la madera, el mueble y el corcho impartidos por
              los centros educativos de las Islas Canarias. Una formación de
              calidad para un sector con gran demanda de profesionales
              cualificados.
            </p>
            <div class="flex flex-wrap gap-4">
              <a
                href="centros.php"
                class="btn-primary px-6 py-3 rounded-lg font-semibold shadow-lg">Ver Centros</a>
              <a
                href="programas.php"
                class="bg-white px-6 py-3 rounded-lg font-semibold shadow-lg border border-gray-300 hover:bg-gray-50 transition">Programas Formativos</a>
            </div>
          </div>
          <div class="lg:w-1/2 flex justify-center">
            <div class="relative w-full max-w-md">
              <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                  <div class="flex flex-col items-center text-center">
                    <div class="bg-amber-100 rounded-full p-3 mb-3">
                      <i class="fas fa-school text-amber-800 text-2xl"></i>
                    </div>
                    <p class="text-sm font-medium">8 Centros Educativos</p>
                  </div>
                  <div class="flex flex-col items-center text-center">
                    <div class="bg-amber-100 rounded-full p-3 mb-3">
                      <i
                        class="fas fa-graduation-cap text-amber-800 text-2xl"></i>
                    </div>
                    <p class="text-sm font-medium">Múltiples Titulaciones</p>
                  </div>
                  <div class="flex flex-col items-center text-center">
                    <div class="bg-amber-100 rounded-full p-3 mb-3">
                      <i class="fas fa-briefcase text-amber-800 text-2xl"></i>
                    </div>
                    <p class="text-sm font-medium">Alta Empleabilidad</p>
                  </div>
                  <div class="flex flex-col items-center text-center">
                    <div class="bg-amber-100 rounded-full p-3 mb-3">
                      <i class="fas fa-tools text-amber-800 text-2xl"></i>
                    </div>
                    <p class="text-sm font-medium">Formación Práctica</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- NOTICIAS -->
    <section id="noticias" class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <h2
          class="section-title centered text-3xl font-bold text-center mb-12">
          Noticias y Eventos
        </h2>
        <p class="text-center max-w-3xl mx-auto mb-12">
          Mantente al día de las últimas novedades relacionadas con la
          formación profesional en el sector de la madera, el mueble y el
          corcho en las Islas Canarias. Eventos, jornadas técnicas, visitas,
          proyectos y otras actividades de interés.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
          <div class="card bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="relative">
              <div class="h-48 bg-gray-300 flex items-center justify-center">
                <i class="fas fa-image text-gray-400 text-4xl"></i>
              </div>
              <div class="absolute top-4 left-4">
                <div class="news-date">
                  <span class="text-sm">ABR</span>
                  <span class="text-xl font-bold">15</span>
                </div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">
                III Networking de las familias profesionales de Madera y
                Electromecánica
              </h3>
              <p class="text-sm text-gray-600 mb-4">
                El IES La Orotava organiza su III jornada de networking
                centrada en los sectores de madera, mueble y electromecánica,
                con la participación de empresas y profesionales del sector.
              </p>
              <div class="flex items-center mb-4">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">IES La Orotava-Manuel González Pérez</span>
              </div>
              <a
                href="noticia1.php"
                class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium">Leer más</a>
            </div>
          </div>

          <div class="card bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="relative">
              <div class="h-48 bg-gray-300 flex items-center justify-center">
                <i class="fas fa-image text-gray-400 text-4xl"></i>
              </div>
              <div class="absolute top-4 left-4">
                <div class="news-date">
                  <span class="text-sm">MAR</span>
                  <span class="text-xl font-bold">22</span>
                </div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">
                Alumnos del IES Fernando Sagaseta trabajan con madera de
                eucalipto rojo
              </h3>
              <p class="text-sm text-gray-600 mb-4">
                Los estudiantes del ciclo de carpintería y mueble descubren
                las propiedades y posibilidades de la madera de eucalipto rojo
                en un proyecto innovador con el Cabildo de Gran Canaria.
              </p>
              <div class="flex items-center mb-4">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">IES Fernando Sagaseta</span>
              </div>
              <a
                href="noticia2.php"
                class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium">Leer más</a>
            </div>
          </div>

          <div class="card bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="relative">
              <div class="h-48 bg-gray-300 flex items-center justify-center">
                <i class="fas fa-image text-gray-400 text-4xl"></i>
              </div>
              <div class="absolute top-4 left-4">
                <div class="news-date">
                  <span class="text-sm">FEB</span>
                  <span class="text-xl font-bold">10</span>
                </div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">
                El CIFP Villa de Agüimes incorpora nuevo ciclo de Instalación
                y Amueblamiento
              </h3>
              <p class="text-sm text-gray-600 mb-4">
                El centro amplía su oferta formativa con el ciclo de grado
                medio de Instalación y Amueblamiento, que comenzará a
                impartirse el próximo curso 2025-2026.
              </p>
              <div class="flex items-center mb-4">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <span class="text-sm">CIFP Villa de Agüimes</span>
              </div>
              <a
                href="noticia3.php"
                class="btn-primary inline-block px-4 py-2 rounded text-sm font-medium">Leer más</a>
            </div>
          </div>
        </div>

        <div class="text-center">
        <a
          href="noticias.php"
          class="btn-primary inline-block px-6 py-3 rounded-lg font-semibold shadow-lg">Ver todas las noticias</a>
      </div>
      <br>
        <div class="bg-white p-8 rounded-lg shadow-lg mb-10">
          <h3 class="text-2xl font-bold mb-6">Próximos Eventos</h3>

          <div class="space-y-6">
            <div id='script-warning'>
              <code>php/get-events.php</code> must be running.
            </div>

            <div id='loading'>loading...</div>

            <div id='calendar'></div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </main>

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
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function(e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: "smooth",
          });
        }
      });
    });

    // Function to scroll to specific center
    function scrollToCenter(centerId) {
      const centerElement = document.getElementById(centerId);

      if (centerElement) {
        window.scrollTo({
          top: centerElement.offsetTop - 100,
          behavior: "smooth",
        });

        // Add highlight effect
        centerElement.classList.add("ring-4", "ring-amber-400");

        setTimeout(() => {
          centerElement.classList.remove("ring-4", "ring-amber-400");
        }, 2000);
      }
    }

    // Tabs functionality
    function openTab(event, tabId) {
      // Hide all tab content
      const tabContents = document.getElementsByClassName("tab-content");
      for (let i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove("active");
      }

      // Remove active class from tab buttons
      const tabLinks = document.getElementsByClassName("tab-link");
      for (let i = 0; i < tabLinks.length; i++) {
        tabLinks[i].classList.remove("bg-amber-600", "text-white");
        tabLinks[i].classList.add("text-gray-600");
      }

      // Show the specific tab content
      document.getElementById(tabId).classList.add("active");

      // Add active class to the button that opened the tab
      event.currentTarget.classList.remove("text-gray-600");
      event.currentTarget.classList.add("bg-amber-600", "text-white");
    }
  </script>
  <script src="js/calendar.js"></script>
</body>

</html>