<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle       = 'Servicios GPS | Haddad GPS - Vehículos, Flotillas y Equipos Pesados';
$pageDescription = 'Conoce todos los servicios GPS de Haddad GPS: rastreo vehicular, flotillas empresariales, equipos pesados, camiones y vehículos de reparto en República Dominicana.';
require_once __DIR__ . '/includes/header.php';

$services = [
    [
        'id'    => 'personales',
        'icon'  => 'fa-car',
        'title' => 'GPS para vehículos personales',
        'sub'   => 'Carros, jeepetas, camionetas y vehículos familiares',
        'desc'  => 'Protege tu inversión con localización en tiempo real, alertas instantáneas y apagado remoto desde tu celular. Ideal para quien quiere tranquilidad total sobre su vehículo personal.',
        'features' => [
            ['fa-location-crosshairs', 'Rastreo en tiempo real',  'Conoce la ubicación exacta de tu vehículo a cualquier hora.'],
            ['fa-bell',                'Alertas inteligentes',     'Recibe notificaciones cuando el vehículo se mueva o encienda.'],
            ['fa-power-off',           'Apagado remoto',           'Detén el motor desde tu celular en caso de robo.'],
            ['fa-route',               'Historial de recorrido',   'Consulta rutas, paradas y velocidad de los últimos días.'],
        ],
        'ideal' => ['Carros', 'Jeepetas', 'Camionetas', 'SUVs', 'Vehículos familiares'],
        'img'   => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1200&q=80',
    ],
    [
        'id'    => 'flotillas',
        'icon'  => 'fa-truck-fast',
        'title' => 'GPS para flotillas empresariales',
        'sub'   => 'Control total de tu flota desde una sola plataforma',
        'desc'  => 'Administra múltiples vehículos al mismo tiempo, controla rutas, monitorea conductores, reduce costos operativos y aumenta la productividad de tu empresa.',
        'features' => [
            ['fa-chart-line',  'Reportes empresariales', 'Datos detallados de cada vehículo, conductor y ruta.'],
            ['fa-users',       'Multiusuario',           'Acceso para gerentes, supervisores y operadores.'],
            ['fa-map',         'Optimización de rutas',  'Mejora tiempos de entrega y reduce el consumo de combustible.'],
            ['fa-shield-halved','Seguridad total',       'Alertas inmediatas ante cualquier movimiento sospechoso.'],
        ],
        'ideal' => ['Empresas de logística', 'Distribuidoras', 'Empresas de servicios', 'Constructoras'],
        'img'   => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1200&q=80',
    ],
    [
        'id'    => 'equipos',
        'icon'  => 'fa-tractor',
        'title' => 'GPS para equipos pesados',
        'sub'   => 'Maquinarias, operadores y combustible bajo control',
        'desc'  => 'Que nada se salga de control con tus operadores. Monitorea horas de trabajo, consumo de combustible, encendido/apagado y ubicación de toda tu maquinaria pesada.',
        'features' => [
            ['fa-gas-pump',  'Control de combustible',  'Detecta consumo anormal y prevén pérdidas.'],
            ['fa-clock',     'Horas de trabajo',        'Mide la productividad real de cada equipo.'],
            ['fa-user-tie',  'Monitoreo de operadores', 'Controla comportamiento y tiempos de uso.'],
            ['fa-bell',      'Alertas de encendido',    'Notificación instantánea cuando el equipo arranca.'],
        ],
        'ideal' => ['Retroexcavadoras', 'Montacargas', 'Excavadoras', 'Bulldozers', 'Grúas', 'Cargadores'],
        'img'   => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=1200&q=80',
    ],
    [
        'id'    => 'camiones',
        'icon'  => 'fa-truck',
        'title' => 'GPS para camiones y transporte',
        'sub'   => 'Logística, distribución y carga segura',
        'desc'  => 'Solución profesional para empresas de transporte y logística. Monitorea cargas, rutas, horarios y mantén comunicación constante con tus conductores.',
        'features' => [
            ['fa-route',         'Rutas y paradas',        'Control completo del trayecto y tiempo de detención.'],
            ['fa-gauge',         'Velocidad y seguridad',  'Alertas si exceden los límites configurados.'],
            ['fa-clipboard-list','Reportes de viaje',      'Documentación completa de cada entrega.'],
            ['fa-warehouse',     'Geocercas',              'Zonas autorizadas con alertas al entrar o salir.'],
        ],
        'ideal' => ['Camiones de carga', 'Plataformas', 'Volteos', 'Cisternas', 'Furgones'],
        'img'   => 'https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=1200&q=80',
    ],
    [
        'id'    => 'reparto',
        'icon'  => 'fa-store',
        'title' => 'GPS para vehículos de reparto',
        'sub'   => 'Entregas más rápidas, seguras y eficientes',
        'desc'  => 'Lleva tu negocio de delivery al siguiente nivel. Optimiza las entregas, mejora el servicio al cliente y mantén el control total de tu equipo de reparto.',
        'features' => [
            ['fa-box',           'Seguimiento de entregas', 'Sabe en tiempo real dónde está cada paquete.'],
            ['fa-stopwatch',     'Tiempos de entrega',      'Mide eficiencia y mejora la operación.'],
            ['fa-phone',         'Atención al cliente',     'Da información precisa a tus clientes.'],
            ['fa-tachograph-digital','Control de productividad','Métricas claras del equipo de reparto.'],
        ],
        'ideal' => ['Restaurantes', 'Farmacias', 'E-commerce', 'Mensajería', 'Distribuidoras'],
        'img'   => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?auto=format&fit=crop&w=1200&q=80',
    ],
    [
        'id'    => 'instalacion',
        'icon'  => 'fa-screwdriver-wrench',
        'title' => 'Instalación profesional',
        'sub'   => 'Hecha por técnicos certificados, con garantía',
        'desc'  => 'Nuestros técnicos están capacitados para instalar el GPS de forma segura, oculta y sin afectar el sistema eléctrico de tu vehículo. Todas las instalaciones incluyen garantía.',
        'features' => [
            ['fa-user-shield', 'Técnicos certificados',  'Personal con años de experiencia en instalaciones GPS.'],
            ['fa-eye-slash',   'Instalación oculta',     'El dispositivo queda completamente disimulado.'],
            ['fa-shield',      'Garantía incluida',      'Cubrimos cualquier falla técnica del equipo.'],
            ['fa-calendar',    'Cita rápida',            'Agendamos según tu disponibilidad.'],
        ],
        'ideal' => ['Todo tipo de vehículo'],
        'img'   => 'https://images.unsplash.com/photo-1632823471565-1ecdf5c6da77?auto=format&fit=crop&w=1200&q=80',
    ],
];
?>

<!-- HERO -->
<section class="relative overflow-hidden bg-gradient-to-br from-dark via-dark-soft to-black py-16 lg:py-24">
    <div class="absolute inset-0 hero-grid opacity-30 pointer-events-none"></div>
    <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-primary/15 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4" data-aos="fade-down">
            <span class="w-8 h-px bg-primary"></span>Servicios<span class="w-8 h-px bg-primary"></span>
        </span>
        <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]" data-aos="fade-up">
            Soluciones GPS para <span class="text-primary">cada necesidad</span>
        </h1>
        <p class="text-white/65 text-base sm:text-lg max-w-3xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="100">
            Desde vehículos personales hasta flotillas empresariales y equipos pesados. <strong class="text-white">Precio único de RD$ 5,490</strong> con instalación profesional incluida y sin mensualidades.
        </p>
        <div class="flex flex-wrap justify-center gap-3" data-aos="fade-up" data-aos-delay="200">
            <a href="cotizar" class="px-6 py-3.5 rounded-xl bg-primary text-dark font-bold hover:bg-primary-light transition shadow-glow inline-flex items-center gap-2">
                <i class="fa-solid fa-wrench"></i> Solicitar cotización
            </a>
            <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-6 py-3.5 rounded-xl bg-whatsapp text-white font-bold hover:opacity-90 transition inline-flex items-center gap-2">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp
            </a>
        </div>

        <!-- Nav rápido -->
        <div class="mt-12 flex flex-wrap justify-center gap-2" data-aos="fade-up" data-aos-delay="300">
            <?php foreach ($services as $s): ?>
                <a href="#<?= $s['id'] ?>" class="text-[11px] sm:text-xs font-bold px-4 py-2 rounded-full bg-white/[0.04] border border-white/10 hover:border-primary/50 hover:bg-primary/10 transition inline-flex items-center gap-2 text-white/75">
                    <i class="fa-solid <?= $s['icon'] ?> text-primary"></i>
                    <?= explode(' ', $s['title'])[2] ?? $s['title'] ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- SERVICIOS DETALLADOS -->
<?php foreach ($services as $i => $s):
    $isEven = $i % 2 === 0;
    $bg     = $isEven ? 'bg-dark' : 'bg-dark-soft';
?>
<section id="<?= $s['id'] ?>" class="<?= $bg ?> py-20 lg:py-28 relative overflow-hidden scroll-mt-24">
    <div class="absolute <?= $isEven ? 'right-0' : 'left-0' ?> top-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-primary/8 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">

        <div class="<?= $isEven ? 'lg:order-1' : 'lg:order-2' ?>" data-aos="<?= $isEven ? 'fade-right' : 'fade-left' ?>">
            <div class="inline-flex items-center gap-3 mb-5">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary to-primary-dark text-dark flex items-center justify-center text-2xl shadow-glow">
                    <i class="fa-solid <?= $s['icon'] ?>"></i>
                </div>
                <span class="text-[10px] uppercase tracking-[0.3em] text-primary font-bold">Servicio 0<?= $i + 1 ?></span>
            </div>

            <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl mb-3 leading-[1.05]"><?= $s['title'] ?></h2>
            <p class="text-primary text-base font-display font-semibold mb-5"><?= $s['sub'] ?></p>
            <p class="text-white/70 text-base lg:text-lg leading-relaxed mb-8"><?= $s['desc'] ?></p>

            <div class="grid sm:grid-cols-2 gap-3 mb-8">
                <?php foreach ($s['features'] as $f): ?>
                    <div class="flex items-start gap-3 bg-white/[0.04] border border-white/10 rounded-xl px-4 py-3 hover:border-primary/40 transition">
                        <div class="w-10 h-10 rounded-lg bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="fa-solid <?= $f[0] ?>"></i>
                        </div>
                        <div class="min-w-0">
                            <div class="font-bold text-sm text-white mb-0.5"><?= $f[1] ?></div>
                            <div class="text-xs text-white/55 leading-snug"><?= $f[2] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="mb-8">
                <div class="text-[10px] uppercase tracking-[0.2em] text-white/40 font-bold mb-3">Ideal para</div>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($s['ideal'] as $t): ?>
                        <span class="text-xs font-medium px-3 py-1.5 rounded-full bg-primary/10 text-primary border border-primary/20"><?= $t ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="cotizar?servicio=<?= urlencode($s['title']) ?>" class="px-6 py-3.5 rounded-xl bg-primary text-dark font-bold hover:bg-primary-light transition shadow-glow inline-flex items-center gap-2 group">
                    Cotizar este servicio <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
                </a>
                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-6 py-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-whatsapp text-white font-bold transition inline-flex items-center gap-2">
                    <i class="fa-brands fa-whatsapp text-whatsapp"></i> Preguntar
                </a>
            </div>
        </div>

        <div class="<?= $isEven ? 'lg:order-2' : 'lg:order-1' ?>" data-aos="<?= $isEven ? 'fade-left' : 'fade-right' ?>">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/3] border border-white/10">
                <img src="<?= $s['img'] ?>" alt="<?= $s['title'] ?>" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/30 to-transparent"></div>
                <div class="absolute bottom-5 left-5 right-5 flex items-center gap-3 bg-dark/85 backdrop-blur border border-white/10 rounded-2xl p-4">
                    <div class="w-12 h-12 rounded-xl bg-primary text-dark flex items-center justify-center text-xl shrink-0">
                        <i class="fa-solid <?= $s['icon'] ?>"></i>
                    </div>
                    <div class="min-w-0">
                        <div class="text-[10px] uppercase tracking-wider text-primary font-bold">Precio único</div>
                        <div class="font-display font-black text-lg text-white">RD$ 5,490 <span class="text-xs font-medium text-white/55">· sin mensualidad</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>

<!-- CTA -->
<section class="relative py-24 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary to-primary-dark"></div>
    <div class="absolute inset-0 hero-grid opacity-20 pointer-events-none"></div>

    <div class="relative max-w-5xl mx-auto px-4 lg:px-8 text-center text-dark" data-aos="zoom-in">
        <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl mb-5 leading-[1.05]">
            ¿No estás seguro de qué servicio necesitas?
        </h2>
        <p class="text-dark/80 text-lg mb-8 max-w-2xl mx-auto">
            Conversemos. Te asesoramos sin compromiso y te recomendamos la mejor opción según tu vehículo.
        </p>
        <div class="flex flex-wrap justify-center gap-3">
            <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-7 py-4 rounded-2xl bg-whatsapp text-white font-bold inline-flex items-center gap-2 shadow-2xl">
                <i class="fa-brands fa-whatsapp text-xl"></i> Asesoría gratis
            </a>
            <a href="cotizar" class="px-7 py-4 rounded-2xl bg-dark text-primary font-bold inline-flex items-center gap-2 shadow-2xl">
                Cotizar ahora <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
