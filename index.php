<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ============================================================
     HERO — Premium con mapa animado y partículas
============================================================ -->
<section id="inicio" class="relative overflow-hidden bg-dark pt-10 pb-20 lg:pt-16 lg:pb-28">

    <!-- Capas decorativas -->
    <div class="absolute inset-0 hero-grid opacity-40 pointer-events-none"></div>
    <div class="absolute inset-0 noise pointer-events-none"></div>
    <div class="absolute -top-40 -right-40 w-[700px] h-[700px] bg-primary/25 rounded-full blur-[160px] pointer-events-none"></div>
    <div class="absolute -bottom-60 -left-40 w-[600px] h-[600px] bg-primary/15 rounded-full blur-[160px] pointer-events-none"></div>
    <div id="particles" class="absolute inset-0 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-12 gap-10 items-center">

        <!-- Texto -->
        <div class="lg:col-span-7 relative" data-aos="fade-right">

            <div class="inline-flex items-center gap-3 bg-white/[0.04] backdrop-blur border border-white/10 text-white/90 text-xs font-semibold px-4 py-2 rounded-full mb-7">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                <span><?= SITE_COUNTRY ?> &middot; Monitoreo 24/7 en tiempo real</span>
                <span class="hidden sm:inline opacity-50">|</span>
                <span class="hidden sm:inline text-primary">S.R.L.</span>
            </div>

            <h1 class="font-display font-black text-[2rem] sm:text-4xl md:text-5xl lg:text-[4.2rem] leading-[1.05] tracking-tight mb-6">
                Protege tu vehículo con
                <span class="relative inline-block">
                    <span class="relative z-10 bg-gradient-to-r from-primary-light via-primary to-primary-dark bg-clip-text text-transparent">GPS inteligente</span>
                    <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 300 12" fill="none" preserveAspectRatio="none">
                        <path d="M2 9 Q150 1 298 9" stroke="url(#ul)" stroke-width="3" stroke-linecap="round" fill="none"/>
                        <defs>
                            <linearGradient id="ul" x1="0" y1="0" x2="1" y2="0">
                                <stop stop-color="#ffb347"/><stop offset="1" stop-color="#ff8a00"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <br>en República Dominicana
            </h1>

            <p class="text-white/65 text-base sm:text-lg leading-relaxed mb-8 max-w-2xl">
                Instalamos sistemas GPS para <strong class="text-white">automóviles, camiones, flotillas y equipos pesados</strong> con monitoreo 24/7, localización en tiempo real, historial de recorrido y apagado vehicular a distancia.
            </p>

            <div class="flex items-center gap-3 mb-9 px-5 py-4 rounded-2xl border border-primary/30 bg-primary/[0.08] max-w-xl">
                <div class="w-11 h-11 rounded-xl bg-primary text-dark flex items-center justify-center text-xl shrink-0 shadow-glow">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div>
                    <div class="text-[10px] uppercase tracking-[0.2em] text-primary/80 mb-0.5">Nuestro compromiso</div>
                    <div class="font-display font-bold text-white text-lg leading-tight">"<?= SITE_SLOGAN ?>"</div>
                </div>
            </div>

            <!-- Badge de precio destacado -->
            <a href="#planes" class="group inline-flex items-stretch rounded-2xl overflow-hidden mb-8 border border-primary/30 hover:border-primary transition shadow-glow max-w-full">
                <div class="bg-primary text-dark px-3 sm:px-4 py-3 flex items-center gap-2 font-black text-[10px] sm:text-xs uppercase tracking-wider shrink-0">
                    <i class="fa-solid fa-bolt-lightning"></i> <span class="hidden xs:inline sm:inline">Precio único</span>
                </div>
                <div class="bg-dark/60 backdrop-blur px-4 sm:px-5 py-3 flex items-center gap-2 sm:gap-3 min-w-0">
                    <div class="font-display font-black text-xl sm:text-2xl text-white leading-none">RD$ 5,490</div>
                    <div class="text-[9px] sm:text-[10px] text-white/60 uppercase tracking-wider leading-tight hidden sm:block">
                        <div>Sin mensualidades</div>
                        <div class="text-primary font-bold">Un solo pago</div>
                    </div>
                    <i class="fa-solid fa-arrow-right text-primary text-xs group-hover:translate-x-1 transition shrink-0"></i>
                </div>
            </a>

            <div class="flex flex-wrap gap-3 mb-10">
                <a href="cotizar" class="group px-6 py-4 rounded-2xl bg-primary text-dark font-bold hover:bg-primary-light transition shadow-glow-lg inline-flex items-center gap-3">
                    <i class="fa-solid fa-wrench"></i>
                    Solicitar instalación
                    <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
                </a>
                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-6 py-4 rounded-2xl bg-whatsapp text-white font-bold hover:opacity-90 transition inline-flex items-center gap-2 shadow-lg">
                    <i class="fa-brands fa-whatsapp text-xl"></i> Hablar por WhatsApp
                </a>
                <a href="#beneficios" class="px-6 py-4 rounded-2xl border border-white/15 text-white font-bold hover:bg-white/5 transition inline-flex items-center gap-2">
                    Ver beneficios <i class="fa-solid fa-arrow-down text-xs"></i>
                </a>
            </div>

            <!-- Indicadores de confianza -->
            <div class="grid grid-cols-3 gap-4 max-w-xl pt-6 border-t border-white/10">
                <div>
                    <div class="font-display font-black text-2xl text-primary">+6,000</div>
                    <div class="text-[11px] text-white/50 uppercase tracking-wider">Clientes activos</div>
                </div>
                <div>
                    <div class="font-display font-black text-2xl text-primary">24/7</div>
                    <div class="text-[11px] text-white/50 uppercase tracking-wider">Monitoreo activo</div>
                </div>
                <div>
                    <div class="font-display font-black text-2xl text-primary">4.9★</div>
                    <div class="text-[11px] text-white/50 uppercase tracking-wider">Atención cliente</div>
                </div>
            </div>
        </div>

        <!-- Mapa visual interactivo -->
        <div class="lg:col-span-5 relative" data-aos="fade-left" data-aos-delay="150">

            <div class="relative aspect-[4/5] rounded-[2rem] overflow-hidden border border-white/10 shadow-2xl bg-gradient-to-br from-dark-soft via-dark to-black">

                <!-- Mapa SVG estilizado -->
                <svg class="absolute inset-0 w-full h-full opacity-60" viewBox="0 0 400 500" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <radialGradient id="mapGlow" cx="50%" cy="40%" r="50%">
                            <stop offset="0%" stop-color="rgba(255,138,0,0.35)"/>
                            <stop offset="100%" stop-color="rgba(255,138,0,0)"/>
                        </radialGradient>
                    </defs>
                    <rect width="400" height="500" fill="url(#mapGlow)"/>
                    <!-- "Calles" -->
                    <g stroke="rgba(255,138,0,0.35)" stroke-width="1.2" fill="none" stroke-linecap="round">
                        <path d="M20 80 Q150 60 380 120"/>
                        <path d="M0 180 Q200 160 400 220"/>
                        <path d="M30 280 Q180 240 390 300"/>
                        <path d="M10 380 Q200 360 390 420"/>
                        <path d="M80 0 Q100 250 60 500"/>
                        <path d="M180 0 Q200 250 220 500"/>
                        <path d="M280 0 Q260 250 300 500"/>
                    </g>
                    <!-- Pines secundarios -->
                    <g fill="#ff8a00" opacity="0.55">
                        <circle cx="90" cy="120" r="4"/>
                        <circle cx="310" cy="160" r="4"/>
                        <circle cx="80" cy="320" r="4"/>
                        <circle cx="340" cy="380" r="4"/>
                        <circle cx="200" cy="420" r="4"/>
                    </g>
                </svg>

                <!-- Pin principal -->
                <div class="absolute top-[40%] left-1/2 -translate-x-1/2 -translate-y-1/2">
                    <div class="relative">
                        <div class="absolute inset-0 -m-8 rounded-full bg-primary/25 animate-ping"></div>
                        <div class="absolute inset-0 -m-4 rounded-full bg-primary/40 animate-pulse"></div>
                        <div class="relative w-24 h-24 rounded-full bg-gradient-to-br from-primary-light to-primary-dark shadow-glow-lg flex items-center justify-center">
                            <i class="fa-solid fa-location-dot text-dark text-4xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Overlay degradado abajo -->
                <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/30 to-transparent"></div>

                <!-- HUD inferior -->
                <div class="absolute bottom-0 left-0 right-0 p-5">
                    <div class="bg-black/60 backdrop-blur-md border border-white/10 rounded-2xl p-4">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-2 text-xs text-primary font-bold">
                                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                EN MOVIMIENTO
                            </div>
                            <div class="text-[10px] text-white/50 font-mono">VIN-2618</div>
                        </div>
                        <div class="grid grid-cols-3 gap-3 text-center">
                            <div>
                                <div class="text-[10px] text-white/40 uppercase mb-1">Velocidad</div>
                                <div class="font-display font-black text-white text-lg">58<span class="text-xs text-white/40"> km/h</span></div>
                            </div>
                            <div class="border-x border-white/10">
                                <div class="text-[10px] text-white/40 uppercase mb-1">Combustible</div>
                                <div class="font-display font-black text-primary text-lg">82<span class="text-xs text-white/40">%</span></div>
                            </div>
                            <div>
                                <div class="text-[10px] text-white/40 uppercase mb-1">Estado</div>
                                <div class="font-display font-black text-green-400 text-lg">OK</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjetas flotantes glass -->
            <div class="hidden md:flex absolute -left-8 top-12 items-center gap-3 bg-white/[0.06] backdrop-blur-xl border border-white/10 rounded-2xl p-3 pr-5 shadow-2xl animate-float">
                <div class="w-11 h-11 rounded-xl bg-primary text-dark flex items-center justify-center shadow-glow">
                    <i class="fa-solid fa-satellite-dish"></i>
                </div>
                <div>
                    <div class="text-[10px] text-white/50 uppercase">Señal</div>
                    <div class="font-bold text-sm">GPS activo</div>
                </div>
            </div>

            <div class="hidden md:flex absolute -right-6 top-1/2 items-center gap-3 bg-white/[0.06] backdrop-blur-xl border border-white/10 rounded-2xl p-3 pr-5 shadow-2xl animate-float-delay">
                <div class="w-11 h-11 rounded-xl bg-primary text-dark flex items-center justify-center shadow-glow">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div>
                    <div class="text-[10px] text-white/50 uppercase">Alerta</div>
                    <div class="font-bold text-sm">Tiempo real</div>
                </div>
            </div>

            <div class="hidden md:flex absolute -left-4 bottom-32 items-center gap-3 bg-primary text-dark rounded-2xl p-3 pr-5 shadow-glow animate-float">
                <i class="fa-solid fa-power-off text-xl"></i>
                <div>
                    <div class="text-[10px] uppercase opacity-70">Control</div>
                    <div class="font-black text-sm">Apagado remoto</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Categorías de servicio (franja premium) -->
    <div class="relative mt-16 lg:mt-20">
        <!-- Líneas superior e inferior con gradient -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>

        <!-- Edge fades para efecto premium -->
        <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-32 lg:w-48 bg-gradient-to-r from-dark to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-32 lg:w-48 bg-gradient-to-l from-dark to-transparent z-10 pointer-events-none"></div>

        <div class="marquee py-5 lg:py-6 bg-gradient-to-r from-dark via-dark-soft to-dark">
            <div class="marquee-track flex items-center gap-3 lg:gap-4 whitespace-nowrap">
                <?php
                $categories = [
                    ['fa-car',         'Vehículos personales'],
                    ['fa-truck-fast',  'Flotillas empresariales'],
                    ['fa-tractor',     'Equipos pesados'],
                    ['fa-truck',       'Camiones y transporte'],
                    ['fa-store',       'Vehículos de reparto'],
                    ['fa-motorcycle',  'Motocicletas'],
                    ['fa-van-shuttle', 'Pasajeros y turismo'],
                    ['fa-screwdriver-wrench','Instalación profesional'],
                ];
                // Duplicamos para loop continuo
                for ($r = 0; $r < 2; $r++):
                    foreach ($categories as $cat): ?>
                        <a href="cotizar" class="service-pill group flex items-center gap-3 px-4 lg:px-5 py-2.5 rounded-full bg-white/[0.03] border border-white/10 hover:border-primary/50 hover:bg-primary/[0.08] transition shrink-0">
                            <span class="w-9 h-9 lg:w-10 lg:h-10 rounded-full bg-gradient-to-br from-primary to-primary-dark text-dark flex items-center justify-center shadow-glow group-hover:scale-110 transition">
                                <i class="fa-solid <?= $cat[0] ?> text-sm"></i>
                            </span>
                            <span class="font-display font-bold text-xs lg:text-sm tracking-wide text-white/85 group-hover:text-white transition">
                                <?= $cat[1] ?>
                            </span>
                            <i class="fa-solid fa-arrow-right text-[10px] text-primary/40 group-hover:text-primary group-hover:translate-x-0.5 transition"></i>
                        </a>
                    <?php endforeach;
                endfor; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     BENEFICIOS
============================================================ -->
<section id="beneficios" class="py-24 lg:py-32 bg-dark relative scroll-mt-24">
    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Beneficios<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
                Control total de tu vehículo <span class="text-primary">desde tu celular</span>
            </h2>
            <p class="text-white/60 text-lg">
                Con Haddad GPS puedes monitorear, proteger y administrar tus vehículos en tiempo real.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <?php
            $benefits = [
                ['fa-location-crosshairs', 'Localización en tiempo real', 'Visualiza la ubicación exacta de tu vehículo desde tu celular en cualquier momento.', 'localizacion'],
                ['fa-power-off',           'Apagado a distancia',         'Permite bloquear o apagar el vehículo de forma remota en caso de emergencia o robo.', 'apagado'],
                ['fa-route',               'Historial de recorrido',      'Consulta rutas realizadas, horarios, paradas y movimientos.',                       'historial'],
                ['fa-eye',                 'Monitoreo 24/7',              'Supervisión continua para mayor seguridad y tranquilidad.',                          'monitoreo'],
                ['fa-bell',                'Alertas inteligentes',        'Recibe notificaciones cuando el vehículo encienda, apague o se mueva.',              'alertas'],
                ['fa-gas-pump',            'Control de combustible',      'Ideal para empresas, equipos pesados y flotillas.',                                  'combustible'],
                ['fa-clock',               'Horas de trabajo',            'Monitorea el uso de equipos, operadores y maquinarias.',                             'horas-trabajo'],
                ['fa-shield-halved',       'Seguridad antirrobo',         'Protege tu inversión y aumenta las posibilidades de recuperación.',                  'antirrobo'],
            ];
            foreach ($benefits as $i => $b): ?>
                <a href="beneficio-<?= $b[3] ?>" class="tilt benefit-card group relative bg-gradient-to-br from-dark-soft to-dark rounded-3xl p-7 border border-white/5 hover:border-primary/40 transition-all duration-500 overflow-hidden block" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                    <div class="absolute -top-12 -right-12 w-32 h-32 bg-primary/0 rounded-full blur-2xl group-hover:bg-primary/25 transition duration-500"></div>
                    <div class="relative">
                        <div class="relative w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/15 to-primary/5 border border-primary/20 text-primary flex items-center justify-center text-2xl mb-5 group-hover:scale-110 group-hover:rotate-3 transition">
                            <i class="fa-solid <?= $b[0] ?>"></i>
                        </div>
                        <h3 class="font-display font-bold text-lg mb-2"><?= $b[1] ?></h3>
                        <p class="text-white/55 text-sm leading-relaxed"><?= $b[2] ?></p>
                        <div class="mt-5 inline-flex items-center gap-2 text-xs font-bold text-primary group-hover:gap-3 transition-all">
                            Más info <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition"></i>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     SERVICIOS — Cards premium con gradiente
============================================================ -->
<section id="servicios" class="py-24 lg:py-32 bg-dark-soft relative overflow-hidden scroll-mt-24">
    <div class="absolute inset-0 hero-grid opacity-15 pointer-events-none"></div>
    <div class="absolute -top-40 right-0 w-[600px] h-[600px] bg-primary/8 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Servicios<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
                Soluciones GPS para <span class="text-primary">cada necesidad</span>
            </h2>
            <p class="text-white/60 text-lg">
                Tenemos servicios para vehículos personales, empresas, flotillas y equipos pesados.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $services = [
                ['fa-car',                'GPS para vehículos personales',  'Protección y rastreo para carros, jeepetas, camionetas y vehículos familiares.',
                    ['Rastreo en tiempo real', 'Alertas en tu celular', 'Apagado remoto opcional']],
                ['fa-truck-fast',         'GPS para flotillas',             'Control de rutas, horarios, ubicación, productividad y seguridad para empresas.',
                    ['Reportes detallados', 'Optimización de rutas', 'Multiusuarios']],
                ['fa-tractor',            'GPS para equipos pesados',       'Monitoreo de maquinarias, combustible, horas de trabajo, encendido y apagado.',
                    ['Control de combustible', 'Horas operativas', 'Monitoreo de operadores']],
                ['fa-truck',              'GPS para camiones y transporte', 'Soluciones para transporte, distribución, logística y carga.',
                    ['Rutas y paradas', 'Alertas de movimiento', 'Reportes empresariales']],
                ['fa-store',              'GPS para vehículos de reparto',  'Control de entregas, rutas y seguridad para negocios con delivery.',
                    ['Seguimiento de entregas', 'Eficiencia operativa', 'Atención al cliente']],
                ['fa-screwdriver-wrench', 'Instalación profesional',        'Instalación segura, ordenada y realizada por personal capacitado.',
                    ['Técnicos certificados', 'Garantía de servicio', 'Soporte rápido']],
            ];
            foreach ($services as $i => $s): ?>
                <div class="service-card group relative bg-dark border border-white/5 hover:border-primary/40 rounded-3xl p-8 transition-all duration-500 overflow-hidden" data-aos="fade-up" data-aos-delay="<?= $i * 70 ?>">
                    <!-- Glow -->
                    <div class="absolute -top-20 -right-20 w-48 h-48 bg-primary/0 rounded-full blur-3xl group-hover:bg-primary/25 transition duration-700"></div>
                    <!-- Numerador -->
                    <span class="absolute top-6 right-6 font-mono text-xs text-white/20 group-hover:text-primary transition">/ 0<?= $i + 1 ?></span>

                    <div class="relative">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-primary-dark text-dark flex items-center justify-center text-3xl mb-6 shadow-glow group-hover:scale-110 group-hover:-rotate-3 transition">
                            <i class="fa-solid <?= $s[0] ?>"></i>
                        </div>
                        <h3 class="font-display font-bold text-xl mb-3 leading-tight"><?= $s[1] ?></h3>
                        <p class="text-white/55 text-sm leading-relaxed mb-6"><?= $s[2] ?></p>
                        <ul class="space-y-2 mb-7 border-t border-white/5 pt-5">
                            <?php foreach ($s[3] as $f): ?>
                                <li class="text-xs text-white/70 flex items-center gap-2">
                                    <span class="w-5 h-5 rounded-full bg-primary/15 text-primary flex items-center justify-center"><i class="fa-solid fa-check text-[9px]"></i></span>
                                    <?= $f ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="cotizar" class="inline-flex items-center gap-2 text-sm font-bold text-primary hover:text-primary-light transition">
                            Cotizar este servicio
                            <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     SHOWCASE APP — Mockup de plataforma
============================================================ -->
<section class="py-24 lg:py-32 bg-dark relative overflow-hidden">
    <div class="absolute -top-32 left-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-2 gap-14 items-center">

        <div data-aos="fade-right">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Plataforma móvil
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl mb-6 leading-tight">
                Toda la información de tu vehículo en <span class="text-primary">una sola pantalla</span>
            </h2>
            <p class="text-white/65 text-lg mb-8">
                Accede a la ubicación, alertas, recorridos, combustible y comandos de tu vehículo desde la app o plataforma web. Compatible con iPhone, Android y navegadores.
            </p>

            <ul class="space-y-4 mb-9">
                <?php
                $apps = [
                    ['fa-map-location-dot', 'Mapa en vivo',         'Visualiza la posición exacta y el recorrido del vehículo.'],
                    ['fa-bell',              'Alertas push',         'Recibe notificaciones al instante en tu celular.'],
                    ['fa-chart-pie',         'Reportes inteligentes','Estadísticas de uso, kilometraje y consumo.'],
                    ['fa-users',             'Multiusuario',         'Acceso para tu equipo, empresa o familia.'],
                ];
                foreach ($apps as $a): ?>
                    <li class="flex gap-4 group">
                        <div class="w-12 h-12 rounded-2xl bg-primary/10 border border-primary/20 text-primary flex items-center justify-center text-lg shrink-0 group-hover:bg-primary group-hover:text-dark transition">
                            <i class="fa-solid <?= $a[0] ?>"></i>
                        </div>
                        <div>
                            <div class="font-display font-bold text-base mb-1"><?= $a[1] ?></div>
                            <div class="text-white/55 text-sm"><?= $a[2] ?></div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="flex flex-wrap gap-3">
                <span class="inline-flex items-center gap-2 px-4 py-3 rounded-xl bg-dark-soft border border-white/10">
                    <i class="fa-brands fa-apple text-white text-2xl"></i>
                    <div class="leading-tight">
                        <div class="text-[10px] text-white/50">Disponible en</div>
                        <div class="font-bold text-sm">App Store</div>
                    </div>
                </span>
                <span class="inline-flex items-center gap-2 px-4 py-3 rounded-xl bg-dark-soft border border-white/10">
                    <i class="fa-brands fa-google-play text-white text-xl"></i>
                    <div class="leading-tight">
                        <div class="text-[10px] text-white/50">Disponible en</div>
                        <div class="font-bold text-sm">Google Play</div>
                    </div>
                </span>
                <span class="inline-flex items-center gap-2 px-4 py-3 rounded-xl bg-dark-soft border border-white/10">
                    <i class="fa-solid fa-globe text-primary text-xl"></i>
                    <div class="leading-tight">
                        <div class="text-[10px] text-white/50">Acceso por</div>
                        <div class="font-bold text-sm">Plataforma Web</div>
                    </div>
                </span>
            </div>
        </div>

        <!-- Mockup celular -->
        <div class="relative flex justify-center" data-aos="fade-left">
            <div class="relative w-[280px] sm:w-[320px]">
                <!-- Phone frame -->
                <div class="relative aspect-[9/19] bg-gradient-to-b from-dark-soft to-black rounded-[3rem] border-[10px] border-dark-soft shadow-2xl overflow-hidden">
                    <!-- Notch -->
                    <div class="absolute top-3 left-1/2 -translate-x-1/2 w-28 h-6 bg-black rounded-full z-20"></div>
                    <!-- Screen content -->
                    <div class="absolute inset-0 bg-gradient-to-br from-dark to-black p-5 pt-12 flex flex-col">
                        <!-- Header app -->
                        <div class="flex items-center justify-between mb-5">
                            <div>
                                <div class="text-[10px] text-white/50 uppercase tracking-wider">Mi vehículo</div>
                                <div class="font-display font-bold text-white text-sm">Toyota Hilux 2023</div>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-primary text-dark flex items-center justify-center font-black">H</div>
                        </div>

                        <!-- Mini mapa -->
                        <div class="relative flex-1 rounded-2xl overflow-hidden bg-gradient-to-br from-dark-soft to-black border border-white/5 mb-4">
                            <svg class="absolute inset-0 w-full h-full opacity-40" viewBox="0 0 200 300">
                                <g stroke="rgba(255,138,0,0.5)" stroke-width="1" fill="none">
                                    <path d="M0 50 Q100 30 200 70"/>
                                    <path d="M0 120 Q100 100 200 140"/>
                                    <path d="M0 200 Q100 180 200 220"/>
                                    <path d="M50 0 Q70 150 40 300"/>
                                    <path d="M130 0 Q150 150 120 300"/>
                                </g>
                            </svg>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                <div class="relative">
                                    <div class="absolute inset-0 -m-4 rounded-full bg-primary/30 animate-ping"></div>
                                    <div class="relative w-9 h-9 rounded-full bg-primary text-dark flex items-center justify-center shadow-glow">
                                        <i class="fa-solid fa-location-dot text-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-2 mb-3">
                            <div class="bg-white/5 rounded-xl p-2 text-center">
                                <i class="fa-solid fa-gauge text-primary text-xs"></i>
                                <div class="font-black text-xs text-white mt-1">58 km/h</div>
                            </div>
                            <div class="bg-white/5 rounded-xl p-2 text-center">
                                <i class="fa-solid fa-gas-pump text-primary text-xs"></i>
                                <div class="font-black text-xs text-white mt-1">82%</div>
                            </div>
                            <div class="bg-white/5 rounded-xl p-2 text-center">
                                <i class="fa-solid fa-circle-check text-green-400 text-xs"></i>
                                <div class="font-black text-xs text-white mt-1">OK</div>
                            </div>
                        </div>

                        <!-- Botones de control -->
                        <div class="grid grid-cols-2 gap-2">
                            <button class="bg-primary text-dark rounded-xl py-2.5 text-xs font-black">
                                <i class="fa-solid fa-power-off mr-1"></i>Apagar
                            </button>
                            <button class="bg-white/10 text-white rounded-xl py-2.5 text-xs font-black">
                                <i class="fa-solid fa-route mr-1"></i>Historial
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Notificación flotante -->
                <div class="hidden md:block absolute -left-12 top-24 bg-white/[0.06] backdrop-blur-xl border border-white/10 rounded-2xl p-3 pr-5 shadow-2xl animate-float">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-primary text-dark flex items-center justify-center">
                            <i class="fa-solid fa-bell"></i>
                        </div>
                        <div>
                            <div class="text-[10px] text-white/50 uppercase">Alerta</div>
                            <div class="text-xs font-bold text-white">Vehículo encendido</div>
                        </div>
                    </div>
                </div>

                <div class="hidden md:flex absolute -right-10 bottom-32 items-center gap-3 bg-primary text-dark rounded-2xl px-4 py-3 shadow-glow animate-float-delay">
                    <i class="fa-solid fa-shield-halved text-lg"></i>
                    <div>
                        <div class="text-[10px] uppercase opacity-70">Protección</div>
                        <div class="font-black text-sm">Activa</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SECCIÓN EQUIPOS PESADOS
============================================================ -->
<section id="equipos" class="py-24 lg:py-32 bg-gradient-to-br from-dark via-black to-dark-soft relative overflow-hidden scroll-mt-24">
    <div class="absolute -top-20 right-0 w-[500px] h-[500px] bg-primary/15 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-2 gap-14 items-center">

        <div data-aos="fade-right">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Servicio premium
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
                GPS para <span class="text-primary">equipos pesados</span>
            </h2>
            <p class="text-white/70 text-lg mb-3">
                Mantén el control de tus maquinarias, operadores y combustible con monitoreo GPS profesional.
            </p>
            <p class="font-display font-bold text-primary text-xl italic mb-8 border-l-4 border-primary pl-4">
                "Que nada se salga de control con tus operadores."
            </p>

            <div class="grid sm:grid-cols-2 gap-3 mb-8">
                <?php
                $heavy = [
                    ['fa-gas-pump',         'Control de combustible'],
                    ['fa-clock',            'Horas de trabajo'],
                    ['fa-power-off',        'Encendido y apagado'],
                    ['fa-location-dot',     'Ubicación tiempo real'],
                    ['fa-list',             'Historial de uso'],
                    ['fa-shield-halved',    'Prevención de pérdidas'],
                    ['fa-user-tie',         'Monitoreo de operadores'],
                    ['fa-chart-line',       'Mayor control operativo'],
                ];
                foreach ($heavy as $h): ?>
                    <div class="flex items-center gap-3 bg-white/[0.04] backdrop-blur border border-white/10 rounded-xl px-4 py-3 hover:border-primary/40 transition">
                        <i class="fa-solid <?= $h[0] ?> text-primary"></i>
                        <span class="text-sm font-medium"><?= $h[1] ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <a href="cotizar" class="inline-flex items-center gap-2 px-7 py-4 rounded-2xl bg-primary text-dark font-bold hover:bg-primary-light transition shadow-glow group">
                Cotizar GPS para equipos pesados
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
            </a>
        </div>

        <div class="relative" data-aos="fade-left">
            <div class="grid grid-cols-2 gap-4">
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 bg-dark-soft hover:scale-105 transition duration-500">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=600&q=80"
                         alt="Retroexcavadora con GPS" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 bg-dark-soft mt-8 hover:scale-105 transition duration-500">
                    <img src="https://images.unsplash.com/photo-1530124566582-a618bc2615dc?auto=format&fit=crop&w=600&q=80"
                         alt="Montacargas monitoreado" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 bg-dark-soft -mt-4 hover:scale-105 transition duration-500">
                    <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=600&q=80"
                         alt="Camión con rastreo" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 bg-dark-soft mt-4 hover:scale-105 transition duration-500">
                    <img src="https://images.unsplash.com/photo-1486006920555-c77dcf18193c?auto=format&fit=crop&w=600&q=80"
                         alt="Equipo pesado" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="hidden md:flex absolute -bottom-6 -left-6 bg-primary text-dark rounded-2xl p-5 shadow-glow items-center gap-3 animate-pulse-glow">
                <i class="fa-solid fa-shield-halved text-3xl"></i>
                <div>
                    <div class="font-black text-2xl leading-none">24/7</div>
                    <div class="text-xs font-semibold">Monitoreo</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     VEHÍCULOS PERSONALES
============================================================ -->
<section class="py-24 lg:py-32 bg-muted text-dark relative overflow-hidden">
    <!-- Decorative pattern -->
    <div class="absolute top-0 right-0 w-1/2 h-full opacity-[0.04]" style="background-image:radial-gradient(circle, #000 1px, transparent 1px);background-size:20px 20px;"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-2 gap-14 items-center">

        <div class="relative order-2 lg:order-1" data-aos="fade-right">
            <div class="rounded-[2rem] overflow-hidden shadow-2xl aspect-[4/3] relative">
                <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=900&q=80"
                     alt="Vehículo personal con GPS" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/60 via-transparent to-transparent"></div>

                <!-- Badge protegido -->
                <div class="absolute top-6 left-6 inline-flex items-center gap-2 bg-primary text-dark px-4 py-2 rounded-full font-bold text-sm shadow-glow">
                    <i class="fa-solid fa-shield-halved"></i> PROTEGIDO
                </div>

                <!-- Stats overlay -->
                <div class="absolute bottom-6 left-6 right-6 bg-dark/85 backdrop-blur border border-white/10 rounded-2xl p-4 text-white">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] uppercase tracking-wider text-primary font-bold">En línea</span>
                        <span class="text-[10px] font-mono text-white/50">SDQ-2618</span>
                    </div>
                    <div class="font-display font-bold text-lg">Honda Civic 2022</div>
                </div>
            </div>

            <!-- Mockup celular -->
            <div class="hidden md:block absolute -bottom-12 -right-6 w-44">
                <div class="aspect-[9/19] bg-dark rounded-[2rem] border-[8px] border-dark p-2 shadow-2xl">
                    <div class="w-full h-full rounded-2xl bg-gradient-to-br from-primary/30 to-dark-soft flex items-center justify-center relative overflow-hidden">
                        <svg class="absolute inset-0 w-full h-full opacity-40" viewBox="0 0 100 200">
                            <g stroke="rgba(255,138,0,0.5)" stroke-width="0.6" fill="none">
                                <path d="M0 40 Q50 30 100 50"/>
                                <path d="M0 90 Q50 80 100 110"/>
                                <path d="M0 140 Q50 130 100 160"/>
                            </g>
                        </svg>
                        <div class="text-center text-white relative z-10">
                            <i class="fa-solid fa-location-dot text-primary text-3xl mb-1"></i>
                            <div class="text-[8px] uppercase tracking-wider text-white/60">Vehículo</div>
                            <div class="font-bold text-xs">En línea</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="order-1 lg:order-2" data-aos="fade-left">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Vehículos personales
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05] text-dark">
                Mantén tu automóvil <span class="text-primary">protegido</span> y no te lamentes después
            </h2>
            <p class="text-dark/70 text-lg mb-8">
                Con Haddad GPS puedes saber dónde está tu vehículo, revisar su historial de recorrido y contar con apagado remoto para mayor seguridad.
            </p>

            <ul class="grid sm:grid-cols-2 gap-3 mb-9">
                <?php
                $personal = [
                    'Rastreo en tiempo real',
                    'Seguridad ante robo',
                    'Control desde el celular',
                    'Historial de recorrido',
                    'Alertas de movimiento',
                    'Monitoreo 24/7',
                ];
                foreach ($personal as $p): ?>
                    <li class="flex items-center gap-3 text-dark font-medium">
                        <span class="w-8 h-8 rounded-xl bg-primary text-dark flex items-center justify-center text-xs shrink-0 shadow-glow">
                            <i class="fa-solid fa-check"></i>
                        </span>
                        <?= $p ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <a href="cotizar" class="inline-flex items-center gap-2 px-7 py-4 rounded-2xl bg-dark text-primary font-bold hover:bg-primary hover:text-dark transition shadow-glow group">
                Instalar GPS en mi vehículo
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     FLOTILLAS
============================================================ -->
<section id="flotillas" class="py-24 lg:py-32 bg-dark relative overflow-hidden scroll-mt-24">
    <div class="absolute inset-0 hero-grid opacity-15 pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-[500px] h-[500px] bg-primary/12 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-2 gap-14 items-center">

        <div data-aos="fade-right">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Flotillas empresariales
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
                Administra tu flotilla con <span class="text-primary">mayor control</span> y seguridad
            </h2>
            <p class="text-white/70 text-lg mb-8">
                Ideal para empresas que necesitan monitorear varios vehículos, reducir riesgos, controlar rutas y mejorar la productividad de sus operaciones.
            </p>

            <ul class="space-y-3 mb-9">
                <?php
                $fleet = [
                    ['fa-route',         'Control de rutas',          'Visualización y planificación inteligente.'],
                    ['fa-file-lines',    'Reportes de recorrido',     'Datos detallados para mejor toma de decisiones.'],
                    ['fa-user',          'Monitoreo de conductores',  'Comportamiento y eficiencia de tu equipo.'],
                    ['fa-gear',          'Optimización operativa',    'Mayor productividad, menos pérdidas.'],
                    ['fa-bell',          'Alertas en tiempo real',    'Notificaciones instantáneas.'],
                    ['fa-shield-halved', 'Mayor seguridad',           'Protección integral de tu inversión.'],
                ];
                foreach ($fleet as $f): ?>
                    <li class="flex items-center gap-4 bg-white/[0.04] backdrop-blur border border-white/10 rounded-2xl px-5 py-4 hover:border-primary/40 transition">
                        <div class="w-11 h-11 rounded-xl bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="fa-solid <?= $f[0] ?>"></i>
                        </div>
                        <div>
                            <div class="font-bold text-sm"><?= $f[1] ?></div>
                            <div class="text-xs text-white/50"><?= $f[2] ?></div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

            <a href="cotizar" class="inline-flex items-center gap-2 px-7 py-4 rounded-2xl bg-primary text-dark font-bold hover:bg-primary-light transition shadow-glow group">
                Solicitar solución para mi empresa
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
            </a>
        </div>

        <div data-aos="fade-left">
            <!-- Dashboard mock -->
            <div class="relative bg-gradient-to-br from-dark-soft to-black rounded-[2rem] border border-white/10 shadow-2xl p-6 overflow-hidden">

                <div class="flex items-center justify-between mb-5">
                    <div>
                        <div class="text-[10px] uppercase tracking-wider text-primary font-bold mb-1">Dashboard</div>
                        <div class="font-display font-bold text-white">Flotilla empresarial</div>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-green-400 font-bold">
                        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>EN LÍNEA
                    </div>
                </div>

                <!-- Stats grid -->
                <div class="grid grid-cols-3 gap-3 mb-5">
                    <div class="bg-white/5 rounded-xl p-3 border border-white/5">
                        <div class="text-[10px] text-white/50 uppercase mb-1">Activos</div>
                        <div class="font-black text-2xl text-primary">12</div>
                    </div>
                    <div class="bg-white/5 rounded-xl p-3 border border-white/5">
                        <div class="text-[10px] text-white/50 uppercase mb-1">En ruta</div>
                        <div class="font-black text-2xl text-green-400">8</div>
                    </div>
                    <div class="bg-white/5 rounded-xl p-3 border border-white/5">
                        <div class="text-[10px] text-white/50 uppercase mb-1">Detenidos</div>
                        <div class="font-black text-2xl text-white">4</div>
                    </div>
                </div>

                <!-- Lista vehículos -->
                <div class="space-y-2">
                    <?php
                    $vehicles = [
                        ['Camión 01', '58 km/h', 'En ruta', 'green'],
                        ['Camión 02', '0 km/h',  'Detenido', 'yellow'],
                        ['Camión 03', '72 km/h', 'En ruta', 'green'],
                        ['Camión 04', '45 km/h', 'En ruta', 'green'],
                    ];
                    foreach ($vehicles as $v):
                        $color = $v[3] === 'green' ? 'bg-green-400' : 'bg-yellow-400';
                    ?>
                        <div class="flex items-center justify-between bg-white/5 rounded-xl p-3 border border-white/5">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-primary/15 text-primary flex items-center justify-center">
                                    <i class="fa-solid fa-truck text-sm"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-sm"><?= $v[0] ?></div>
                                    <div class="text-[10px] text-white/50"><?= $v[1] ?></div>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 text-xs">
                                <span class="w-2 h-2 rounded-full <?= $color ?>"></span>
                                <span class="text-white/70"><?= $v[2] ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="absolute -top-10 -right-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl"></div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     PRECIO ÚNICO — Sin mensualidades
============================================================ -->
<section id="planes" class="py-24 lg:py-32 bg-dark-soft relative overflow-hidden scroll-mt-24">
    <div class="absolute inset-0 hero-grid opacity-15 pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[900px] h-[900px] bg-primary/10 rounded-full blur-[160px] pointer-events-none"></div>

    <div class="relative max-w-6xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-14" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Precio único<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
                Un solo pago. <span class="text-primary">Sin mensualidades.</span> Para siempre.
            </h2>
            <p class="text-white/65 text-lg">
                A diferencia de otras empresas, en Haddad GPS pagas una sola vez. <strong class="text-white">Nada de cuotas mensuales</strong>, nada de sorpresas. Instalación incluida.
            </p>
        </div>

        <!-- Card de precio único -->
        <div class="relative max-w-4xl mx-auto" data-aos="zoom-in" data-aos-delay="100">

            <!-- Glow externo -->
            <div class="absolute -inset-1 bg-gradient-to-br from-primary-light via-primary to-primary-dark rounded-[2.5rem] blur-2xl opacity-40 pointer-events-none"></div>

            <div class="relative bg-gradient-to-br from-dark to-black border border-primary/30 rounded-[2rem] overflow-hidden shadow-glow-lg">

                <!-- Encabezado naranja -->
                <div class="relative bg-gradient-to-br from-primary via-primary to-primary-dark text-dark px-8 lg:px-12 py-10 overflow-hidden">

                    <div class="absolute -top-16 -right-16 w-64 h-64 bg-white/15 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-dark/20 rounded-full blur-3xl"></div>

                    <div class="relative grid md:grid-cols-5 gap-8 items-center">

                        <div class="md:col-span-3">
                            <div class="inline-flex items-center gap-2 bg-dark text-primary text-[10px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full mb-5 shadow-lg">
                                <i class="fa-solid fa-bolt-lightning"></i> Pago único · Sin mensualidades
                            </div>

                            <div class="font-display font-black text-2xl mb-2">GPS Haddad — Plan único</div>
                            <p class="text-dark/80 text-sm leading-relaxed max-w-md">
                                Dispositivo GPS + instalación profesional + acceso a la plataforma de monitoreo. Todo en un solo pago.
                            </p>
                        </div>

                        <div class="md:col-span-2 text-left md:text-right">
                            <div class="text-[11px] uppercase tracking-widest text-dark/70 font-bold mb-1">Precio total</div>
                            <div class="flex md:justify-end items-baseline gap-2 flex-wrap md:flex-nowrap">
                                <span class="font-display font-black text-2xl text-dark/80">RD$</span>
                                <span class="font-display font-black text-5xl sm:text-6xl lg:text-7xl text-dark leading-none">5,490</span>
                            </div>
                            <div class="text-xs text-dark/70 font-bold mt-2 line-through opacity-70">Sin mensualidades</div>
                            <div class="text-sm text-dark font-black mt-1">
                                <i class="fa-solid fa-check-circle"></i> Un solo pago
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cuerpo: incluye -->
                <div class="px-8 lg:px-12 py-10">

                    <div class="text-center mb-8">
                        <div class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em]">
                            <span class="w-8 h-px bg-primary"></span>Todo esto incluido<span class="w-8 h-px bg-primary"></span>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
                        <?php
                        $included = [
                            ['fa-microchip',          'Dispositivo GPS'],
                            ['fa-screwdriver-wrench', 'Instalación profesional'],
                            ['fa-mobile-screen',      'App móvil + Plataforma Web'],
                            ['fa-location-crosshairs','Localización en tiempo real'],
                            ['fa-route',              'Historial de recorrido'],
                            ['fa-bell',               'Alertas inteligentes'],
                            ['fa-power-off',          'Apagado remoto'],
                            ['fa-eye',                'Monitoreo 24/7'],
                            ['fa-headset',            'Soporte por WhatsApp'],
                        ];
                        foreach ($included as $inc): ?>
                            <div class="flex items-center gap-3 bg-white/[0.04] border border-white/10 hover:border-primary/40 rounded-xl px-4 py-3.5 transition">
                                <div class="w-10 h-10 rounded-xl bg-primary/15 text-primary flex items-center justify-center shrink-0">
                                    <i class="fa-solid <?= $inc[0] ?>"></i>
                                </div>
                                <span class="text-sm font-medium text-white"><?= $inc[1] ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Comparativa -->
                    <div class="grid md:grid-cols-2 gap-4 mb-10">
                        <div class="bg-red-500/5 border border-red-500/20 rounded-2xl p-5">
                            <div class="flex items-center gap-2 mb-3 text-red-300 font-bold text-sm">
                                <i class="fa-solid fa-circle-xmark"></i> Otras empresas
                            </div>
                            <ul class="space-y-2 text-sm text-white/60">
                                <li class="flex items-center gap-2"><i class="fa-solid fa-xmark text-red-400 text-xs"></i>Pago inicial + mensualidad</li>
                                <li class="flex items-center gap-2"><i class="fa-solid fa-xmark text-red-400 text-xs"></i>Cobros recurrentes cada mes</li>
                                <li class="flex items-center gap-2"><i class="fa-solid fa-xmark text-red-400 text-xs"></i>Si dejas de pagar, te bloquean el servicio</li>
                            </ul>
                        </div>
                        <div class="bg-primary/10 border border-primary/40 rounded-2xl p-5">
                            <div class="flex items-center gap-2 mb-3 text-primary font-bold text-sm">
                                <i class="fa-solid fa-circle-check"></i> Haddad GPS
                            </div>
                            <ul class="space-y-2 text-sm text-white/85">
                                <li class="flex items-center gap-2"><i class="fa-solid fa-check text-primary text-xs"></i><strong>Un solo pago de RD$ 5,490</strong></li>
                                <li class="flex items-center gap-2"><i class="fa-solid fa-check text-primary text-xs"></i>Sin mensualidades nunca</li>
                                <li class="flex items-center gap-2"><i class="fa-solid fa-check text-primary text-xs"></i>Servicio activo siempre</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="flex-1 px-7 py-4 rounded-2xl bg-whatsapp text-white font-bold hover:opacity-90 transition inline-flex items-center justify-center gap-2 shadow-lg">
                            <i class="fa-brands fa-whatsapp text-xl"></i> Reservar por WhatsApp
                        </a>
                        <a href="cotizar" class="flex-1 px-7 py-4 rounded-2xl bg-primary text-dark font-bold hover:bg-primary-light transition inline-flex items-center justify-center gap-2 shadow-glow group">
                            Solicitar instalación
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
                        </a>
                    </div>

                    <p class="text-center text-white/50 text-xs mt-6">
                        <i class="fa-solid fa-shield-halved text-primary mr-1"></i>
                        Para flotillas y equipos pesados, contáctanos para un descuento por volumen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     CÓMO FUNCIONA — Timeline premium
============================================================ -->
<section id="como-funciona" class="py-24 lg:py-32 bg-dark relative overflow-hidden scroll-mt-24">
    <div class="absolute -top-32 right-1/4 w-[400px] h-[400px] bg-primary/8 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Cómo funciona<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
                Así funciona nuestro <span class="text-primary">servicio GPS</span>
            </h2>
            <p class="text-white/60 text-lg">Cuatro pasos sencillos para tener tu vehículo totalmente protegido.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
            <div class="hidden lg:block absolute top-[44px] left-[12.5%] right-[12.5%] h-1 bg-gradient-to-r from-primary via-primary-light to-primary z-0 opacity-25"></div>

            <?php
            $steps = [
                ['01', 'fa-comments',          'Solicitas información',     'Por WhatsApp, llamada o formulario.'],
                ['02', 'fa-calendar-check',    'Agendamos la instalación',  'Coordinamos fecha, hora y vehículo.'],
                ['03', 'fa-screwdriver-wrench','Instalamos el GPS',         'Técnico profesional certificado.'],
                ['04', 'fa-mobile-screen',     'Controlas desde tu celular','Accede a la plataforma o app.'],
            ];
            foreach ($steps as $i => $s): ?>
                <div class="relative z-10 group" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                    <div class="bg-dark-soft rounded-3xl p-7 border border-white/5 hover:border-primary/50 transition relative overflow-hidden">

                        <span class="absolute top-4 right-5 font-display font-black text-5xl text-primary/10 group-hover:text-primary/25 transition"><?= $s[0] ?></span>

                        <div class="relative w-20 h-20 rounded-3xl bg-gradient-to-br from-primary to-primary-dark text-dark flex items-center justify-center text-3xl mb-5 shadow-glow group-hover:scale-110 group-hover:rotate-6 transition">
                            <i class="fa-solid <?= $s[1] ?>"></i>
                        </div>
                        <h3 class="font-display font-bold text-lg mb-2"><?= $s[2] ?></h3>
                        <p class="text-white/55 text-sm"><?= $s[3] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-14" data-aos="fade-up">
            <a href="cotizar" class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl bg-primary text-dark font-bold hover:bg-primary-light transition shadow-glow group">
                Agenda tu instalación hoy
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     POR QUÉ ELEGIR / CONTADORES
============================================================ -->
<section class="py-24 lg:py-32 bg-dark-soft relative overflow-hidden">
    <div class="absolute inset-0 hero-grid opacity-15 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Confianza<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
                ¿Por qué elegir <span class="text-primary">Haddad GPS?</span>
            </h2>
            <p class="text-white/60 text-lg">
                Trabajamos para que tengas control, seguridad y tranquilidad sobre tu vehículo, flotilla o equipo pesado.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-16">
            <?php
            $why = [
                ['fa-screwdriver-wrench', 'Instalación profesional',           'Personal capacitado y técnicos expertos.'],
                ['fa-eye',                'Monitoreo 24/7',                    'Soporte y vigilancia todos los días.'],
                ['fa-headset',            'Atención personalizada',            'Trato cercano y respuestas claras.'],
                ['fa-flag',               'Servicio en RD',                    'Cobertura en todo el territorio.'],
                ['fa-building',           'Soluciones para vehículos y empresas','Personales, flotillas y equipos.'],
                ['fa-microchip',          'Tecnología confiable',              'Dispositivos GPS de calidad.'],
                ['fa-whatsapp',           'Soporte rápido por WhatsApp',       'Resolución inmediata.', 'brand'],
                ['fa-trophy',             'Experiencia en GPS vehicular',      'Trayectoria comprobada.'],
            ];
            foreach ($why as $i => $w):
                $iconClass = ($w[3] ?? '') === 'brand' ? 'fa-brands' : 'fa-solid';
            ?>
                <div class="group bg-dark border border-white/5 rounded-3xl p-6 hover:border-primary/40 hover:-translate-y-1 transition" data-aos="zoom-in" data-aos-delay="<?= $i * 50 ?>">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary/15 to-primary/5 border border-primary/20 text-primary flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">
                        <i class="<?= $iconClass ?> <?= $w[0] ?>"></i>
                    </div>
                    <h3 class="font-display font-bold text-base mb-2 leading-snug"><?= $w[1] ?></h3>
                    <p class="text-white/50 text-xs"><?= $w[2] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Counters -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 max-w-5xl mx-auto" data-aos="fade-up">
            <?php
            $counters = [
                ['+',   '6000','Clientes activos'],
                ['',    '24/7','Monitoreo disponible'],
                ['',    '4.9★','Satisfacción cliente'],
                ['',    '100%','Cobertura RD'],
            ];
            foreach ($counters as $c): ?>
                <div class="relative text-center bg-gradient-to-br from-primary to-primary-dark text-dark rounded-3xl p-7 shadow-glow overflow-hidden group">
                    <div class="absolute -top-12 -right-12 w-32 h-32 bg-white/15 rounded-full blur-2xl group-hover:scale-150 transition duration-700"></div>
                    <div class="relative">
                        <div class="font-display font-black text-5xl lg:text-6xl leading-none">
                            <span class="counter" data-target="<?= $c[1] ?>"><?= $c[0] . $c[1] ?></span>
                        </div>
                        <div class="text-xs font-bold uppercase tracking-wider mt-3"><?= $c[2] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     GALERÍA filtrable
============================================================ -->
<section id="galeria" class="py-24 lg:py-32 bg-dark relative scroll-mt-24">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Galería<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
                Protección y monitoreo para <span class="text-primary">todo tipo de vehículo</span>
            </h2>
        </div>

        <div class="flex flex-wrap justify-center gap-2 mb-10" data-aos="fade-up">
            <?php
            $cats = ['todos' => 'Todos', 'personales' => 'Vehículos personales', 'camiones' => 'Camiones', 'pesados' => 'Equipos pesados', 'flotillas' => 'Flotillas', 'plataforma' => 'Plataforma GPS'];
            foreach ($cats as $key => $label): ?>
                <button class="gallery-filter px-5 py-2.5 rounded-full text-xs font-bold border border-white/10 hover:bg-primary hover:text-dark hover:border-primary transition <?= $key === 'todos' ? 'bg-primary text-dark border-primary' : 'text-white/70' ?>" data-filter="<?= $key ?>">
                    <?= $label ?>
                </button>
            <?php endforeach; ?>
        </div>

        <div id="gallery-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <?php
            $items = [
                ['personales', 'Sedán protegido',       'https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=600&q=80'],
                ['camiones',   'Camión de carga',       'https://images.unsplash.com/photo-1592805144716-feeccccef5ac?auto=format&fit=crop&w=600&q=80'],
                ['pesados',    'Retroexcavadora',       'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=600&q=80'],
                ['flotillas',  'Flotilla empresarial',  'https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=600&q=80'],
                ['plataforma', 'Vista de monitoreo',    'https://images.unsplash.com/photo-1545987796-200677ee1011?auto=format&fit=crop&w=600&q=80'],
                ['personales', 'Jeepeta monitoreada',   'https://images.unsplash.com/photo-1494976388531-d1058494cdd8?auto=format&fit=crop&w=600&q=80'],
                ['pesados',    'Montacargas',           'https://images.unsplash.com/photo-1530124566582-a618bc2615dc?auto=format&fit=crop&w=600&q=80'],
                ['plataforma', 'App móvil',             'https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&w=600&q=80'],
            ];
            foreach ($items as $g): ?>
                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener"
                   class="gallery-item group relative aspect-square overflow-hidden rounded-3xl bg-dark border border-white/5"
                   data-category="<?= $g[0] ?>">
                    <img src="<?= $g[2] ?>" alt="<?= $g[1] ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent opacity-60 group-hover:opacity-95 transition flex flex-col justify-end p-5">
                        <span class="text-[10px] uppercase tracking-widest text-primary font-bold mb-1"><?= $cats[$g[0]] ?></span>
                        <div class="font-display font-bold text-white text-sm mb-3"><?= $g[1] ?></div>
                        <span class="inline-flex items-center gap-2 text-xs text-primary font-bold opacity-0 group-hover:opacity-100 transition">
                            Cotizar <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     TESTIMONIOS
============================================================ -->
<section id="testimonios" class="py-24 lg:py-32 bg-dark-soft relative scroll-mt-24">
    <div class="absolute inset-0 hero-grid opacity-15 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-14" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Testimonios<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
                Clientes que confían en <span class="text-primary">Haddad GPS</span>
            </h2>
            <p class="text-white/60 text-lg">
                Más de <strong class="text-white">6,000 clientes</strong> ya protegen sus vehículos con nosotros en toda República Dominicana.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">
            <?php
            $testimonials = [
                ['Carlos M.',  'GPS personal',            5, 'Excelente servicio, ahora puedo monitorear mi vehículo desde mi celular.'],
                ['Empresa LR', 'GPS flotilla camiones',   5, 'Instalamos GPS en varios camiones de la empresa y el control ha mejorado bastante.'],
                ['Mariela P.', 'Instalación GPS',         5, 'Muy buena atención, instalación rápida y soporte por WhatsApp.'],
                ['Ramón S.',   'GPS para jeepeta',        5, 'Ahora tengo más tranquilidad porque sé dónde está mi vehículo en todo momento.'],
            ];
            foreach ($testimonials as $i => $t): ?>
                <div class="relative bg-gradient-to-br from-dark to-dark-soft border border-white/5 rounded-3xl p-7 hover:border-primary/40 transition group" data-aos="fade-up" data-aos-delay="<?= $i * 80 ?>">
                    <i class="fa-solid fa-quote-left text-primary text-3xl opacity-25 absolute top-5 right-5"></i>
                    <div class="flex items-center gap-1 mb-4">
                        <?php for ($s = 0; $s < $t[2]; $s++): ?>
                            <i class="fa-solid fa-star text-primary text-sm"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="text-white/75 text-sm leading-relaxed mb-6">"<?= $t[3] ?>"</p>
                    <div class="flex items-center gap-3 pt-5 border-t border-white/5">
                        <div class="w-11 h-11 rounded-full bg-gradient-to-br from-primary to-primary-dark text-dark font-black flex items-center justify-center text-lg shadow-glow">
                            <?= strtoupper($t[0][0]) ?>
                        </div>
                        <div>
                            <div class="font-bold text-sm"><?= $t[0] ?></div>
                            <div class="text-xs text-white/50"><?= $t[1] ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     FAQ
============================================================ -->
<section id="faq" class="py-24 lg:py-32 bg-dark scroll-mt-24">
    <div class="max-w-4xl mx-auto px-4 lg:px-8">

        <div class="text-center mb-12" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>FAQ<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
                Preguntas <span class="text-primary">frecuentes</span>
            </h2>
            <p class="text-white/60 text-lg">¿No encuentras tu respuesta? Escríbenos por WhatsApp y te ayudamos.</p>
        </div>

        <div class="space-y-3" id="faq">
            <?php
            $faqs = [
                ['¿Cuánto cuesta el GPS de Haddad?',           'El precio es de <strong class="text-primary">RD$ 5,490 dominicanos</strong> en un pago único. Incluye el dispositivo GPS, la instalación profesional y el acceso a la plataforma de monitoreo.'],
                ['¿Hay que pagar mensualidad o cuota mensual?','<strong class="text-primary">No.</strong> A diferencia de otras empresas, en Haddad GPS pagas una sola vez. <strong>No hay mensualidades</strong>, no hay cobros recurrentes ni renovaciones obligatorias.'],
                ['¿La instalación está incluida en el precio?','Sí, la instalación profesional realizada por nuestros técnicos está incluida en los RD$ 5,490.'],
                ['¿El GPS funciona desde el celular?',         'Sí, puedes monitorear tu vehículo desde nuestra plataforma o aplicación móvil, en iPhone, Android o navegador web.'],
                ['¿Puedo apagar el vehículo a distancia?',     'Sí, dependiendo del tipo de instalación y configuración del servicio.'],
                ['¿Instalan GPS en equipos pesados?',          'Sí, ofrecemos soluciones para retroexcavadoras, montacargas, camiones y otros equipos. Para flotillas o varios vehículos, contáctanos para un descuento por volumen.'],
                ['¿El servicio tiene monitoreo 24/7?',         'Sí, el sistema permite monitoreo continuo todos los días, las 24 horas.'],
                ['¿Dónde ofrecen servicio?',                   'Ofrecemos servicio en toda la República Dominicana.'],
                ['¿Cómo puedo reservar mi instalación?',       'Escríbenos por WhatsApp al ' . PHONE_DISPLAY . ' o completa nuestro formulario de cotización y te coordinamos cita.'],
            ];
            foreach ($faqs as $i => $f): ?>
                <div class="faq-item bg-gradient-to-br from-dark-soft to-dark border border-white/5 rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="<?= $i * 40 ?>">
                    <button type="button" class="faq-toggle w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
                        <span class="font-display font-semibold text-base"><?= $f[0] ?></span>
                        <span class="faq-icon w-10 h-10 rounded-xl bg-primary/15 text-primary flex items-center justify-center flex-shrink-0 transition">
                            <i class="fa-solid fa-plus"></i>
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 pb-5 text-white/65 text-sm leading-relaxed"><?= $f[1] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     CTA FINAL
============================================================ -->
<section id="contacto" class="relative py-24 lg:py-32 overflow-hidden scroll-mt-24">

    <!-- Fondo con degradado y patrón -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary to-primary-dark"></div>
    <div class="absolute inset-0 hero-grid opacity-20 pointer-events-none"></div>
    <div class="absolute -top-32 -left-32 w-[400px] h-[400px] bg-dark/30 rounded-full blur-[120px]"></div>
    <div class="absolute -bottom-32 -right-32 w-[400px] h-[400px] bg-dark/30 rounded-full blur-[120px]"></div>

    <div class="relative max-w-5xl mx-auto px-4 lg:px-8 text-center text-dark" data-aos="zoom-in">

        <div class="inline-flex items-center justify-center w-20 h-20 rounded-3xl bg-dark text-primary mb-7 shadow-2xl">
            <i class="fa-solid fa-shield-halved text-3xl"></i>
        </div>

        <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]">
            ¿Quieres estar siempre al tanto del estado de tus vehículos?
        </h2>
        <p class="text-dark/85 text-lg lg:text-xl mb-10 max-w-3xl mx-auto">
            Protege tu inversión hoy con un sistema GPS profesional, monitoreo 24/7 y control desde tu celular.
        </p>

        <div class="flex flex-wrap justify-center gap-3 mb-8">
            <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-7 py-4 rounded-2xl bg-whatsapp text-white font-bold hover:opacity-90 transition inline-flex items-center gap-2 shadow-2xl">
                <i class="fa-brands fa-whatsapp text-xl"></i> Escríbenos por WhatsApp
            </a>
            <a href="tel:<?= PHONE_LINK ?>" class="px-7 py-4 rounded-2xl bg-dark text-primary font-bold hover:bg-dark-soft transition inline-flex items-center gap-2 shadow-2xl">
                <i class="fa-solid fa-phone"></i> Llamar al <?= PHONE_DISPLAY ?>
            </a>
            <a href="cotizar" class="px-7 py-4 rounded-2xl bg-white text-dark font-bold hover:bg-muted transition inline-flex items-center gap-2 shadow-2xl">
                Solicitar cotización <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="inline-flex items-center gap-3 text-dark/80 text-sm font-medium">
            <i class="fa-solid fa-circle-check"></i> Sin compromiso
            <span class="opacity-30">|</span>
            <i class="fa-solid fa-circle-check"></i> Respuesta rápida
            <span class="opacity-30">|</span>
            <i class="fa-solid fa-circle-check"></i> Asesoría gratuita
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
