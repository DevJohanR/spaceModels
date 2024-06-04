<?php
session_start(); // Iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = 'localhost';
    $dbname = 'u491711087_spacemodels';
    $username = 'u491711087_space';
    $password = 'i1032504563I*';
    $dsn = "mysql:host=$host;dbname=$dbname";

    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $correo = $_POST['destination'];
        $celular = $_POST['celular'];
        $nombre = $_POST['nombre'];

        $sql = "INSERT INTO contactos (correo, celular, nombre) VALUES (:correo, :celular, :nombre)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
        $stmt->bindParam(':celular', $celular, PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);

        $stmt->execute();

        // Establecer el estado y el mensaje en la sesión
        $_SESSION['estado_guardado'] = 'exito';
        $_SESSION['mensaje'] = 'Datos guardados con éxito.';

        // Redireccionar después de procesar los datos del formulario
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } catch (PDOException $e) {
        // Establecer el estado y el mensaje de error en la sesión
        $_SESSION['estado_guardado'] = 'error';
        $_SESSION['error_mensaje'] = $e->getMessage();

        // Redireccionar después de procesar los datos del formulario
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Models Web Cam Estudio</title>

    <link rel="shortcut icon" href="./assets/images/Xspace.png" type="image/svg+xml">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b036b95ef5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+57 3027777134" class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">Tienes Preguntas:</p>

            <p class="helpline-number">+57 304 663 8178</p>
          </div>

        </a>

        <a href="#" class="logo">
          <img src="./assets/images/Xspace.png" width="60" alt="Tourly logo">
        </a>

        <div class="header-btn-group">

          <button class="search-btn" aria-label="Search">
            <ion-icon name="search"></ion-icon>
          </button>

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/space_modelss1/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

    

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="./assets/images/Xspace.png" width="60" alt="Tourly logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link" data-nav-link>Inicio</a>
            </li>

            <li>
              <a href="#package" class="navbar-link" data-nav-link>Nosotros</a>
            </li>

            <li>
              <a href="#destination" class="navbar-link" data-nav-link>Servicios</a>
            </li>

            <li>
              <a href="#registrarse" class="navbar-link" data-nav-link>Registrate</a>
            </li>

            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>Mision y Vision</a>
            </li>

            <li>
              <a href="#contact" class="navbar-link" data-nav-link>Contacto</a>
            </li>

          </ul>

        </nav>

        <button class="btn btn-primary"> <a href="#destination" style="text-decoration: none; color: white;">Beneficios</a></button>

      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title"><span style="color:#eb3d6e">SPACE</span>
            <span  style="color: #52c0bc">MODELS</span> <span class="xxx" style="font-size: 50px;">ENTRETENIMIENTO ADULTO</span></h2>

          <p class="hero-text">
            Nos encontramos en Cúcuta y representamos una compañía especializada en el ámbito del modelaje orientado al sector del entretenimiento para adultos a escala global. Nuestra misión es capacitar a modelos, dotándoles de competencias y destrezas que favorezcan el logro de un modo de vida próspero. 
          </p>

          <div class="btn-group">
            <a href="#package"> <button class="btn btn-primary">Saber mas</button></a>
           
    <a href="https://wa.link/l3wlir"><button class="btn btn-secondary">WhatsApp</button></a>
            
          </div>

        </div>
      </section>








     










      <!-- 
        - #TOUR SEARCH
      -->

      <section class="tour-search" id="registrarse">
            <h1 style="padding: 20px; font-size: 50px; color: white;">¡Te Contactamos!</h1>
            <div class="container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="tour-search-form">
                    <div class="input-wrapper">
                        <label for="destination" class="input-label">Tu mejor correo*</label>
                        <input type="text" name="destination" id="destination" required placeholder="Correo Electrónico" class="input-field">
                    </div>

                    <div class="input-wrapper">
                        <label for="celular" class="input-label">Tu Celular*</label>
                        <input type="text" name="celular" id="celular" required placeholder="Número de contacto" class="input-field">
                    </div>

                    <div class="input-wrapper">
                        <label for="nombre" class="input-label">Tu Nombre*</label>
                        <input type="text" name="nombre" id="nombre" required placeholder="¿Cómo te llamas?" class="input-field">
                    </div>

                    <button type="submit" class="btn btn-secondary">Enviar!</button>
                </form>
            </div>
        </section>
    </article>
</main>

<script>
   <?php if (isset($_SESSION['estado_guardado']) && $_SESSION['estado_guardado'] == 'exito'): ?>
    Swal.fire({
        title: '¡Éxito!',
        text: '<?php echo $_SESSION['mensaje']; ?>',
        icon: 'success',
        confirmButtonText: 'Ok'
    });
    <?php unset($_SESSION['estado_guardado'], $_SESSION['mensaje']); ?>
<?php elseif (isset($_SESSION['estado_guardado']) && $_SESSION['estado_guardado'] == 'error'): ?>
    Swal.fire({
        title: 'Error',
        text: 'Hubo un problema: <?php echo $_SESSION['error_mensaje']; ?>',
        icon: 'error',
        confirmButtonText: 'Cerrar'
    });
    <?php unset($_SESSION['estado_guardado'], $_SESSION['error_mensaje']); ?>
<?php endif; ?>
</script>


      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

          <p class="section-subtitle">Servicios</p>

          <h2 class="h2 section-title">¿Qué ofrecemos?</h2>

          <p class="section-text">
            Nuestros servicios exclusivos están diseñados para catapultar tu presencia en el mundo del modelaje webcam, ofreciéndote un acompañamiento constante en cada paso de tu viaje en la produccion contenido para adultos.
          </p>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/01.jpeg" alt="San miguel, italy" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Apertura de Cuentas</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Plataformas</a>
                  </h3>

                  <p class="card-text">
                    Te ayudamos en el registro, aprobación y monetización de diferentes plataformas de contenido
                  </p>

                </div>

              </div>
            </li>

            <li>
              
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/02.jpeg" alt="Burj khalifa, dubai" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Monetización y seguimiento</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Ingresos</a>
                  </h3>

                  <p class="card-text">
                    Pago de tus ganancias en las diferentes plataformas de contenido y streaming.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/streamer.jpeg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Soporte técnico remoto 24/7
                    </a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Streaming</a>
                  </h3>

                  <p class="card-text">
                   
Corrección de problemas, Soporte y configuración de software y conectividad para streaming.






                  </p>

                </div>

              </div>
            </li>

          </ul>

    
        </div>
      </section>
      <section class="popular" id="destination" style="margin-top: -150px;">
        <div class="container">

          

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/diseno.jpeg" alt="San miguel, italy" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Fotografia y Edicion</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Diseño</a>
                  </h3>

                  <p class="card-text">
                    Toma, edición de fotografías profesionales iniciales y/o tematicas
                    Diseño, creación de piezas publicitarias 
                  </p>

                </div>

              </div>
            </li>

            <li>
              
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/acom.jpeg" alt="Burj khalifa, dubai" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Psicologico y Juridico</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Acompañamiento</a>
                  </h3>

                  <p class="card-text">
                    Podrás acceder desde manera remota de una asesoría en temas de ayuda profesional de psicología o en temas juridicos.
                    
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/ventas.jpeg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Maximización de Ingresos
                    </a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Estrategias</a>
                  </h3>

                  <p class="card-text">
                    Desarrollamos planes de acción personalizados que incluyen análisis de mercado, optimización de horarios de transmisión.
                  </p>

                </div>

              </div>
            </li>

          </ul>

         

        </div>
      </section>





      <!-- 
        - #PACKAGE
      -->
      <section class="package" id="package" style="display: block;">
        <div class="container">
      
          <p class="section-subtitle">Nominados en los premios Lalexpo 2022</p>
      
          <h2 class="h2 section-title">Nuestra Trayectoria</h2>
     
          <p class="section-text">
          
          </p>
      
          <ul class="package-list">
            <li>
              <div class="package-card">
      
                <figure class="card-banner">
                  <img src="./assets/images/hero.jpeg" alt="Space Models" loading="lazy">
                </figure>
      
                <div class="card-content" style="  width: 100%;">
                  <h3 class="h3 card-title"> Algunos de los principales retos que enfrentamos como agencia de contenido son:</h3>
      
                
                  <p class="card-text">
                    Evolucionar junto a las plataformas, adaptándonos a sus tendencias y algoritmos. Brindamos un servicio personalizado y de excelencia a cada modelo, marcando la diferencia en el mercado. Cultivamos la confianza y fidelidad en nuestra comunidad.
                  </p>
                  <h3 class="h3 card-title"> Diferenciarnos de la competencia:</h3>
      
                  <p class="card-text">
                   El objetivo principal de Space es fortalecer y respaldar a las creadoras de contenido para adultos, abordando esta tarea con un enfoque altamente profesional, fervoroso y experto. Nos destacamos en el sector por nuestra capacidad excepcional para entender y aplicar las estrategias más eficaces para el éxito y la generación de ingresos en este ámbito. 
                  </p>
                  <p class="card-text">
                    Como una entidad que valora la inclusión, la diversidad y los principios feministas, nos comprometemos a ofrecer apoyo incondicional y a empoderar a las creadoras, incentivándolas a ser las líderes y artífices de sus propios proyectos e ideas innovadoras.
                  </p>
                  <h3 class="h3 card-title">Empoderamiento y Distinción: La Elección de Space para Triunfar en el Contenido Adulto</h3>
                  <p class="card-text">
                    Nuestro objetivo es distinguirnos claramente de nuestros competidores y cultivar una sensación de confianza y lealtad profunda dentro de nuestra comunidad. Este enfoque nos permite no solo sobresalir en nuestro campo sino también asegurar una base sólida y comprometida de seguidores y colaboradores.
                  </p>
                  <p class="card-text">
                    Nuestro equipo, fervientemente dedicado a la excelencia en el contenido para adultos, ofrece orientación experta y recursos personalizados, asegurando que cada creadora no solo alcance su potencial máximo, sino que también se sienta valorada y respaldada en un ambiente inclusivo y empoderador. 
                  </p>
            
                  <p class="card-text">
                    Una chica debe elegir Space como agencia para crear contenido porque somos un equipo de profesionales apasionados por el contenido adulto, conocemos las claves para triunfar y hacer mas dinero. Ademas, somos una agencia inclusiva, diversa y feminista, que apoya y empodera a las chicas para que sean protagonistas de sus propias ideas.
                  </p>
                  <h3 class="h3 card-title">Tenemos presencia en:</h3>
                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>
                        <p class="text">Cúcuta</p>
                      </div>
                    </li>
      
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>
                        <p class="text">Medellín</p>
                      </div>
                    </li>
      
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>
                        <p class="text">Bucaramanga</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      





      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery" style="margin-bottom: 200px;">
        <div class="container">

          <p class="section-subtitle">Valores Corporativos</p>

          <h2 class="h2 section-title">Mision y Vision</h2>

          <p class="section-text">
            Conoce que nos inspira cada dia a dar siempre un valor agregado a todos quienes confian en nosotros
          </p>

          <ul class="gallery-list" style="display: flex;">

            <li class="gallery-item" style="margin: 20px;">
              <figure class="gallery-image">
                <img src="./assets/images/valores01.jpeg" alt="Gallery image">
              </figure>
              <h3 class="h3 card-title" style="padding-top: 15px;">Mision</h3>
              <p  class="section-text johan" style="min-width: 50% !important; padding-top: 15px; display: none;"> Mantenernos al dia con las tendencias y los cambios de algoritmo de cada plataforma, por ende ofrecemos un servicio personalizado y de calidad a cada una de nuestras modelos, diferenciarnos de la competencia y generar confiana y fidelidad entre nuestra comunidad.</p>
            </li>

            <li class="gallery-item" style="margin: 20px; ">
              <figure class="gallery-image">
                <img src="./assets/images/valores2.jpeg" alt="Gallery image">
              </figure>
              <h3 class="h3 card-title" style="padding-top: 15px;">Vision</h3>
              <p   class="section-text johan"style="min-width: 50%; padding-top: 15px; display: none;">Ser la agencia líder en el sector de contenido para adultos, reconocida por impulsar el éxito y la innovación constante. Aspiramos a establecer el estándar de excelencia en servicios personalizados, adaptándonos ágilmente a las tendencias emergentes en los algoritmos de las plataformas.</p>
            </li>

          

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact" style="display: ;">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">En Space, transformamos tu pasión en éxito.</p>

            <h2 class="h2 section-title">PREPÁRATE PARA UNA EXPERIENCIA INOLVIDABLE. ¡EN SPACE MODELS!</h2>

            <p class="section-text">
              Nuestro equipo especializado en contenido para adultos te guía hacia la cima con estrategias personalizadas, innovación y un compromiso firme con la inclusividad y la diversidad. Únete a una comunidad donde tus ideas toman protagonismo y tu talento recibe el reconocimiento que merece.
            </p>
          </div>

          <button class="btn btn-secondary">¡Contactanos!</button>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="display: ">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/Xspace.png" alt="Tourly logo">
          </a>

          <p class="footer-text">
            Nos enfocamos en brindar un ambiente de trabajo seguro, inclusivo y diverso, donde cada modelo recibe apoyo personalizado y acceso a las últimas tecnologías y estrategias de marketing.
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contactanos</h4>

          <p class="contact-text">
            Es el momento de materializar tus sueños
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+57 304 663 8178</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:info@spacemodels.pro" class="contact-link">info@spacemodels.pro</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>Cucuta - Medellin - Bucaramanga</address>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
           ¡Dejanos Contactarte!
          </p>

          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="Ingresa tu correo" required>

            <button type="submit" class="btn btn-secondary">Enviar</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="">Space Models</a>. Todos los Derechos Reservados
        </p>

     <!-- Enlaces en el footer -->
<ul>
  <li><a href="#" class="footer-bottom-link" data-modal="privacyModal">Privacy Policy</a></li>
  <li><a href="#" class="footer-bottom-link" data-modal="termsModal">Term & Condition</a></li>
  <li><a href="#" class="footer-bottom-link" data-modal="faqModal">FAQ</a></li>
</ul>

<!-- Modales -->
<div id="privacyModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Política de Privacidad</h2>
    <!-- Contenido de la Política de Privacidad -->
    <p>Introducción <br>
      Bienvenidos a spacemodels.pro: Nos comprometemos a proteger su privacidad y asegurar que sus datos personales se manejen de forma segura y de acuerdo con las normativas de privacidad aplicables.
      
      Recopilación de Datos
      Detallamos los tipos de información personal que recopilamos cuando utiliza nuestros servicios, incluyendo pero no limitado a, nombre, dirección de correo electrónico, y datos de navegación.
      
      Uso de la Información
      Explicamos cómo utilizamos la información recopilada, tales como personalizar su experiencia, mejorar nuestro sitio web, y comunicarnos con usted respecto a servicios y ofertas.
      
      Compartir Información con Terceros
      Describimos las circunstancias bajo las cuales podríamos compartir su información con terceros, asegurando siempre su privacidad y consentimiento.
      
      Seguridad de Datos
      Resaltamos las medidas que implementamos para proteger su información contra el acceso no autorizado o la divulgación.
      
      Derechos del Usuario
      Informamos sobre sus derechos en relación con sus datos personales, incluyendo el acceso, la rectificación, y la eliminación de los mismos.</p>
  </div>
</div>

<div id="termsModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Términos y Condiciones</h2>
    <!-- Contenido de Términos y Condiciones -->
    <p>Aceptación de los Términos <br>
      Al acceder a spacemodels.pro, usted acepta estar sujeto a estos términos y condiciones, todas las leyes y regulaciones aplicables, y acepta que es responsable del cumplimiento de cualquier ley local aplicable.
      
      Uso de los Servicios
      Detallamos el uso correcto de los servicios ofrecidos en nuestro sitio web, incluyendo prohibiciones específicas para asegurar el respeto y la seguridad de todos los usuarios.
      
      Propiedad Intelectual
      Clarificamos la propiedad y los derechos de uso de los contenidos presentes en nuestro sitio web, incluyendo textos, gráficos y códigos.
      
      Limitación de Responsabilidad
      Establecemos las limitaciones de responsabilidad respecto a la información y servicios proporcionados en el sitio web.
      
      Modificaciones a los Términos
      Informamos sobre cómo y cuándo los términos y condiciones podrían ser actualizados o modificados.
      
      </p>
  </div>
</div>

<div id="faqModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Preguntas Frecuentes (FAQ)</h2>
    <!-- Contenido de FAQ -->
    <p>
  
¿Cómo me registro?
¿Cómo puedo contactar con soporte?
¿Qué métodos de pago se aceptan?
¿Cómo se maneja mi privacidad?
¿Cómo puedo cancelar mi cuenta? <br>
Comunicate a nuestro WhatsApp +57 304 663 8178 con gusto te aclararemos todas tus dudas
    </p>
  </div>
</div>


      </div>
    </div>

  </footer>


 <style>
  /* Estilo básico para los modales */
.modal {
  display: none; /* Oculto por defecto */
  position: fixed; /* Fijo en toda la pantalla */
  z-index: 1; /* Situado sobre todo */
  left: 0;
  top: 0;
  width: 100%; /* Ancho completo */
  height: 100%; /* Altura completa */
  overflow: auto; /* Habilitar desplazamiento si es necesario */
  background-color: rgb(0,0,0); /* Color de fondo */
  background-color: rgba(0,0,0,0.4); /* Negro con opacidad */
}

/* Estilo para el contenido del modal */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% desde arriba y centrado */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Podría ser más o menos, dependiendo del diseño */
}

/* El botón cerrar (x) */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

 </style>
 <script>
  // Obtener todos los enlaces que abren modales
var modalLinks = document.querySelectorAll('.footer-bottom-link');

modalLinks.forEach(function(link) {
  link.onclick = function() {
    var modalId = this.getAttribute('data-modal');
    var modal = document.getElementById(modalId);
    modal.style.display = "block";
  };
});

// Obtener todos los elementos con la clase "close" para cerrar los modales
var closeButtons = document.querySelectorAll('.close');

closeButtons.forEach(function(btn) {
  btn.onclick = function() {
    var modal = this.closest('.modal');
    modal.style.display = "none";
  };
});

// Cerrar el modal al hacer clic fuera de él
window.onclick = function(event) {
  if (event.target.className === 'modal') {
    event.target.style.display = "none";
  }
};

 </script>

  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>