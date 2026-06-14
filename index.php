<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Didapax Sistem | Daniel Alfonsi Portfolio</title>
    <meta name="description" content="Soluciones Tecnológicas de Alto Impacto. Desde Finanzas Automatizadas hasta el Futuro del Agro. Daniel Alfonsi, Desarrollador Senior Full-Stack.">
    <link rel="stylesheet" href="index.css?v=1.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
        <div class="menu-toggle" id="mobile-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
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
                <a href="https://algometric.biz/signal" target="_blank" class="btn-link">Visitar Algometric</a>
            </div>
            <div class="glass-card portfolio-card reveal">
                <h3>Bitcacao / Koawallet</h3>
                <p>Transformando la industria del cacao mediante la tokenización de peso y el control de calidad digital. Una solución integral para la trazabilidad y el empoderamiento de los productores locales.</p>
                <a href="https://bitcacao.biz" target="_blank" class="btn-link">Visitar BitCacao</a>
            </div>
            <div class="glass-card portfolio-card reveal">
                <h3>Aura Protocol</h3>
                <p>Ecosistema educativo diseñado para el monitoreo del conocimiento mediante inteligencia artificial, facilitando la gestión de aulas virtuales y auditorías académicas.</p>
                <a href="#" class="btn-link">Ver Proyecto</a>
            </div>
            <div class="glass-card portfolio-card reveal">
                <h3>Cryptex (Offline Safe)</h3>
                <p>Herramienta Offline-First para cifrar y descifrar frases de recuperación, textos o cartas de forma 100% local en tu dispositivo con cifrado AES-256 de grado militar.</p>
                <button class="btn-link" id="open-cryptex-btn" style="border: none; cursor: pointer; text-align: center; font-family: inherit;">Abrir Cryptex</button>
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
                <p><i class="fa-solid fa-location-dot"></i> Ubicación: Sucre, Venezuela.</p>
            </div>
            <div class="footer-info">
                <h4>Soporte</h4>
                <p><i class="fa-solid fa-envelope"></i> Email: didapax.sistem@didapax.biz</p>
            </div>
            <div class="footer-info">
                <h4>Enlaces Rápidos</h4>
                <p><a href="https://github.com/didapax" target="_blank" style="color: var(--accent-blue); text-decoration: none;"><i class="fa-brands fa-github"></i> GitHub</a></p>
            </div>
        </div>
        <p style="text-align: center; margin-top: 50px; opacity: 0.5; font-size: 0.8rem;">&copy; <?php echo date('Y'); ?> Didapax Sistem Daniel Alfonsi. Todos los derechos reservados.</p>
    </footer>

    <!-- Cryptex Modal -->
    <div class="cryptex-modal" id="cryptex-modal">
        <div class="cryptex-content glass-card">
            <button class="cryptex-close" id="close-cryptex-btn" aria-label="Cerrar modal">&times;</button>
            
            <h3 style="font-size: 1.8rem; display: flex; align-items: center; gap: 12px; margin-bottom: 0.5rem;">
                <i class="fa-solid fa-key" style="color: var(--accent-blue);"></i> Cryptex: <span>Cifrado Seguro</span>
            </h3>
            
            <div class="cryptex-banner">
                <i class="fa-solid fa-shield-halved"></i>
                <div>
                    <strong>Seguridad 100% Local (Offline-First):</strong> Todo el cifrado y descifrado ocurre directamente en tu navegador usando la API nativa de criptografía del sistema. Tus datos o contraseñas jamás viajan al servidor ni se guardan en ninguna base de datos.
                </div>
            </div>

            <div class="cryptex-tabs">
                <button class="cryptex-tab-btn active" data-tab="encrypt-pane">Encriptar</button>
                <button class="cryptex-tab-btn" data-tab="decrypt-pane">Desencriptar</button>
            </div>

            <!-- Panel de Encriptar -->
            <div class="cryptex-pane active" id="encrypt-pane">
                <div class="cryptex-group">
                    <label for="encrypt-input">Texto o Semilla</label>
                    <textarea id="encrypt-input" rows="4" placeholder="Escribe aquí tu texto, semilla o carta secreta..."></textarea>
                    <div id="encrypt-word-count" style="font-size: 0.8rem; color: var(--text-muted); text-align: right; margin-top: 4px;">Palabras: 0</div>
                </div>

                <div class="cryptex-group">
                    <label for="encrypt-password">Clave Secreta para Cifrar</label>
                    <div class="cryptex-input-wrapper">
                        <input type="password" id="encrypt-password" placeholder="Ingresa una clave segura para encriptar...">
                        <button type="button" class="cryptex-toggle-pass" data-target="encrypt-password">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                    <span class="cryptex-warning-text">
                        <i class="fa-solid fa-triangle-exclamation"></i> Guarda bien esta clave. Si la olvidas, nadie podrá descifrar tu mensaje.
                    </span>
                </div>

                <button class="cryptex-action-btn" id="encrypt-btn">
                    <i class="fa-solid fa-lock"></i> Encriptar Texto
                </button>

                <div class="cryptex-result" id="encrypt-result">
                    <label style="font-size: 0.85rem; font-weight: 600; color: var(--text-muted);">Mensaje Encriptado</label>
                    <div class="cryptex-output-box">
                        <pre id="encrypt-output"></pre>
                        <button class="cryptex-copy-btn" id="copy-encrypt-btn" title="Copiar texto encriptado">
                            <i class="fa-solid fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Panel de Desencriptar -->
            <div class="cryptex-pane" id="decrypt-pane">
                <div class="cryptex-group">
                    <label for="decrypt-input">Mensaje Encriptado</label>
                    <textarea id="decrypt-input" rows="4" placeholder="Pega aquí el código encriptado generado por Cryptex..."></textarea>
                </div>

                <div class="cryptex-group">
                    <label for="decrypt-password">Clave Secreta para Descifrar</label>
                    <div class="cryptex-input-wrapper">
                        <input type="password" id="decrypt-password" placeholder="Ingresa la clave que se usó para encriptar...">
                        <button type="button" class="cryptex-toggle-pass" data-target="decrypt-password">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>

                <button class="cryptex-action-btn" id="decrypt-btn">
                    <i class="fa-solid fa-lock-open"></i> Desencriptar Texto
                </button>

                <div class="cryptex-result" id="decrypt-result">
                    <label style="font-size: 0.85rem; font-weight: 600; color: var(--text-muted);">Mensaje Descifrado Original</label>
                    <div class="cryptex-output-box">
                        <pre id="decrypt-output"></pre>
                        <button class="cryptex-copy-btn" id="copy-decrypt-btn" title="Copiar texto descifrado">
                            <i class="fa-solid fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

        // Mobile Menu Toggle
        const menuToggle = document.getElementById('mobile-menu');
        const navLinks = document.querySelector('.nav-links');
        const nav = document.querySelector('nav');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            menuToggle.classList.toggle('active');
            nav.classList.toggle('active');
        });

        // Close menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                menuToggle.classList.remove('active');
                nav.classList.remove('active');
            });
        });

        // Cryptex Cryptography & UI Controller
        (function() {
            // UI Elements
            const openBtn = document.getElementById('open-cryptex-btn');
            const closeBtn = document.getElementById('close-cryptex-btn');
            const modal = document.getElementById('cryptex-modal');
            
            if (!openBtn || !closeBtn || !modal) return;

            // Toggle Modal
            openBtn.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            closeBtn.addEventListener('click', () => {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            });

            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });

            // Tab Switching
            const tabBtns = document.querySelectorAll('.cryptex-tab-btn');
            const panes = document.querySelectorAll('.cryptex-pane');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    tabBtns.forEach(b => b.classList.remove('active'));
                    panes.forEach(p => p.classList.remove('active'));

                    btn.classList.add('active');
                    const activePane = document.getElementById(btn.getAttribute('data-tab'));
                    if (activePane) activePane.classList.add('active');
                });
            });

            // Toggle Password Visibility
            const passToggles = document.querySelectorAll('.cryptex-toggle-pass');
            passToggles.forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const inputId = toggle.getAttribute('data-target');
                    const input = document.getElementById(inputId);
                    const icon = toggle.querySelector('i');
                    if (!input || !icon) return;

                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.replace('fa-eye', 'fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.replace('fa-eye-slash', 'fa-eye');
                    }
                });
            });

            // Word Counter for Encryption input
            const encryptInput = document.getElementById('encrypt-input');
            const wordCounter = document.getElementById('encrypt-word-count');

            if (encryptInput && wordCounter) {
                encryptInput.addEventListener('input', () => {
                    const text = encryptInput.value.trim();
                    const words = text ? text.split(/\s+/).length : 0;
                    wordCounter.textContent = `Palabras: ${words}`;
                    if (words === 12) {
                        wordCounter.style.color = 'var(--accent-blue)';
                    } else {
                        wordCounter.style.color = 'var(--text-muted)';
                    }
                });
            }

            // Cryptography Helpers (AES-GCM 256-bit with PBKDF2)
            async function deriveKey(password, salt) {
                const encoder = new TextEncoder();
                const baseKey = await window.crypto.subtle.importKey(
                    "raw",
                    encoder.encode(password),
                    "PBKDF2",
                    false,
                    ["deriveKey"]
                );
                return window.crypto.subtle.deriveKey(
                    {
                        name: "PBKDF2",
                        salt: salt,
                        iterations: 100000,
                        hash: "SHA-256"
                    },
                    baseKey,
                    { name: "AES-GCM", length: 256 },
                    false,
                    ["encrypt", "decrypt"]
                );
            }

            async function encryptText(text, password) {
                const encoder = new TextEncoder();
                const data = encoder.encode(text);
                const salt = window.crypto.getRandomValues(new Uint8Array(16));
                const iv = window.crypto.getRandomValues(new Uint8Array(12));
                const key = await deriveKey(password, salt);
                
                const ciphertext = await window.crypto.subtle.encrypt(
                    { name: "AES-GCM", iv: iv },
                    key,
                    data
                );

                const combined = new Uint8Array(salt.byteLength + iv.byteLength + ciphertext.byteLength);
                combined.set(salt, 0);
                combined.set(iv, salt.byteLength);
                combined.set(new Uint8Array(ciphertext), salt.byteLength + iv.byteLength);

                let binary = '';
                const len = combined.byteLength;
                for (let i = 0; i < len; i++) {
                    binary += String.fromCharCode(combined[i]);
                }
                return window.btoa(binary);
            }

            async function decryptText(encryptedBase64, password) {
                const binary = window.atob(encryptedBase64.trim().replace(/\s+/g, ''));
                const len = binary.length;
                const combined = new Uint8Array(len);
                for (let i = 0; i < len; i++) {
                    combined[i] = binary.charCodeAt(i);
                }

                if (combined.byteLength < 28) {
                    throw new Error("Formato de cifrado inválido.");
                }

                const salt = combined.slice(0, 16);
                const iv = combined.slice(16, 28);
                const ciphertext = combined.slice(28);

                const key = await deriveKey(password, salt);
                const decrypted = await window.crypto.subtle.decrypt(
                    { name: "AES-GCM", iv: iv },
                    key,
                    ciphertext
                );

                const decoder = new TextDecoder();
                return decoder.decode(decrypted);
            }

            // Encrypt Action
            const encryptBtn = document.getElementById('encrypt-btn');
            const encryptResult = document.getElementById('encrypt-result');
            const encryptOutput = document.getElementById('encrypt-output');
            const encryptPassword = document.getElementById('encrypt-password');

            if (encryptBtn && encryptResult && encryptOutput && encryptPassword) {
                encryptBtn.addEventListener('click', async () => {
                    const text = encryptInput.value.trim();
                    const password = encryptPassword.value;

                    if (!text) {
                        alert('Por favor, ingresa el texto a encriptar.');
                        return;
                    }
                    if (!password) {
                        alert('Por favor, ingresa una clave secreta.');
                        return;
                    }

                    encryptBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Encriptando...';
                    encryptBtn.disabled = true;

                    try {
                        const encrypted = await encryptText(text, password);
                        encryptOutput.textContent = encrypted;
                        encryptResult.classList.add('active');
                    } catch (error) {
                        console.error(error);
                        alert('Error al encriptar: ' + error.message);
                    } finally {
                        encryptBtn.innerHTML = '<i class="fa-solid fa-lock"></i> Encriptar Texto';
                        encryptBtn.disabled = false;
                    }
                });
            }

            // Decrypt Action
            const decryptInput = document.getElementById('decrypt-input');
            const decryptBtn = document.getElementById('decrypt-btn');
            const decryptResult = document.getElementById('decrypt-result');
            const decryptOutput = document.getElementById('decrypt-output');
            const decryptPassword = document.getElementById('decrypt-password');

            if (decryptInput && decryptBtn && decryptResult && decryptOutput && decryptPassword) {
                decryptBtn.addEventListener('click', async () => {
                    const encryptedBase64 = decryptInput.value.trim();
                    const password = decryptPassword.value;

                    if (!encryptedBase64) {
                        alert('Por favor, ingresa el texto encriptado.');
                        return;
                    }
                    if (!password) {
                        alert('Por favor, ingresa la clave secreta.');
                        return;
                    }

                    decryptBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Desencriptando...';
                    decryptBtn.disabled = true;

                    try {
                        const decrypted = await decryptText(encryptedBase64, password);
                        decryptOutput.textContent = decrypted;
                        decryptResult.classList.add('active');
                        decryptOutput.style.color = '#fff';
                    } catch (error) {
                        console.error(error);
                        decryptOutput.textContent = 'ERROR: Clave secreta incorrecta o los datos encriptados están corruptos.';
                        decryptOutput.style.color = '#ff5e5e';
                        decryptResult.classList.add('active');
                    } finally {
                        decryptBtn.innerHTML = '<i class="fa-solid fa-lock-open"></i> Desencriptar Texto';
                        decryptBtn.disabled = false;
                    }
                });
            }

            // Copy to Clipboard Buttons
            function setupCopyBtn(btnId, outputId) {
                const btn = document.getElementById(btnId);
                const output = document.getElementById(outputId);
                if (!btn || !output) return;
                const originalIcon = btn.innerHTML;

                btn.addEventListener('click', () => {
                    const textToCopy = output.textContent;
                    if (!textToCopy || textToCopy.startsWith('ERROR:')) return;

                    navigator.clipboard.writeText(textToCopy).then(() => {
                        btn.innerHTML = '<i class="fa-solid fa-check"></i>';
                        btn.style.background = '#00ff6622';
                        btn.style.color = '#00ff66';
                        setTimeout(() => {
                            btn.innerHTML = originalIcon;
                            btn.style.background = '';
                            btn.style.color = '';
                        }, 2000);
                    }).catch(err => {
                        console.error('Error al copiar: ', err);
                    });
                });
            }

            setupCopyBtn('copy-encrypt-btn', 'encrypt-output');
            setupCopyBtn('copy-decrypt-btn', 'decrypt-output');
        })();
    </script>
</body>
</html>
