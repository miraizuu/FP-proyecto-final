<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <meta name="description" content="Programas de formación profesional de madera, mueble y corcho en las Islas Canarias">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <div class="text-3xl font-bold text-brown-700">
                    <span style="color: var(--primary-color);">FP</span> Madera y Mueble
                </div>
            </div>
            <nav class="flex flex-wrap justify-center">
                <a href="index.php" class="px-3 py-2 text-sm font-medium hover:text-amber-700">Inicio</a>
                <a href="centros.php" class="px-3 py-2 text-sm font-medium hover:text-amber-700">Centros Educativos</a>
                <a href="programas.php" class="px-3 py-2 text-sm font-medium hover:text-amber-700">Programas Formativos</a>
                <a href="colaboracion.php" class="px-3 py-2 text-sm font-medium hover:text-amber-700">Colaboración Empresarial</a>
                <a href="innovacion.php" class="px-3 py-2 text-sm font-medium hover:text-amber-700">Innovación</a>
                <a href="noticias.php" class="px-3 py-2 text-sm font-medium hover:text-amber-700">Noticias</a>
                <a href="recursos.php" class="px-3 py-2 text-sm font-medium hover:text-amber-700">Recursos</a>
                <a href="contacto.php" class="px-3 py-2 text-sm font-medium hover:text-amber-700">Contacto</a>
            </nav>
        </div>
    </div>
</header>
  
  <!-- Contact Section -->
  <section id="contacto" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="section-title centered text-3xl font-bold text-center mb-12">Contacto</h2>
        <p class="text-center max-w-3xl mx-auto mb-12">¿Necesitas más información sobre los programas formativos, los centros educativos o cualquier otro aspecto relacionado con la formación profesional en el sector de la madera, el mueble y el corcho? ¡Contacta con nosotros!</p>
        
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-6">Formulario de Contacto</h3>
                    
                    <form action="mailto:fp.maderaymueble@gobiernodecanarias.org" method="post" enctype="text/plain">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nombre completo</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600" placeholder="Tu nombre">
                        </div>
                        
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Correo electrónico</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600" placeholder="Tu email">
                        </div>
                        
                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Asunto</label>
                            <select id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                                <option value="">Selecciona una opción</option>
                                <option value="info">Información sobre ciclos formativos</option>
                                <option value="visit">Solicitud de visita a un centro</option>
                                <option value="collaboration">Propuesta de colaboración</option>
                                <option value="project">Proponer un proyecto</option>
                                <option value="other">Otro asunto</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Mensaje</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600" placeholder="Escribe tu mensaje"></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary px-6 py-3 rounded-lg font-semibold shadow-lg w-full">Enviar mensaje</button>
                    </form>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-6">Información de Contacto</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold mb-2">Coordinación General</h4>
                            <div class="flex items-start mb-2">
                                <i class="fas fa-envelope text-amber-600 mt-1 mr-3"></i>
                                <span>fp.maderaymueble@gobiernodecanarias.org</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone text-amber-600 mt-1 mr-3"></i>
                                <span>928 455 600 (ext. 2143)</span>
                            </div>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-6">
                            <h4 class="font-semibold mb-2">Dirección General de Formación Profesional</h4>
                            <div class="flex items-start mb-2">
                                <i class="fas fa-map-marker-alt text-amber-600 mt-1 mr-3"></i>
                                <span>Avda. Buenos Aires, 5<br>Edificio Tres de Mayo<br>38071 Santa Cruz de Tenerife</span>
                            </div>
                            <div class="flex items-start mb-2">
                                <i class="fas fa-envelope text-amber-600 mt-1 mr-3"></i>
                                <span>dgfp.edu@gobiernodecanarias.org</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone text-amber-600 mt-1 mr-3"></i>
                                <span>922 592 500</span>
                            </div>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-6">
                            <h4 class="font-semibold mb-2">Horario de atención</h4>
                            <div class="flex items-start">
                                <i class="fas fa-clock text-amber-600 mt-1 mr-3"></i>
                                <span>Lunes a viernes: 8:00 - 15:00 h.<br>Julio y agosto: 8:00 - 14:00 h.</span>
                            </div>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-6">
                            <h4 class="font-semibold mb-2">Síguenos</h4>
                            <div class="flex space-x-4 mt-2">
                                <a href="#" class="w-10 h-10 rounded-full flex items-center justify-center bg-blue-600 text-white hover:bg-blue-700 transition">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full flex items-center justify-center bg-blue-400 text-white hover:bg-blue-500 transition">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full flex items-center justify-center bg-pink-600 text-white hover:bg-pink-700 transition">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full flex items-center justify-center bg-red-600 text-white hover:bg-red-700 transition">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
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
            <h3 class="text-xl font-bold mb-4 text-white">FP Madera y Mueble</h3>
            <p class="text-gray-200 mb-4">Formación profesional de calidad en el sector de la madera, el mueble y el corcho en las Islas Canarias.</p>
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
                <li><a href="index.php" class="text-gray-200 hover:text-white transition">Inicio</a></li>
                <li><a href="centros.php" class="text-gray-200 hover:text-white transition">Centros Educativos</a></li>
                <li><a href="programas.php" class="text-gray-200 hover:text-white transition">Programas Formativos</a></li>
                <li><a href="colaboracion.php" class="text-gray-200 hover:text-white transition">Colaboración Empresarial</a></li>
                <li><a href="innovacion.php" class="text-gray-200 hover:text-white transition">Innovación</a></li>
            </ul>
        </div>
        
        <div>
            <h3 class="text-xl font-bold mb-4 text-white">Centros educativos</h3>
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
                    <a href="mailto:fp.maderaymueble@gobiernodecanarias.org" class="text-gray-200 hover:text-white transition">fp.maderaymueble@gobiernodecanarias.org</a>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-phone text-gray-300 mt-1 mr-2"></i>
                    <span class="text-gray-200">928 455 600 (ext. 2143)</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-map-marker-alt text-gray-300 mt-1 mr-2"></i>
                    <span class="text-gray-200">Avda. Buenos Aires, 5<br>Edificio Tres de Mayo<br>38071 Santa Cruz de Tenerife</span>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="border-t border-amber-800 pt-8 text-center">
        <p class="text-gray-200">© 2025 Formación Profesional Madera, Mueble y Corcho - Islas Canarias. Todos los derechos reservados.</p>
        <div class="mt-4 space-x-4">
            <a href="#" class="text-gray-200 hover:text-white transition">Aviso legal</a>
            <a href="#" class="text-gray-200 hover:text-white transition">Política de privacidad</a>
            <a href="#" class="text-gray-200 hover:text-white transition">Política de cookies</a>
        </div>
    </div>
</div>
</footer>
</body>
</html>