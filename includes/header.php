<?php
require_once __DIR__ . '/config.php';

$pageTitle       = $pageTitle       ?? SEO_TITLE;
$pageDescription = $pageDescription ?? SEO_DESCRIPTION;
$pageKeywords    = $pageKeywords    ?? SEO_KEYWORDS;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#111111">

    <!-- SEO básico -->
    <title><?= $pageTitle ?></title>
    <meta name="description" content="<?= $pageDescription ?>">
    <meta name="keywords" content="<?= $pageKeywords ?>">
    <meta name="author" content="<?= SITE_NAME ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= SITE_URL ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="Haddad GPS | Protege tu vehículo con GPS inteligente">
    <meta property="og:description" content="Instalación de GPS para vehículos, flotillas y equipos pesados en República Dominicana. Monitoreo 24/7 y control desde tu celular.">
    <meta property="og:image" content="<?= SITE_URL ?>/assets/img/og-image.jpg">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= SITE_URL ?>">
    <meta property="og:locale" content="es_DO">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Haddad GPS | Protege tu vehículo con GPS inteligente">
    <meta name="twitter:description" content="Instalación de GPS para vehículos, flotillas y equipos pesados en República Dominicana.">
    <meta name="twitter:image" content="<?= SITE_URL ?>/assets/img/og-image.jpg">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="shortcut icon" href="assets/img/logo.png">

    <!-- Schema.org LocalBusiness -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "<?= SITE_NAME ?> / <?= SITE_LEGAL_NAME ?>",
      "image": "<?= SITE_URL ?>/assets/img/logo.png",
      "logo": "<?= SITE_URL ?>/assets/img/logo.png",
      "telephone": "<?= PHONE_LINK ?>",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "DO",
        "addressRegion": "República Dominicana"
      },
      "url": "<?= SITE_URL ?>",
      "sameAs": ["<?= INSTAGRAM_URL ?>"],
      "description": "<?= SEO_DESCRIPTION ?>",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "ratingCount": "6000"
      },
      "openingHours": "Mo,Tu,We,Th,Fr,Sa 08:00-18:00"
    }
    </script>

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary:        '#ff8a00',
                        'primary-dark': '#e67600',
                        'primary-light':'#ffb347',
                        dark:           '#111111',
                        'dark-soft':    '#1f1f1f',
                        gray2:          '#2b2b2b',
                        muted:          '#f5f5f5',
                        whatsapp:       '#25D366'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'Inter', 'system-ui', 'sans-serif'],
                        display: ['Urbanist', 'Poppins', 'system-ui', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace']
                    },
                    boxShadow: {
                        glow:       '0 10px 40px -10px rgba(255, 138, 0, 0.55)',
                        'glow-lg':  '0 25px 80px -20px rgba(255, 138, 0, 0.55)',
                        'inner-glow':'inset 0 0 30px rgba(255, 138, 0, 0.15)'
                    },
                    animation: {
                        'spin-slow':  'spin 20s linear infinite',
                        'fade-up':    'fadeUp 0.8s ease-out',
                        'pulse-glow': 'pulseGlow 2.5s ease-in-out infinite'
                    },
                    keyframes: {
                        fadeUp: {
                            '0%':   { opacity: '0', transform: 'translateY(24px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        pulseGlow: {
                            '0%,100%': { boxShadow: '0 0 0 0 rgba(255,138,0,0.6)' },
                            '50%':     { boxShadow: '0 0 0 18px rgba(255,138,0,0)' }
                        }
                    }
                }
            }
        };
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Urbanist:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Estilos propios -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="bg-dark text-white font-sans antialiased overflow-x-hidden">

<!-- =================== TOP UTILITY BAR =================== -->
<div class="hidden md:block bg-black relative z-50">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-2.5 flex items-center justify-between text-xs">

        <div class="flex items-center gap-6 text-white/70">
            <span class="flex items-center gap-2">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                <span class="font-medium"><?= SITE_COUNTRY ?></span>
            </span>
            <span class="opacity-20">|</span>
            <span class="flex items-center gap-1.5"><i class="fa-solid fa-clock text-primary"></i>Lun a Sáb · Monitoreo 24/7</span>
            <span class="opacity-20 hidden lg:inline">|</span>
            <span class="hidden lg:flex items-center gap-1.5">
                <span class="text-primary">★★★★★</span>
                <span class="font-bold text-white">+6,000 clientes</span> confían en nosotros
            </span>
        </div>

        <div class="flex items-center gap-5 text-white/70">
            <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener" class="flex items-center gap-1.5 hover:text-primary transition">
                <i class="fa-brands fa-instagram text-primary"></i>@<?= INSTAGRAM_USER ?>
            </a>
            <span class="opacity-20">|</span>
            <a href="tel:<?= PHONE_LINK ?>" class="flex items-center gap-1.5 hover:text-primary transition font-medium">
                <i class="fa-solid fa-phone text-primary"></i><?= PHONE_DISPLAY ?>
            </a>
        </div>
    </div>
</div>

<!-- =================== MAIN HEADER =================== -->
<header id="site-header" class="sticky top-0 z-40 transition-all duration-500 bg-dark/85 backdrop-blur-xl border-b border-white/5">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 py-3.5 flex items-center justify-between gap-4">

        <!-- Logo oficial -->
        <a href="./" class="flex items-center gap-3 group shrink-0" aria-label="Haddad GPS - Inicio">
            <div class="relative">
                <img src="assets/img/logo.png"
                     alt="Haddad GPS - Multiservicios Haddad S.R.L."
                     class="h-14 sm:h-16 w-auto rounded-2xl shadow-lg ring-1 ring-white/10 group-hover:ring-primary/40 group-hover:scale-[1.03] transition">
                <span class="absolute -top-1 -right-1 w-3 h-3 rounded-full bg-green-400 border-2 border-dark shadow-glow" title="Servicio activo"></span>
            </div>
            <div class="hidden sm:block leading-tight border-l border-white/10 pl-3">
                <div class="text-[10px] uppercase tracking-[0.18em] text-white/45 font-bold">Multiservicios</div>
                <div class="text-xs font-bold text-white">Haddad · S.R.L.</div>
                <div class="text-[9px] text-primary mt-0.5"><i class="fa-solid fa-shield-halved mr-1"></i>+6,000 clientes</div>
            </div>
        </a>

        <!-- Navegación desktop -->
        <nav class="hidden xl:flex items-center gap-1">

            <a href="./#inicio" class="nav-pill px-4 py-2.5 rounded-xl text-sm font-medium text-white/80 hover:text-white hover:bg-white/5 transition">Inicio</a>

            <!-- Mega menu: Soluciones -->
            <div class="dropdown relative">
                <button class="nav-pill px-4 py-2.5 rounded-xl text-sm font-medium text-white/80 hover:text-white hover:bg-white/5 transition inline-flex items-center gap-1.5" data-dropdown="soluciones">
                    Soluciones
                    <i class="fa-solid fa-chevron-down text-[10px] dropdown-arrow transition"></i>
                </button>
                <div class="dropdown-menu invisible opacity-0 absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[min(680px,calc(100vw-2rem))] bg-dark-soft border border-white/10 rounded-2xl shadow-2xl p-3 transition-all duration-200">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-1">
                        <?php
                        $mega = [
                            ['fa-car',                'Vehículos personales',  'Carros, jeepetas y camionetas',   'index.php#servicios'],
                            ['fa-truck-fast',         'Flotillas empresariales','Control de rutas y conductores', 'index.php#flotillas'],
                            ['fa-tractor',            'Equipos pesados',        'Maquinarias y operadores',        'index.php#equipos'],
                            ['fa-truck',              'Camiones y transporte',  'Logística y carga',               'index.php#servicios'],
                            ['fa-store',              'Vehículos de reparto',   'Delivery y entregas',             'index.php#servicios'],
                            ['fa-screwdriver-wrench', 'Instalación profesional','Técnicos certificados',           'index.php#servicios'],
                        ];
                        foreach ($mega as $m): ?>
                            <a href="<?= $m[3] ?>" class="mega-item flex items-start gap-3 p-3 rounded-xl hover:bg-primary/10 transition group">
                                <div class="w-11 h-11 rounded-xl bg-primary/10 border border-primary/20 text-primary flex items-center justify-center text-lg shrink-0 group-hover:bg-primary group-hover:text-dark transition">
                                    <i class="fa-solid <?= $m[0] ?>"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-sm text-white mb-0.5"><?= $m[1] ?></div>
                                    <div class="text-xs text-white/55"><?= $m[2] ?></div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-2 pt-3 border-t border-white/5 flex items-center justify-between px-3 pb-2">
                        <div class="text-xs text-white/55">
                            <i class="fa-solid fa-bolt-lightning text-primary mr-1"></i>
                            Precio único <strong class="text-white">RD$ 5,490</strong> · sin mensualidades
                        </div>
                        <a href="cotizar" class="text-xs font-bold text-primary hover:text-primary-light inline-flex items-center gap-1">
                            Cotizar ahora <i class="fa-solid fa-arrow-right text-[9px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dropdown: La empresa -->
            <div class="dropdown relative">
                <button class="nav-pill px-4 py-2.5 rounded-xl text-sm font-medium text-white/80 hover:text-white hover:bg-white/5 transition inline-flex items-center gap-1.5" data-dropdown="empresa">
                    Por qué Haddad
                    <i class="fa-solid fa-chevron-down text-[10px] dropdown-arrow transition"></i>
                </button>
                <div class="dropdown-menu invisible opacity-0 absolute top-full left-1/2 -translate-x-1/2 mt-2 w-72 bg-dark-soft border border-white/10 rounded-2xl shadow-2xl p-3 transition-all duration-200">
                    <?php
                    $sub = [
                        ['fa-building',       'Sobre nosotros',     'Empresa y trayectoria',          'nosotros.php'],
                        ['fa-star',           'Beneficios',         'Control total desde tu celular', 'index.php#beneficios'],
                        ['fa-list-ol',        'Cómo funciona',      '4 pasos para instalar',          'index.php#como-funciona'],
                        ['fa-comment-dots',   'Testimonios',        '+6,000 clientes felices',        'index.php#testimonios'],
                        ['fa-circle-question','Preguntas frecuentes','Resolvemos tus dudas',          'index.php#faq'],
                    ];
                    foreach ($sub as $s): ?>
                        <a href="<?= $s[3] ?>" class="flex items-start gap-3 p-3 rounded-xl hover:bg-primary/10 transition group">
                            <div class="w-9 h-9 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-sm shrink-0 group-hover:bg-primary group-hover:text-dark transition">
                                <i class="fa-solid <?= $s[0] ?>"></i>
                            </div>
                            <div>
                                <div class="font-bold text-sm text-white"><?= $s[1] ?></div>
                                <div class="text-xs text-white/55"><?= $s[2] ?></div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <a href="./#planes" class="nav-pill px-4 py-2.5 rounded-xl text-sm font-medium text-white/80 hover:text-white hover:bg-white/5 transition inline-flex items-center gap-2">
                Precio
                <span class="text-[9px] font-black bg-primary text-dark px-1.5 py-0.5 rounded-full">5,490</span>
            </a>

            <a href="./#galeria" class="nav-pill px-4 py-2.5 rounded-xl text-sm font-medium text-white/80 hover:text-white hover:bg-white/5 transition">Galería</a>

            <a href="contacto" class="nav-pill px-4 py-2.5 rounded-xl text-sm font-medium text-white/80 hover:text-white hover:bg-white/5 transition">Contacto</a>
        </nav>

        <!-- CTAs desktop -->
        <div class="hidden lg:flex items-center gap-2 shrink-0">

            <!-- Botón llamada compacto (solo ícono) -->
            <a href="tel:<?= PHONE_LINK ?>" class="hidden xl:flex w-11 h-11 rounded-xl border border-white/10 hover:border-primary hover:bg-primary hover:text-dark items-center justify-center text-primary transition" aria-label="Llamar a <?= PHONE_DISPLAY ?>" title="<?= PHONE_DISPLAY ?>">
                <i class="fa-solid fa-phone-volume"></i>
            </a>

            <a href="cotizar" class="px-4 xl:px-5 py-2.5 xl:py-3 rounded-xl bg-primary text-dark font-bold text-sm hover:bg-primary-light transition shadow-glow whitespace-nowrap inline-flex items-center gap-2">
                <i class="fa-solid fa-wrench text-xs"></i>
                Cotizar GPS
            </a>

            <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="relative px-4 xl:px-5 py-2.5 xl:py-3 rounded-xl bg-whatsapp text-white font-bold text-sm hover:opacity-90 transition flex items-center gap-2 whitespace-nowrap shadow-lg">
                <i class="fa-brands fa-whatsapp text-base"></i> WhatsApp
                <span class="absolute -top-1 -right-1 flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-300 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-400 border-2 border-dark"></span>
                </span>
            </a>
        </div>

        <!-- Hamburguesa -->
        <button id="mobile-menu-btn" class="lg:hidden w-11 h-11 rounded-xl bg-dark-soft border border-white/10 flex items-center justify-center" aria-label="Abrir menú">
            <i class="fa-solid fa-bars text-primary text-lg"></i>
        </button>
    </div>
</header>

<!-- =================== MOBILE MENU (Slide-in panel) =================== -->
<div id="mobile-overlay" class="fixed inset-0 z-[60] bg-black/70 backdrop-blur-sm opacity-0 invisible transition-all duration-300 lg:hidden"></div>

<aside id="mobile-menu" class="fixed top-0 right-0 z-[70] h-full w-[88%] max-w-sm bg-dark border-l border-white/10 translate-x-full transition-transform duration-300 lg:hidden flex flex-col">

    <!-- Header del panel -->
    <div class="px-5 py-5 border-b border-white/10 flex items-center justify-between">
        <img src="assets/img/logo.png" alt="Haddad GPS" class="h-12 w-auto rounded-xl ring-1 ring-white/10">
        <button id="mobile-close" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center" aria-label="Cerrar">
            <i class="fa-solid fa-xmark text-primary"></i>
        </button>
    </div>

    <!-- Cuerpo scroll -->
    <div class="flex-1 overflow-y-auto">

        <!-- Trust badge -->
        <div class="m-5 p-4 rounded-2xl bg-gradient-to-br from-primary/15 to-primary/5 border border-primary/30">
            <div class="flex items-center gap-3 mb-2">
                <span class="text-primary text-lg">★★★★★</span>
                <span class="text-xs font-bold text-white">+6,000 clientes</span>
            </div>
            <div class="text-xs text-white/65 mb-3">Confían en Haddad GPS para proteger sus vehículos en RD.</div>
            <div class="flex items-center justify-between text-xs">
                <span class="text-white/55">Precio único</span>
                <span class="font-black text-primary text-base">RD$ 5,490</span>
            </div>
        </div>

        <!-- Nav links principales -->
        <nav class="px-3 pb-3">
            <div class="px-3 py-2 text-[10px] uppercase tracking-[0.2em] text-white/40 font-bold">Navegación</div>

            <a href="./#inicio" class="mobile-link flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-primary/10 transition group">
                <i class="fa-solid fa-house text-primary w-5 text-center"></i>
                <span class="font-medium">Inicio</span>
                <i class="fa-solid fa-chevron-right text-white/30 text-[10px] ml-auto group-hover:text-primary"></i>
            </a>

            <!-- Acordeón móvil: Soluciones -->
            <div class="mobile-accordion">
                <button class="mobile-acc-toggle w-full flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-primary/10 transition">
                    <i class="fa-solid fa-layer-group text-primary w-5 text-center"></i>
                    <span class="font-medium">Soluciones</span>
                    <i class="fa-solid fa-chevron-down text-white/30 text-[10px] ml-auto transition"></i>
                </button>
                <div class="mobile-acc-content max-h-0 overflow-hidden transition-all duration-300 pl-10 space-y-1">
                    <a href="./#servicios"  class="mobile-link block py-2 text-sm text-white/70 hover:text-primary">› Vehículos personales</a>
                    <a href="./#flotillas"  class="mobile-link block py-2 text-sm text-white/70 hover:text-primary">› Flotillas empresariales</a>
                    <a href="./#equipos"    class="mobile-link block py-2 text-sm text-white/70 hover:text-primary">› Equipos pesados</a>
                    <a href="./#servicios"  class="mobile-link block py-2 text-sm text-white/70 hover:text-primary">› Camiones</a>
                    <a href="./#servicios"  class="mobile-link block py-2 text-sm text-white/70 hover:text-primary">› Vehículos de reparto</a>
                </div>
            </div>

            <!-- Acordeón móvil: Por qué Haddad -->
            <div class="mobile-accordion">
                <button class="mobile-acc-toggle w-full flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-primary/10 transition">
                    <i class="fa-solid fa-star text-primary w-5 text-center"></i>
                    <span class="font-medium">Por qué Haddad</span>
                    <i class="fa-solid fa-chevron-down text-white/30 text-[10px] ml-auto transition"></i>
                </button>
                <div class="mobile-acc-content max-h-0 overflow-hidden transition-all duration-300 pl-10 space-y-1">
                    <a href="./#beneficios"    class="mobile-link block py-2 text-sm text-white/70 hover:text-primary">› Beneficios</a>
                    <a href="./#como-funciona" class="mobile-link block py-2 text-sm text-white/70 hover:text-primary">› Cómo funciona</a>
                    <a href="./#testimonios"   class="mobile-link block py-2 text-sm text-white/70 hover:text-primary">› Testimonios</a>
                </div>
            </div>

            <a href="./#planes" class="mobile-link flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-primary/10 transition group">
                <i class="fa-solid fa-tag text-primary w-5 text-center"></i>
                <span class="font-medium">Precio</span>
                <span class="text-[10px] font-black bg-primary text-dark px-2 py-0.5 rounded-full ml-auto">RD$ 5,490</span>
            </a>

            <a href="./#galeria" class="mobile-link flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-primary/10 transition group">
                <i class="fa-solid fa-images text-primary w-5 text-center"></i>
                <span class="font-medium">Galería</span>
                <i class="fa-solid fa-chevron-right text-white/30 text-[10px] ml-auto group-hover:text-primary"></i>
            </a>

            <a href="nosotros" class="mobile-link flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-primary/10 transition group">
                <i class="fa-solid fa-building text-primary w-5 text-center"></i>
                <span class="font-medium">Sobre nosotros</span>
                <i class="fa-solid fa-chevron-right text-white/30 text-[10px] ml-auto group-hover:text-primary"></i>
            </a>

            <a href="contacto" class="mobile-link flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-primary/10 transition group">
                <i class="fa-solid fa-envelope text-primary w-5 text-center"></i>
                <span class="font-medium">Contacto</span>
                <i class="fa-solid fa-chevron-right text-white/30 text-[10px] ml-auto group-hover:text-primary"></i>
            </a>
        </nav>

        <!-- Contacto rápido -->
        <div class="px-3 pb-3">
            <div class="px-3 py-2 text-[10px] uppercase tracking-[0.2em] text-white/40 font-bold">Contáctanos</div>

            <a href="tel:<?= PHONE_LINK ?>" class="flex items-center gap-3 px-3 py-3 rounded-xl bg-dark-soft border border-white/5">
                <i class="fa-solid fa-phone-volume text-primary"></i>
                <div>
                    <div class="text-[10px] text-white/50">Llámanos</div>
                    <div class="font-bold text-sm"><?= PHONE_DISPLAY ?></div>
                </div>
            </a>

            <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener" class="mt-2 flex items-center gap-3 px-3 py-3 rounded-xl bg-dark-soft border border-white/5">
                <i class="fa-brands fa-instagram text-primary"></i>
                <div>
                    <div class="text-[10px] text-white/50">Instagram</div>
                    <div class="font-bold text-sm">@<?= INSTAGRAM_USER ?></div>
                </div>
            </a>
        </div>
    </div>

    <!-- Footer del panel: CTAs -->
    <div class="p-4 border-t border-white/10 grid grid-cols-2 gap-2 bg-dark-soft">
        <a href="cotizar" class="text-center py-3.5 rounded-xl bg-primary text-dark font-bold text-sm shadow-glow">
            <i class="fa-solid fa-wrench mr-1"></i>Cotizar
        </a>
        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="text-center py-3.5 rounded-xl bg-whatsapp text-white font-bold text-sm shadow-lg">
            <i class="fa-brands fa-whatsapp mr-1"></i>WhatsApp
        </a>
    </div>
</aside>
