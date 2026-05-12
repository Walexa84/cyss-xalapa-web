<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYSS Xalapa | Seguridad, Cómputo y Redes</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <!-- Boxicons for icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Navbar (Oscura para que resalte el logo blanco) -->
    <header class="navbar dark-nav" id="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">
                <img src="img/logo.png" alt="CYSS Xalapa" class="nav-logo" onerror="this.style.display='none'">
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#hikstore">Hikstore</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
            <div class="nav-buttons">
                <!-- Botón que redirige al futuro sistema de gestión -->
                <a href="#sistema-gestion" class="btn btn-outline-light" id="erp-link">
                    <i class='bx bx-laptop'></i> ERP
                </a>
            </div>
            <div class="mobile-menu-btn">
                <i class='bx bx-menu' id="menu-icon"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <span class="badge"><i class='bx bx-check-shield'></i> Seguridad y Tecnología Total</span>
                <h1>Protegemos lo que más <span>te importa</span></h1>
                <p>Soluciones integrales de Seguridad, Redes y Cómputo en Xalapa. Proveemos e instalamos tecnología de punta para empresas y hogares.</p>
                <div class="hero-actions">
                    <a href="#services" class="btn btn-primary">Ver Servicios</a>
                    <a href="https://wa.me/522281471877?text=Hola,%20me%20gustaría%20solicitar%20información." target="_blank" class="btn btn-whatsapp">
                        <i class='bx bxl-whatsapp'></i> WhatsApp
                    </a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <img src="img/hero.webp" alt="Centro de monitoreo SOC" class="hero-img-main">
                <!-- Decoración flotante -->
                <div class="floating-badge">
                    <i class='bx bx-cctv'></i> <span>Monitoreo 24/7</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Nuestros Servicios</h2>
                <p>Diseñamos e implementamos sistemas robustos para tu tranquilidad y conectividad.</p>
            </div>
            <div class="services-grid">
                <!-- CCTV -->
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="img/cctv.webp" alt="CCTV" class="service-img">
                        <div class="icon-box-overlay"><i class='bx bx-cctv'></i></div>
                    </div>
                    <div class="service-content">
                        <h3>CCTV</h3>
                        <p>Cámaras de alta definición con instalación profesional y monitoreo 24/7. Seguridad y tranquilidad garantizadas para tu negocio u hogar.</p>
                    </div>
                </div>
                <!-- Alarmas -->
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="img/alarma.webp" alt="Alarmas" class="service-img">
                        <div class="icon-box-overlay"><i class='bx bx-bell'></i></div>
                    </div>
                    <div class="service-content">
                        <h3>Alarmas</h3>
                        <p>Sistemas indispensables que unen diversos sensores para que monitorees en tiempo real desde cualquier parte del mundo.</p>
                    </div>
                </div>
                <!-- Cercos -->
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="img/cercos.webp" alt="Cercos Eléctricos" class="service-img">
                        <div class="icon-box-overlay"><i class='bx bx-bolt-circle'></i></div>
                    </div>
                    <div class="service-content">
                        <h3>Cercos Eléctricos</h3>
                        <p>Sistemas de descarga disuasivos y de contención que previenen intrusiones y mantienen alejados a extraños de tu propiedad.</p>
                    </div>
                </div>
                <!-- Redes -->
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="img/redes.webp" alt="Redes" class="service-img">
                        <div class="icon-box-overlay"><i class='bx bx-network-chart'></i></div>
                    </div>
                    <div class="service-content">
                        <h3>Redes</h3>
                        <p>Diseño, implementación y gestión de redes estables y protegidas, vitales para las operaciones industriales y corporativas de hoy.</p>
                    </div>
                </div>
                <!-- Cómputo -->
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="img/computo.webp" alt="Cómputo" class="service-img">
                        <div class="icon-box-overlay"><i class='bx bx-desktop'></i></div>
                    </div>
                    <div class="service-content">
                        <h3>Cómputo</h3>
                        <p>Mantenimiento preventivo y correctivo para equipos portátiles y de escritorio, optimizando su rendimiento y vida útil.</p>
                    </div>
                </div>
                <!-- Incendios -->
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="img/incendio.webp" alt="Detección de Incendios" class="service-img">
                        <div class="icon-box-overlay"><i class='bx bxs-hot'></i></div>
                    </div>
                    <div class="service-content">
                        <h3>Detección de Incendios</h3>
                        <p>Sensores de alta precisión para alertar sobre cualquier eventualidad crítica en entornos de vital importancia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hikstore Section -->
    <section id="hikstore" class="hikstore">
        <div class="container">
            <div class="hikstore-card">
                <div class="hikstore-content">
                    <span class="badge badge-red">Tienda Oficial</span>
                    <h2>Nuestra <span>HIKSTORE</span></h2>
                    <p>Somos distribuidores oficiales de <strong>HIKVISION</strong>. Encuentra el catálogo más completo de cámaras, grabadores, controles de acceso y accesorios de la marca líder mundial en videovigilancia con el respaldo y garantía de CYSS Xalapa.</p>
                    <a href="hikstore.php" class="btn btn-primary btn-large">Visitar Hikstore <i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <div class="hikstore-image-wrapper">
                    <img src="img/hikstore.webp" alt="Hikvision Store" class="img-fluid rounded-shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image-wrapper">
                    <img src="img/nosotros.webp" alt="Equipo CYSS Xalapa" class="img-fluid rounded-shadow">
                    <div class="experience-badge">
                        <span class="number">+20</span>
                        <span class="text">Años de<br>Experiencia</span>
                    </div>
                </div>
                <div class="about-text">
                    <div class="section-header left-align">
                        <h2>Acerca de Nosotros</h2>
                        <p>Profesionales dedicados a salvaguardar tu patrimonio e impulsar tu productividad.</p>
                    </div>
                    <h3>Compromiso, Calidad y Tecnología</h3>
                    <p>En CYSS Xalapa nos especializamos en ofrecer soluciones integrales adaptadas a las necesidades reales de cada cliente. Nuestro equipo técnico cuenta con años de experiencia en la instalación, configuración y mantenimiento de sistemas electrónicos.</p>
                    <p>Trabajamos exclusivamente con las mejores marcas del mercado como Hikvision, Ruijie y Dahua, asegurando equipos duraderos y con soporte continuo.</p>
                    
                    <div class="about-stats">
                        <div class="stat-item">
                            <i class='bx bx-support'></i>
                            <div>
                                <h4>Soporte</h4>
                                <p>Atención Personalizada</p>
                            </div>
                        </div>
                        <div class="stat-item">
                            <i class='bx bx-shield-quarter'></i>
                            <div>
                                <h4>Garantía</h4>
                                <p>En todos nuestros equipos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contáctanos</h2>
                <p>Estamos listos para atenderte y ofrecerte la mejor solución.</p>
            </div>
            <div class="contact-grid">
                <div class="info-card">
                    <i class='bx bx-phone-call'></i>
                    <h3>Llámanos / WhatsApp</h3>
                    <p>Atención inmediata para tus proyectos.</p>
                    <a href="https://wa.me/522281471877?text=Hola,%20me%20gustaría%20solicitar%20información." class="btn btn-whatsapp dynamic-btn" target="_blank">
                        <i class='bx bxl-whatsapp'></i> Enviar Mensaje
                    </a>
                </div>
                <div class="info-card">
                    <i class='bx bx-envelope'></i>
                    <h3>Correo Electrónico</h3>
                    <p>Envíanos tus requerimientos detallados.</p>
                    <a href="mailto:contacto@cyssxalapa.com.mx" class="btn btn-primary dynamic-btn">
                        <i class='bx bx-mail-send'></i> Escribir Correo
                    </a>
                </div>
                <div class="info-card">
                    <i class='bx bx-map'></i>
                    <h3>Ubicación</h3>
                    <p>Xalapa, Veracruz y alrededores.</p>
                    <a href="https://www.google.com/maps/search/Cyss+Xalapa/" target="_blank" class="btn btn-outline dynamic-btn">
                        <i class='bx bx-map-pin'></i> Ver en Mapa
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container footer-container">
            <div class="footer-brand">
                <img src="img/logo.png" alt="CYSS Logo" height="50" style="margin-bottom: 15px; object-fit: contain;" onerror="this.style.display='none'">
                <p>Seguridad, Cómputo y Redes. Distribuidores oficiales HIKVISION en Xalapa.</p>
            </div>
            <div class="footer-links">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#hikstore">Hikstore</a></li>
                    <li><a href="#about">Nosotros</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Síguenos</h3>
                <div class="social-icons">
                    <a href="https://www.facebook.com/cyssxal" target="_blank"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/cyss_xalapa/" target="_blank"><i class='bx bxl-instagram'></i></a>
                    <a href="https://wa.me/522281471877" target="_blank"><i class='bx bxl-whatsapp'></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 CYSS Xalapa. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Modal para el sistema de gestión -->
    <div id="erp-modal" class="modal">
        <div class="modal-content glass-card">
            <span class="close-btn">&times;</span>
            <div class="modal-body">
                <i class='bx bx-time-five modal-icon'></i>
                <h2>Sistema en Desarrollo</h2>
                <p>El sistema de gestión interna (ERP) de CYSS Xalapa está actualmente en construcción. ¡Pronto estará disponible!</p>
                <button class="btn btn-primary close-modal-btn">Entendido</button>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
