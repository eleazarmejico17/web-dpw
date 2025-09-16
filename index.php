<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web</title>
    <link rel="stylesheet" href="style.css">   
    <link rel="stylesheet" href="css/animation.css"> 
    <link rel="icon" href="./img/LOGO3.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://worldtimeapi.org/api/timezone/America/Lima">
</head>
<body>
    <!-- Ventana emergente -->
    <!-- class="no-scroll" -->
    <!-- <div id="miModal" class="modal">
        <div class="modal-contenido">
            <span class="cerrar">&times;</span>
            <h2>COMUNICADOS</h2>
            <div class="modal-contenido-img">
                <img src="img/anuncio.jpeg" alt="flayer para los anuncios">
            </div>
        </div>
    </div> -->
    <header>
        <nav>
            <div class="logo">
                <img src="img/LOGO.png" alt="">
            </div>
            <ul id="menuList">
                <li><a href="#" onclick="closeMenu()">Inicio</a></li>
                <li><a href="#perfil" onclick="closeMenu()">Perfil Profesional</a></li>
                <li><a href="#noticias" onclick="closeMenu()">Noticias DPW</a></li>  
                <li><a href="#menuinfo" onclick="closeMenu()">Mas Informacion</a></li>    
            </ul>
            <div class="menu-icon">
                <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
            </div>
        </nav>
        <div id="overlay" onclick="closeMenu()"></div>
        <div class="header__fondo">
            <div class="header__fondo__baner">
                <div class="header__fondo__baner__text">
                    <h1 class="titulos">Diseño y Programación Web</h1>
                    <p>Diseña el futuro, programa tus ideas. ¡Transforma el mundo digital con creatividad y código!</p>
                    <div id="contador-container">
                        <h2 class="titulos">Próximo Examen de Admisión</h2>
                        <div id="contador">
                            <span id="dias">00</span>d :
                            <span id="horas">00</span>h :
                            <span id="minutos">00</span>m :
                            <span id="segundos">00</span>s
                        </div>
                    </div>
                </div>
                <div class="header__fondo__baner__img">
                    <div class="logos">
                        <img src="img/logos/android.png" alt="">
                        <img src="img/logos/html.png" alt="">
                        <img src="img/logos/css.png" alt="">
                        <img src="img/logos/kotlin.png" alt="">
                        <img src="img/logos/react.png" alt="">
                        <img src="img/logos/js.png" alt="">
                    </div>
                    <div class="modelos">
                        <img src="img/modelos2dpw.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="baner2">
            <div class="containe__baner2">
                <div class="containe__baner2__div animate-fade">
                    <div class="baner2__title">
                        <h2 class="titulos animate-left">¿Por Qué Estudiar Diseño y Programación Web?</h2>
                    </div>
                    <div class="baner2__card">
                        <div class="baner2__card__num">1</div>
                        <h3 class="titulos">Alta Demanda Laboral</h3>
                        <p>El mercado de trabajo busca constantemente programadores y diseñadores web, lo que incrementa las oportunidades de empleo.</p>
                    </div>
                    <div class="baner2__card">
                        <div class="baner2__card__num">2</div>
                        <h3 class="titulos">Flexibilidad y Trabajo Remoto</h3>
                        <p>Muchos desarrolladores tienen la opción de trabajar desde cualquier lugar, brindando una mayor libertad de horarios y ubicación.</p>
                    </div>
                </div>
                <div class="containe__baner2__div animate-right">
                    <div class="baner2__card">
                        <div class="baner2__card__num">3</div>
                        <h3 class="titulos">Creatividad e Innovación</h3>
                        <p>Diseñar y programar sitios web permite desarrollar habilidades creativas y llevar ideas innovadoras al mundo digital.</p>
                    </div>
                    <div class="baner2__card">
                        <div class="baner2__card__num">4</div>
                        <h3 class="titulos">Potencial de Crecimiento Profesional</h3>
                        <p>La programación es una carrera en constante evolución, con oportunidades para especializarse y mejorar continuamente.</p>
                    </div>
                    <div class="baner2__card">
                        <div class="baner2__card__num">5</div>
                        <h3 class="titulos">Salarios Competitivos</h3>
                        <p>La alta demanda y la especialización en diseño y programación web suelen traducirse en salarios competitivos y estabilidad económica.</p>
                    </div>
                </div>
            </div>   
        </section>
        <section class="perfil" id="perfil">
            <div id="perfil-fondo">
                <div id="fondo-container">
                    <div id="fondo-container-text1" class="fondo-container-text">
                        <h3 class="titulos">Perfil Profesional <i class="fa-solid fa-user-graduate"></i></h3>
                        <div class="fondo-container-text-cont animate-right">
                            <div class="fondo-container-text-card">
                                <h4 class="titulos">Desarrollo de Aplicaciones</h4>
                                <p>Un programador en diseño y desarrollo web se encarga de crear y mantener aplicaciones tanto web como móviles utilizando las tecnologías más actuales. Su habilidad para desarrollar software multiplataforma asegura que las aplicaciones sean compatibles con diversos dispositivos, ofreciendo una experiencia de usuario consistente y eficiente.</p>
                            </div>
                            <div class="fondo-container-text-card">
                                <h4 class="titulos">Gestión de Bases de Datos</h4>
                                <p>La administración de bases de datos es una parte fundamental del perfil profesional de un programador. Este profesional tiene la capacidad de gestionar, optimizar y asegurar bases de datos, garantizando que el rendimiento y la seguridad de los sistemas sean siempre óptimos, lo cual es crucial para cualquier aplicación o servicio.</p>
                            </div>
                            <div class="fondo-container-text-card">
                                <h4 class="titulos">Desarrollo Web</h4>
                                <p>El desarrollo web es una habilidad esencial para crear y mantener sitios web interactivos, funcionales y atractivos. Esto incluye el diseño de la estructura, el desarrollo del código backend y frontend, así como la optimización de las aplicaciones para garantizar un rendimiento rápido y sin fallos en diferentes dispositivos y navegadores.</p>
                            </div>
                            <div class="fondo-container-text-card">
                                <h4 class="titulos">Diseño de Interfaces y Trabajo en Equipo</h4>
                                <p>El diseño de interfaces de usuario intuitivas y funcionales es esencial para ofrecer una experiencia de usuario agradable. Además, un programador también debe ser capaz de colaborar eficazmente en equipos ágiles, gestionando proyectos de software de manera eficiente y asegurando que los objetivos se cumplan dentro de los plazos establecidos.</p>
                            </div>
                        </div> 
                        <div class="fondo-contbt">
                            <button id="boton1" class="boton">Ver Oportunidades Laborales</button>
                        </div>                   
                    </div>
                    <div id="fondo-container-text2" class="fondo-container-text" style="display: none;">
                        <h3 class="titulos">Oportunidades Laborales <i class="fa-solid fa-briefcase"></i></h3>
                        <div class="fondo-container-text-cont">
                            <div class="fondo-container-text-card">
                                <h4 class="titulos">Desarrollador Web Frontend y Backend</h4>
                                <p>Los programadores especializados en desarrollo web pueden optar por roles como desarrollador frontend, centrado en la interfaz y la experiencia del usuario, o backend, encargado de la lógica y el manejo de datos en el servidor. Estas posiciones son clave en empresas de tecnología, agencias de marketing, y en equipos de desarrollo que crean y mantienen aplicaciones y sitios web.</p>
                            </div>
                            <div class="fondo-container-text-card">
                                <h4 class="titulos">Especialista en UX/UI</h4>
                                <p>Los diseñadores de UX/UI se encargan de crear interfaces intuitivas y atractivas que mejoren la experiencia del usuario. Este rol es ideal para aquellos interesados en la combinación de diseño y funcionalidad, colaborando con equipos de desarrollo para diseñar productos web visualmente atractivos y fáciles de usar.</p>
                            </div>
                            <div class="fondo-container-text-card">
                                <h4 class="titulos">Administrador de Bases de Datos</h4>
                                <p>En este rol, los profesionales se encargan de la organización, seguridad y optimización de bases de datos para empresas. Un administrador de bases de datos asegura el correcto almacenamiento y manejo de la información, una habilidad esencial en sectores como el comercio electrónico, la educación y los servicios financieros.</p>
                            </div>
                            <div class="fondo-container-text-card">
                                <h4 class="titulos">Desarrollador de Aplicaciones Móviles</h4>
                                <p>Los programadores pueden especializarse en el desarrollo de aplicaciones móviles para plataformas iOS y Android. Esta es una excelente oportunidad para quienes buscan crear aplicaciones interactivas que faciliten la vida de los usuarios en diversos sectores, desde la educación y la salud hasta el entretenimiento y las finanzas.</p>
                            </div>
                        </div>
                        <div class="fondo-contbt">
                            <button id="boton2" class="boton">Ver Perfil Profesional</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="perfil_egre"> 
            <div class="perfil_egre_info">
              <div class="perfil_egre_cont">
                <img class="imagen_portada" src="img/fotogrupal.jpeg" alt="Imagen representativa del perfil de egreso">
              </div>
              <div class="perfil_egre_cont">
                <h2 class="animate-right titulos">PERFIL DE EGRESO</h2>
                <ul class="animate-right">
                    <li><strong>Diseño y desarrollo web:</strong> Crear interfaces atractivas, adaptativas y funcionales aplicando principios de UX, estándares de usabilidad, accesibilidad y seguridad.</li>
                    
                    <li><strong>Sistemas y bases de datos:</strong> Construir soluciones multiplataforma mediante lenguajes de programación, análisis, diseño y gestión eficiente de bases de datos.</li>
                    
                    <li><strong>Gestión de proyectos:</strong> Planificar, coordinar y ejecutar proyectos web y móviles, incluyendo administración de recursos y control de calidad en todas las etapas.</li>
                    
                    <li><strong>Frameworks y herramientas:</strong> Dominar tecnologías modernas como React, Angular, Vue.js (frontend), Django, Laravel (backend), React Native y Flutter (apps móviles).</li>
                    
                    <li><strong>Despliegue de aplicaciones:</strong> Gestionar entornos de producción, configuración de servidores (AWS, Heroku), e implementar CI/CD para despliegues automatizados.</li>
                    
                    <li><strong>Seguridad y buenas prácticas:</strong> Implementar medidas de ciberseguridad, control de accesos y pruebas de aceptación en entornos productivos.</li>
                </ul>
              </div>
            </div>
          
            <div class="perfil_egre_cards">
                <div class="cards_container"></div>
                    <div class="animate-up card-titulo">
                        <h4 class="titulos">Carrera profesional</h4>
                    </div>
                    <div class="animate-up card">
                        <i class="fas fa-clock" ></i>
                        <p><b>Duración de la carrera:</b> 3 años</p>
                    </div>
                    <div class="animate-up card">
                        <i class="fas fa-graduation-cap" ></i>
                        <p><b>Grado obtenido:</b> Egresado de Diseño y Programación Web</p>
                    </div>
                    <div class="animate-up card">
                        <i class="fa-solid fa-award"></i>
                        <p><b>Título profesional</b> Profesional Técnico en Diseño y programación Web</p>
                    </div>
              </div>
            </div>
        </section>
        <section class="content" id="menuinfo">
            <div class="content__info">
                <div class="content__info__menu animate-left">
                    <h2 class="titulos">Menú</h2>
                    <ul>
                        <li><a href="#result" onclick="executeCode('./include/modulo1.php')"><i class="fa-solid fa-layer-group"></i>  Módulo Técnico Profesional</a></li>
                        <li><a href="#result" onclick="executeCode('./include/horario1.php')"><i class="fa-solid fa-clock"></i>  Horarios</a></li>
                        <li><a href="#result" onclick="executeCode('./include/docentes.php')"><i class="fa-solid fa-users"></i>  Docentes</a></li>
                        <li><a href="#result" onclick="executeCode('./include/delegados.php')"><i class="fa-solid fa-laptop-code"></i>  Delegados</a></li>
                       <!--  <li><a href="#result" onclick="executeCode('./include/egresados.php')"><i class="fa-solid fa-user-graduate"></i>  Seguimiento de Egresados</a></li> -->
                    </ul>
                </div>
                <div class="content__info__mostrar animate-fade" id="result">

                </div>
            </div>
            <script>
                // Función que se ejecuta al cargar la página
                window.onload = function() {
                    // Llama a la función con el archivo que deseas cargar inicialmente
                    executeCode('./include/modulo1.php');
                };
            </script>
        </section>
        <section class="noticias" id="noticias">
            <div class="noticias__title">
                <h2 class="animate-left titulos">Últimas Novedades en Diseño y Programación Web</h2>
                <p class="animate-right">Aquí encontrarás las noticias más importantes de nuestra carrera, ¡no te pierdas lo que está pasando!</p>
            </div>
            <div class="noticias__container">
                <div class="noticias__container__cotenido">
                    <div class="noticias__card">
                        <div class="noticias__card__img">
                            <img src="img/anuncio2.jpg" alt="">
                        </div>
                        <div class="noticias__card__text">
                            <h3 class="titulos">Proyección Social: Un Enfoque en Diseño y Programación Web</h3>
                            <p>Los estudiantes de la carrera de Diseño y Programación Web del IEST Andrés Avelino Cáceres Dorregaray desean expresar su más sincero agradecimiento a la comunidad de Cajas por su valiosa participación y confianza al dejar sus equipos tecnológicos para el diagnóstico y servicio técnico.
                                Gracias a esta colaboración, hemos podido aplicar nuestros conocimientos en el diagnóstico de problemas y en la reparación de equipos, lo que nos ha permitido no solo mejorar nuestras habilidades prácticas, sino también contribuir al bienestar tecnológico de nuestra comunidad.</p>    
                        </div>  
                    </div>
                    <div class="noticias__card">
                        <div class="noticias__card__img">
                            <img src="img/fvocacional.jpeg" alt="">
                        </div>
                        <div class="noticias__card__text">
                            <h3 class="titulos">Feria Vocacional</h3>
                            <p>Participamos en la Feria Vocacional, presentando nuestra carrera de Diseño y Programación Web a futuros estudiantes interesados en el mundo digital. Durante el evento, mostramos proyectos realizados por nuestros estudiantes, organizamos talleres prácticos de diseño, y realizamos demostraciones de desarrollo web en vivo. Esta feria fue una excelente oportunidad para responder preguntas, orientar a los interesados y motivarlos a formar parte de esta apasionante carrera tecnológica. ¡Gracias a todos los que nos visitaron y compartieron su interés!</p>    
                        </div>  
                    </div>
                    <div class="noticias__card">
                        <div class="noticias__card__img">
                            <img src="img/teams.jpg" alt="">
                        </div>
                        <div class="noticias__card__text">
                            <h3 class="titulos">Microsoft Teams: Nuevo Sistema Académico en el Instituto</h3>
                            <p>A partir del próximo semestre, Microsoft Teams reemplazará a Google Classroom como el sistema académico principal del instituto. Con esta plataforma, tanto estudiantes como profesores podrán disfrutar de una mayor integración, herramientas colaborativas y una comunicación fluida en tiempo real. Este cambio busca optimizar la organización y el acceso a los recursos académicos para toda la comunidad.</p>    
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <section class="aprende">
            <h3 class="animate-up titulos">Aprende con nosotros las tecnologías clave para destacar en el desarrollo web</h3>
            <div class="swiper aprende__container">
                <div class="swiper-wrapper">
                    <!-- HTML5 -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="fab fa-html5" style="color: #e44d26; font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">HTML5</h4>
                            <p>La estructura básica de todas las páginas web.</p>
                        </div>
                    </div>
                    <!-- CSS -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="fab fa-css3-alt" style="color: #1572b6; font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">CSS</h4>
                            <p>Diseña y personaliza cada detalle visual de las interfaces.</p>
                        </div>
                    </div>
                    <!-- JavaScript -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="fab fa-js" style="color: #f7df1e; font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">JavaScript</h4>
                            <p>Añade interactividad y dinamismo a tus proyectos.</p>
                        </div>
                    </div>
                    <!-- Java -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="fab fa-java" style="color: #007396; font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">Java</h4>
                            <p>Un lenguaje versátil para aplicaciones robustas y seguras.</p>
                        </div>
                    </div>

                    <!-- MySQL -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="fas fa-database" style="color: #00758f; font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">MySQL</h4>
                            <p>Gestiona bases de datos para almacenar y organizar información.</p>
                        </div>
                    </div>

                    <!-- GitHub -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="fab fa-github" style="color: #333; font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">GitHub</h4>
                            <p>Colabora y gestiona código en tus proyectos de desarrollo.</p>
                        </div>
                    </div>

                    <!-- React -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="devicon-react-original colored" style="font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">React</h4>
                            <p>Crea interfaces de usuario dinámicas y modernas.</p>
                        </div>
                    </div>

                    <!-- Angular -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="devicon-angularjs-plain colored" style="font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">Angular</h4>
                            <p>Desarrolla aplicaciones web estructuradas y escalables.</p>
                        </div>
                    </div>

                    <!-- PHP -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="devicon-php-plain colored" style="font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">PHP</h4>
                            <p>Construye sitios web dinámicos y administra datos eficientemente.</p>
                        </div>
                    </div>

                    <!-- Interfaz de Usuario (UI) -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="fas fa-paint-brush" style="color: #4caf50; font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">Interfaz de Usuario (UI)</h4>
                            <p>Diseña elementos visuales atractivos y funcionales.</p>
                        </div>
                    </div>

                    <!-- Experiencia de Usuario (UX) -->
                    <div class="swiper-slide aprende__container__card animate-up">
                        <div class="aprende__container__card__img">
                            <i class="fas fa-users" style="color: #ff9800; font-size: 3rem;"></i>
                        </div>
                        <div class="aprende__container__card__text">
                            <h4 class="titulos">Experiencia de Usuario (UX)</h4>
                            <p>Optimiza la interacción del usuario con tus productos.</p>
                        </div>
                    </div>

                </div>
            </div>
            <p>¡Da el primer paso hacia una carrera en el mundo digital y explora cada una de estas tecnologías con nosotros!</p>
        </section>
    </main>
    <footer>
        <div class="enlaces">
            <div class="enlaces__card">
                <h5 class="titulos">Ubicanos</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.658775626691!2d-75.2521585!3d-11.9980964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910ebe7dfc4c9b2d%3A0xc94b5580e6d753d2!2sInstituto%20de%20Educaci%C3%B3n%20Superior%20Tecnol%C3%B3gico%20P%C3%BAblico%20Andr%C3%A9s%20Avelino%20C%C3%A1ceres%20Dorregaray!5e0!3m2!1ses!2spe!4v1730837248171!5m2!1ses!2spe" width="250" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" alt="Ubicación Instituto Andrés Avelino Cáceres"></iframe>
            </div>
            <div class="enlaces__card">
            <h5 class="titulos">Enlaces Útiles</h5>
                <ul>
                     <li><a href="https://institutocajas.edu.pe/admision2024/admision2023.html">Admisión</a></li>
                    <li><a href="https://www.bibliotecadigitalcajas.com/">Biblioteca</a></li>
                    <li><a href="mailto:jefatura_dpw@institutocajas.info">jefatura_dpw@institutocajas.info</a></li>
                </ul>
            </div>
            <div class="enlaces__card">
                <h5 class="titulos">Reclamos</h5>
                <ul>
                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSd9uqT7Gc6p6uaFCOS00MxReROKWlWpy4oQQK78U_q-rOubaQ/formrestricted">Formulario de Reclamos</a></li>
                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSd3yROrzZ3ZK2bTq6f7yMuQUi9LyeLHCBj8UnyrTLJfy4xoCg/formrestricted">Formulario de Denuncias</a></li>
                </ul>   
            </div>
        </div>
        <hr class="footer__hr">
        <div class="adicional">
            <p>&copy; 2024 - Mejico Eleazar</p>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
    <script src="js/nav.js"></script>
    <script src="js/mostrar.js"></script>
    <script src="js/mostrar2.js"></script>
    <!-- <script src="js/emergente.js"></script> -->
    <script src="js/animation.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/contador.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1, // Mostrar una tarjeta en dispositivos pequeños
            spaceBetween: 10, // Espaciado entre tarjetas
            loop: true, // Habilitar carrusel infinito
            autoplay: {
                delay: 3000,
                disableOnInteraction: false, // No detener autoplay al interactuar
                reverseDirection: window.innerWidth < 500, // Cambiar dirección en pantallas pequeñas
            },
            speed: 1000,
            breakpoints: {
                500: { // Configuración para pantallas mayores a 500px
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: { // Configuración para pantallas mayores a 768px
                    slidesPerView: 3,
                },
            },
        });

        // Escuchar cambios de tamaño de la ventana para ajustar la dirección
        window.addEventListener('resize', () => {
            if (swiper.params.autoplay) {
                swiper.params.autoplay.reverseDirection = window.innerWidth < 500;
                swiper.autoplay.start(); // Reinicia el autoplay con la nueva dirección
            }
        });

    </script>
</body>
</html>
