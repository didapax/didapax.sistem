<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Didapax Sistem | Daniel Alfonsi Portfolio</title>
    <meta name="description" content="Soluciones Tecnológicas de Alto Impacto. Desde Finanzas Automatizadas hasta el Futuro del Agro. Daniel Alfonsi, Desarrollador Senior Full-Stack.">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
</head>
<body>
    <div class="bg-gradient"></div>

    <nav>
        <a href="#" class="logo">DIDAPAX<span>SISTEM</span></a>
        <div class="nav-links">
            <a href="#about">Sobre Mí</a>
            <a href="#portfolio">Portafolio</a>
            <a href="#values">Valores</a>
            <a href="#contact">Contacto</a>
        </div>
    </nav>

    <header class="hero">
        <h1 class="reveal">Didapax Sistem</h1>
        <p class="subtitle reveal">Soluciones Tecnológicas de Alto Impacto: Desde Finanzas Automatizadas hasta el Futuro del Agro.</p>
        <p class="hero-intro reveal">Soy Daniel Alfonsi, desarrollador Senior Full-Stack y fundador de Didapax Sistem. Me especializo en crear ecosistemas digitales robustos que resuelven problemas del mundo real mediante arquitecturas optimizadas y escalables.</p>
    </header>

    <section id="about" class="reveal">
        <h2 class="section-title">Perfil <span>Profesional</span></h2>
        <div class="glass-card">
            <p>Con una sólida trayectoria en el desarrollo de software, combino la ingeniería de datos con una visión comercial pragmática. Mi enfoque se centra en el desarrollo <strong>Offline-First</strong>, garantizando que las aplicaciones funcionen de manera eficiente incluso en entornos de conectividad inestable. Como desarrollador, manejo un stack diverso que incluye Python, PHP, Node.js y AppSheet, permitiéndome construir desde complejos bots de trading hasta sistemas de gestión logística.</p>
        </div>
    </section>

    <section id="portfolio">
        <h2 class="section-title reveal">The <span>Hub</span>: Proyectos</h2>
        <div class="portfolio-grid">
            <div class="glass-card portfolio-card reveal">
                <h3>Algometric (Fintech)</h3>
                <p>Plataforma avanzada de análisis técnico y trading automatizado. Implementación de algoritmos basados en indicadores de precisión (Stochastic, MACD, Fibonacci) para la optimización de activos digitales.</p>
                <a href="https://algometric.biz/signal" target="_blank" class="btn-link">Visitar algometric.info</a>
            </div>
            <div class="glass-card portfolio-card reveal">
                <h3>Bitcacao / Koawallet</h3>
                <p>Transformando la industria del cacao mediante la tokenización de peso y el control de calidad digital. Una solución integral para la trazabilidad y el empoderamiento de los productores locales.</p>
                <a href="https://bitcacao.biz" target="_blank" class="btn-link">Visitar bitcacao.com</a>
            </div>
            <div class="glass-card portfolio-card reveal">
                <h3>Paradigma EDU360</h3>
                <p>Ecosistema educativo diseñado para el monitoreo del conocimiento mediante inteligencia artificial, facilitando la gestión de aulas virtuales y auditorías académicas.</p>
                <a href="#" class="btn-link">Ver Proyecto</a>
            </div>
        </div>
    </section>

    <section id="values">
        <h2 class="section-title reveal">Valores <span>Técnicos</span></h2>
        <div class="values-grid">
            <div class="glass-card reveal">
                <h4>Arquitectura de Datos</h4>
                <p>Especialista en sincronización de bases de datos distribuidas y sistemas orientados a eventos.</p>
            </div>
            <div class="glass-card reveal">
                <h4>Seguridad y Estabilidad</h4>
                <p>Implementación de servidores Nginx de alta disponibilidad y gestión segura de sesiones y datos.</p>
            </div>
            <div class="glass-card reveal">
                <h4>Innovación Local</h4>
                <p>Desarrollo de redes de consumo comunitario y herramientas que impulsan la economía regional.</p>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="footer-content">
            <div class="footer-info">
                <h4>Daniel Alfonsi</h4>
                <p>Fundador de Didapax Sistem</p>
                <p>Ubicación: Sucre, Venezuela.</p>
            </div>
            <div class="footer-info">
                <h4>Soporte</h4>
                <p>Email: contacto@didapax.sistem.com</p>
            </div>
            <div class="footer-info">
                <h4>Enlaces Rápidos</h4>
                <p><a href="https://github.com/didapax" target="_blank" style="color: var(--accent-blue);">GitHub</a></p>
            </div>
        </div>
        <p style="text-align: center; margin-top: 50px; opacity: 0.5; font-size: 0.8rem;">&copy; <?php echo date('Y'); ?> Didapax Sistem Daniel Alfonsi. Todos los derechos reservados.</p>
    </footer>

    <script>
        // Simple Intersection Observer to reveal elements on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>
</html>
