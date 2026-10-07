<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Alfonsi | Fundador & Dirección Técnica en Didapax Sistem</title>
    <meta name="description" content="Perfil institucional de Daniel Alfonsi, fundador y Director de Arquitectura de Software en Didapax Sistem. Firma desarrolladora de software y soluciones tecnológicas en Venezuela.">
    <link rel="stylesheet" href="index.css?v=1.4">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
</head>
<body>
    <div class="bg-gradient"></div>

    <!-- Navigation Bar -->
    <nav>
        <a href="index.php" class="logo">
            <div class="nav-logo-badge">
                <img src="assets/img/logo.png" alt="Didapax Logo" class="nav-logo-img">
            </div>
            <div class="logo-text">DIDAPAX<span>SISTEM</span></div>
        </a>
        <div class="nav-links">
            <a href="index.php">Inicio</a>
            <a href="index.php#about">Empresa</a>
            <a href="index.php#contact">Contacto</a>
            <a href="index.php" class="nav-founder-link"><i class="fa-solid fa-arrow-left"></i> Volver a la Empresa</a>
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>

    <!-- Founder Hero Section -->
    <header class="founder-hero">
        <div class="founder-hero-grid">
            <div class="founder-photo-wrapper reveal">
                <img src="assets/img/daniel-alfonsi.jpg" alt="Daniel Alfonsi - Fundador de Didapax Sistem" class="founder-photo-img">
                <div class="founder-photo-badge">
                    <span><i class="fa-solid fa-user-check" style="color: var(--accent-blue);"></i> Daniel Alfonsi</span>
                    <span class="badge-location"><i class="fa-solid fa-location-dot"></i> Venezuela</span>
                </div>
            </div>

            <div class="founder-intro-content reveal">
                <div class="founder-tag">
                    <i class="fa-solid fa-building-user"></i> Dirección Técnica & Fundador
                </div>
                <h1 class="founder-name">Daniel Alfonsi</h1>
                <p class="founder-subtitle">Fundador & Director de Arquitectura de Software en Didapax Sistem</p>
                <p class="founder-bio-text">
                    Daniel Alfonsi es el fundador y líder de arquitectura técnica de <strong>Didapax Sistem</strong>. Al frente de la dirección tecnológica de la firma, define los estándares de ingeniería, la metodología de diseño de sistemas y la visión estratégica que orientan al equipo en el desarrollo de soluciones de software de alto impacto.
                </p>
                <p class="founder-bio-text">
                    Bajo su coordinación, Didapax Sistem ha consolidado una fuerte especialización en el paradigma <strong>Offline-First</strong>, garantizando que las plataformas empresariales mantengan su operatividad y resiliencia ante contingencias de conectividad, al tiempo que integran modelos analíticos de datos, interfaces web progresivas y esquemas criptográficos de alta seguridad.
                </p>
                <div class="founder-action-btns">
                    <a href="index.php#portfolio" class="btn-primary-founder">
                        <i class="fa-solid fa-cubes"></i> Soluciones de Didapax Sistem
                    </a>
                    <a href="https://github.com/didapax" target="_blank" rel="noopener noreferrer" class="btn-secondary-founder">
                        <i class="fa-brands fa-github"></i> Ecosistema en GitHub
                    </a>
                    <a href="mailto:didapax.sistem@didapax.biz" class="btn-secondary-founder">
                        <i class="fa-solid fa-envelope"></i> Contactar a la Firma
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Engineering Culture & Philosophy Section -->
    <section class="founder-section reveal">
        <h2 class="section-title">Cultura Técnica & <span>Filosofía de Ingeniería</span></h2>
        <div class="values-grid">
            <div class="glass-card reveal">
                <div class="skill-card-icon" style="margin-bottom: 1rem;">
                    <i class="fa-solid fa-wifi" style="transform: rotate(45deg);"></i>
                </div>
                <h4 style="color: #fff; font-size: 1.2rem; margin-bottom: 0.5rem;">Arquitectura Offline-First</h4>
                <p>En Didapax Sistem, los sistemas críticos se diseñan para operar sin depender exclusivamente de una conexión ininterrumpida. La firma implementa modelos de almacenamiento local y sincronización inteligente que garantizan continuidad operativa total.</p>
            </div>

            <div class="glass-card reveal">
                <div class="skill-card-icon" style="margin-bottom: 1rem;">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h4 style="color: #fff; font-size: 1.2rem; margin-bottom: 0.5rem;">Seguridad & Criptografía Nativa</h4>
                <p>El equipo prioriza la privacidad del usuario y la soberanía del dato mediante criptografía del lado del cliente (AES-256 GCM) y gestión segura de sesiones, blindando la integridad institucional de la información.</p>
            </div>

            <div class="glass-card reveal">
                <div class="skill-card-icon" style="margin-bottom: 1rem;">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <h4 style="color: #fff; font-size: 1.2rem; margin-bottom: 0.5rem;">Ingeniería Pragmática & Resultados</h4>
                <p>La firma promueve un enfoque de desarrollo enfocado en la estabilidad a largo plazo y la eficiencia de recursos. Cada módulo y servicio responde a necesidades operativas reales con arquitecturas limpias y escalables.</p>
            </div>
        </div>
    </section>

    <!-- Technical Stack & Capabilities Section -->
    <section class="founder-section reveal">
        <h2 class="section-title">Capacidades & <span>Dominio Tecnológico</span></h2>
        <div class="skills-grid">
            <div class="glass-card skill-card reveal">
                <div class="skill-card-icon">
                    <i class="fa-solid fa-server"></i>
                </div>
                <h3>Backend & Sistemas Distribuidos</h3>
                <p>Diseño e implementación de servicios distribuidos de alto rendimiento, arquitecturas orientadas a eventos, APIs REST y microservicios diseñados para concurrencia y tolerancia a fallos.</p>
                <div class="skill-pills">
                    <span class="skill-pill">Python</span>
                    <span class="skill-pill">PHP</span>
                    <span class="skill-pill">Node.js</span>
                    <span class="skill-pill">Nginx</span>
                    <span class="skill-pill">Linux Systems</span>
                </div>
            </div>

            <div class="glass-card skill-card reveal">
                <div class="skill-card-icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3>Frontend Moderno & Ecosistemas PWA</h3>
                <p>Desarrollo de interfaces reactivas fluidas y Progressive Web Apps (PWA) instalables, integrando almacenamiento cliente y renderizado optimizado para experiencias de usuario continuas.</p>
                <div class="skill-pills">
                    <span class="skill-pill">React 19</span>
                    <span class="skill-pill">JavaScript (ES6+)</span>
                    <span class="skill-pill">PWA / Service Workers</span>
                    <span class="skill-pill">Glassmorphism UI</span>
                </div>
            </div>

            <div class="glass-card skill-card reveal">
                <div class="skill-card-icon">
                    <i class="fa-solid fa-database"></i>
                </div>
                <h3>Bases de Datos & Sincronización</h3>
                <p>Estructuración de datos relacionales y esquemas descentralizados con mecanismos de sincronización continua, respaldos automáticos y optimización de consultas complejas.</p>
                <div class="skill-pills">
                    <span class="skill-pill">PostgreSQL</span>
                    <span class="skill-pill">MySQL</span>
                    <span class="skill-pill">IndexedDB</span>
                    <span class="skill-pill">SQLite</span>
                </div>
            </div>

            <div class="glass-card skill-card reveal">
                <div class="skill-card-icon">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <h3>Fintech & Modelos Algorítmicos</h3>
                <p>Desarrollo de plataformas de análisis cuantitativo, algoritmos de cálculo predictivo e integración de indicadores técnicos para procesamiento de transacciones financieras.</p>
                <div class="skill-pills">
                    <span class="skill-pill">Trading Cuantitativo</span>
                    <span class="skill-pill">Stochastic / MACD</span>
                    <span class="skill-pill">Fibonacci Levels</span>
                    <span class="skill-pill">APIs Financieras</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Projects Section -->
    <section class="founder-section reveal">
        <h2 class="section-title">Soluciones Desarrolladas <span>por Didapax Sistem</span></h2>
        <div class="founder-projects-summary">
            <div class="glass-card founder-project-item reveal">
                <h4>Algometric <span style="font-size: 0.8rem; color: var(--accent-blue);"><i class="fa-solid fa-chart-line"></i> Fintech</span></h4>
                <p>Plataforma tecnológica de trading algorítmico y monitoreo cuantitativo de activos. Desarrollada para procesar dinámicas de mercado mediante indicadores de precisión en tiempo real.</p>
            </div>

            <div class="glass-card founder-project-item reveal">
                <h4>Preppers Market <span style="font-size: 0.8rem; color: var(--accent-blue);"><i class="fa-solid fa-basket-shopping"></i> PWA Social</span></h4>
                <p>Red de comercio comunitario con arquitectura PWA, sistema de códigos QR multi-rol y gestión de abastecimiento directo entre productores locales y familias consumidoras.</p>
            </div>

            <div class="glass-card founder-project-item reveal">
                <h4>Bitcacao / Koawallet <span style="font-size: 0.8rem; color: var(--accent-blue);"><i class="fa-solid fa-seedling"></i> AgroTech</span></h4>
                <p>Ecosistema de trazabilidad agrícola y tokenización de cosechas de cacao, aportando transparencia, auditoría de calidad y valor digital a los sectores productivos rurales.</p>
            </div>

            <div class="glass-card founder-project-item reveal">
                <h4>Cryptex Safe <span style="font-size: 0.8rem; color: var(--accent-blue);"><i class="fa-solid fa-lock"></i> Criptografía</span></h4>
                <p>Herramienta de cifrado simétrico AES-256 GCM ejecutada íntegramente en el cliente. Garantiza privacidad absoluta al operar sin envío ni almacenamiento de claves en servidores remotos.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="footer-content">
            <div class="footer-info">
                <div class="footer-brand">
                    <img src="assets/img/logo.png" alt="Didapax Logo" class="footer-logo-img">
                    <h4 style="margin-bottom: 0;">Didapax Sistem</h4>
                </div>
                <p>Firma de Ingeniería de Software & Ecosistemas Digitales.</p>
                <p><i class="fa-solid fa-location-dot"></i> Ubicación: Venezuela</p>
            </div>
            <div class="footer-info">
                <h4>Dirección Técnica</h4>
                <p style="color: #fff; font-weight: 600;"><i class="fa-solid fa-user-tie"></i> Daniel Alfonsi</p>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 6px;">Fundador & Director de Arquitectura de Software.</p>
            </div>
            <div class="footer-info">
                <h4>Contacto</h4>
                <p><i class="fa-solid fa-envelope"></i> Email: didapax.sistem@didapax.biz</p>
            </div>
            <div class="footer-info">
                <h4>Navegación</h4>
                <p><a href="index.php" style="color: var(--accent-blue); text-decoration: none;"><i class="fa-solid fa-house"></i> Ir al Inicio de Didapax</a></p>
                <p><a href="https://github.com/didapax" target="_blank" style="color: var(--accent-blue); text-decoration: none;"><i class="fa-brands fa-github"></i> GitHub</a></p>
            </div>
        </div>
        <p style="text-align: center; margin-top: 50px; opacity: 0.5; font-size: 0.8rem;">&copy; <?php echo date('Y'); ?> Didapax Sistem. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script>
        // Reveal elements on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Mobile Menu Toggle
        const menuToggle = document.getElementById('mobile-menu');
        const navLinks = document.querySelector('.nav-links');
        const nav = document.querySelector('nav');

        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                menuToggle.classList.toggle('active');
                nav.classList.toggle('active');
            });

            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                    menuToggle.classList.remove('active');
                    nav.classList.remove('active');
                });
            });
        }
    </script>
</body>
</html>
