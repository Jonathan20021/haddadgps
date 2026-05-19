<?php
require_once __DIR__ . '/includes/config.php';

/**
 * ===========================================================
 *  Plantilla dinámica de detalle de beneficios
 *  URL pública: /beneficio-<slug>
 *  Internamente: /beneficio.php?slug=<slug>
 * ===========================================================
 */

$benefits = [

    'localizacion' => [
        'icon'      => 'fa-location-crosshairs',
        'title'     => 'Localización en tiempo real',
        'subtitle'  => 'Sabe dónde está tu vehículo, ahora mismo',
        'lead'      => 'Visualiza la ubicación exacta de tu vehículo desde tu celular en cualquier momento, las 24 horas del día.',
        'image'     => 'https://images.unsplash.com/photo-1545987796-200677ee1011?auto=format&fit=crop&w=1200&q=80',
        'long'      => [
            'La localización en tiempo real es el corazón del servicio GPS de Haddad. Cada pocos segundos, el dispositivo instalado en tu vehículo envía su posición exacta a nuestra plataforma. Tú la consultas desde tu celular o computadora cuando quieras, sin importar dónde estés.',
            'No importa si estás en otra ciudad, viajando o simplemente en casa: tu vehículo aparece en el mapa con su ubicación al minuto. Si se mueve, lo ves moverse. Si está detenido, ves cuánto tiempo lleva detenido y exactamente dónde.',
            'Esta función es la base de toda la seguridad GPS: te permite reaccionar de inmediato ante un robo, supervisar a tu chofer, saber dónde llegó tu hijo, o controlar la ruta de tus vehículos comerciales sin llamadas innecesarias.',
        ],
        'howItWorks' => [
            ['fa-satellite-dish', 'El GPS recibe la señal',    'El dispositivo recibe coordenadas de los satélites GPS cada pocos segundos.'],
            ['fa-tower-cell',     'Envía datos por red móvil', 'La ubicación se envía por la red celular a nuestra plataforma.'],
            ['fa-cloud',          'Se actualiza en la nube',   'Nuestros servidores procesan y guardan la información.'],
            ['fa-mobile-screen',  'La ves en tu celular',      'Abres la app y ves tu vehículo en el mapa, en tiempo real.'],
        ],
        'useCases' => [
            ['fa-house',          'Para tu familia',  'Sabe a qué hora llegó tu cónyuge o tu hijo. Cero llamadas innecesarias.'],
            ['fa-briefcase',      'Para tu empresa',  'Controla a tus choferes y vehículos sin que sientan que los persigues.'],
            ['fa-shield-halved',  'Ante un robo',     'Reaccionas en minutos con la ubicación exacta para reportar a las autoridades.'],
            ['fa-route',          'En viajes largos', 'Tus familiares saben tu posición durante el trayecto.'],
        ],
        'pluses' => [
            'Precisión de hasta 5 metros',
            'Actualización cada pocos segundos',
            'Visible desde cualquier celular o navegador',
            'Mapa en español, fácil de leer',
            'Funciona en todo el territorio dominicano',
        ],
    ],

    'apagado' => [
        'icon'      => 'fa-power-off',
        'title'     => 'Apagado a distancia',
        'subtitle'  => 'Detén tu vehículo desde tu celular',
        'lead'      => 'Bloquea o apaga el motor del vehículo de forma remota en caso de emergencia o robo. Una herramienta poderosa para proteger tu inversión.',
        'image'     => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1200&q=80',
        'long'      => [
            'El apagado remoto es una de las funciones más solicitadas por nuestros clientes. Con un toque en la app, puedes bloquear el arranque del motor o apagar el vehículo si ya estaba en marcha (con condiciones de seguridad para evitar accidentes).',
            'Esta función ha permitido recuperar decenas de vehículos en República Dominicana. Cuando un ladrón se lleva un vehículo Haddad, basta con bloquear el motor y reportar la ubicación a las autoridades.',
            'También funciona en escenarios menos dramáticos: choferes que no devuelven el vehículo, empleados que lo usan fuera de horario, o simplemente prevenir que alguien sin autorización lo encienda.',
        ],
        'howItWorks' => [
            ['fa-mobile-screen', 'Abres la app',           'Accedes a la plataforma desde tu celular.'],
            ['fa-power-off',     'Tocas "Apagar"',         'Confirmas la acción con tu contraseña.'],
            ['fa-bolt',          'Envía la señal',         'El comando viaja a tu vehículo en segundos.'],
            ['fa-engine',        'El motor se bloquea',    'El vehículo no podrá arrancar hasta que tú lo permitas.'],
        ],
        'useCases' => [
            ['fa-mask',           'En caso de robo',     'Inmovilizas el vehículo para que el ladrón lo abandone.'],
            ['fa-user-tie',       'Con choferes',        'Si un chofer no devuelve el vehículo, lo controlas.'],
            ['fa-clock',          'Fuera de horario',    'Evitas que se use el vehículo de la empresa los fines de semana.'],
            ['fa-triangle-exclamation', 'Emergencias',  'Detienes el vehículo si alguien lo lleva sin permiso.'],
        ],
        'pluses' => [
            'Apagado seguro (solo si el vehículo está detenido o a baja velocidad)',
            'Bloqueo de arranque (impide encenderlo)',
            'Reactivación instantánea cuando tú decides',
            'Confirmación por contraseña antes de ejecutar',
            'Historial de cuándo y desde dónde se usó',
        ],
    ],

    'historial' => [
        'icon'      => 'fa-route',
        'title'     => 'Historial de recorrido',
        'subtitle'  => 'Cada ruta, cada parada, cada velocidad',
        'lead'      => 'Consulta dónde estuvo tu vehículo, qué ruta tomó, dónde se detuvo y a qué velocidad fue. Información detallada de los últimos meses.',
        'image'     => 'https://images.unsplash.com/photo-1486006920555-c77dcf18193c?auto=format&fit=crop&w=1200&q=80',
        'long'      => [
            'El historial de recorrido guarda cada movimiento de tu vehículo. Puedes ver mapa de las rutas que hizo cualquier día anterior, los horarios de salida y llegada, dónde y por cuánto tiempo se detuvo, y hasta qué velocidad alcanzó.',
            'Es ideal para empresas que necesitan verificar que sus vehículos siguen las rutas asignadas. También para padres que quieren saber por dónde anduvo el carro familiar, o para confirmar que la persona que prestaste el vehículo realmente fue donde dijo.',
            'Toda la información se guarda automáticamente. No tienes que activar nada — el sistema registra todo, todo el tiempo.',
        ],
        'howItWorks' => [
            ['fa-database',       'El sistema registra todo','Cada posición se guarda en la nube en tiempo real.'],
            ['fa-calendar',       'Elige fecha y hora',      'Selecciona el día que quieres revisar.'],
            ['fa-map',            'Ves la ruta en el mapa',  'La trayectoria completa aparece dibujada.'],
            ['fa-chart-line',     'Detalles en una línea',   'Velocidades, paradas y tiempos de cada tramo.'],
        ],
        'useCases' => [
            ['fa-clipboard-check','Verificar rutas',    'Confirmas que tu chofer fue donde debía ir.'],
            ['fa-children',       'Control familiar',   'Sabes por dónde manejó tu hijo el fin de semana.'],
            ['fa-scale-balanced', 'Disputas',           'Si hay una multa o accidente, tienes evidencia.'],
            ['fa-chart-bar',      'Análisis empresarial','Identificas rutas ineficientes y optimizas.'],
        ],
        'pluses' => [
            'Hasta varios meses de historial guardado',
            'Filtros por fecha, hora y vehículo',
            'Reporte de paradas (lugar y duración)',
            'Velocidad máxima y promedio',
            'Exportación de reportes para empresas',
        ],
    ],

    'monitoreo' => [
        'icon'      => 'fa-eye',
        'title'     => 'Monitoreo 24/7',
        'subtitle'  => 'El sistema nunca duerme',
        'lead'      => 'Supervisión continua los 365 días del año. Tu vehículo está siendo monitoreado mientras lees esto.',
        'image'     => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&w=1200&q=80',
        'long'      => [
            'El monitoreo 24/7 significa que el sistema GPS de tu vehículo está activo y enviando datos las 24 horas del día, los 7 días de la semana, los 365 días del año. No hay horarios. No hay descansos. No hay pausas.',
            'Esto es lo que diferencia un GPS profesional de un dispositivo casero. Nuestra plataforma recibe la información incluso cuando tu vehículo está estacionado, dormido, o sin uso. Si alguien lo mueve sin que tú lo sepas, lo verás.',
            'La señal funciona en todo el territorio dominicano: desde Santo Domingo hasta los pueblos más remotos. Mientras haya cobertura celular, tu GPS está reportando.',
        ],
        'howItWorks' => [
            ['fa-rotate',         'Conexión continua',   'El GPS no se apaga, ni siquiera con el vehículo apagado.'],
            ['fa-server',         'Servidores activos',  'Nuestra infraestructura funciona 24/7.'],
            ['fa-bell',           'Alertas inmediatas',  'Si algo pasa, te notificamos al instante.'],
            ['fa-headset',        'Soporte disponible',  'Atención por WhatsApp en horario extendido.'],
        ],
        'useCases' => [
            ['fa-moon',           'De noche',     'Sabes si alguien mueve tu vehículo mientras duermes.'],
            ['fa-plane',          'De viaje',     'Aunque estés fuera del país, ves tu vehículo.'],
            ['fa-umbrella-beach', 'Vacaciones',   'Tu carro estacionado, vigilado todo el tiempo.'],
            ['fa-warehouse',      'Empresas',     'Tus camiones reportando aunque sea fin de semana.'],
        ],
        'pluses' => [
            'Sin pausas, sin horarios, sin excepciones',
            'Cobertura nacional completa',
            'Funciona con el vehículo apagado',
            'Infraestructura redundante',
            'Soporte por WhatsApp todos los días',
        ],
    ],

    'alertas' => [
        'icon'      => 'fa-bell',
        'title'     => 'Alertas inteligentes',
        'subtitle'  => 'Te avisamos antes de que sea tarde',
        'lead'      => 'Recibe notificaciones automáticas cuando el vehículo se enciende, se mueve, sale de una zona o supera una velocidad.',
        'image'     => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1200&q=80',
        'long'      => [
            'Las alertas inteligentes te mantienen informado sin que tengas que estar mirando la app. El sistema te avisa automáticamente cuando ocurren eventos importantes con tu vehículo: arranque, movimiento, exceso de velocidad, entrada o salida de una zona específica.',
            'Configuras qué alertas quieres recibir y de qué forma. Por notificación push de la app, por SMS, o por WhatsApp. Solo recibes lo que importa, cuando importa.',
            'Es una capa de protección activa: en lugar de revisar tu vehículo "por las dudas", tú vives tu vida y el sistema te avisa solo si algo merece tu atención.',
        ],
        'howItWorks' => [
            ['fa-sliders',        'Configuras tus reglas','Eliges qué eventos quieres saber.'],
            ['fa-magnifying-glass','El sistema vigila',   'Monitorea continuamente todos los datos.'],
            ['fa-circle-exclamation','Detecta el evento','Cuando ocurre algo configurado, se activa.'],
            ['fa-bell',           'Te notifica',         'Recibes la alerta en segundos.'],
        ],
        'useCases' => [
            ['fa-key',            'Encendido inesperado','Alguien encendió tu carro a las 3 AM. Te enteras.'],
            ['fa-warehouse',      'Geocercas',           'Sales o entras de una zona definida.'],
            ['fa-gauge-high',     'Exceso de velocidad', 'Sabes si tu chofer va a 120 cuando debería ir a 80.'],
            ['fa-arrows-up-down', 'Movimiento sin uso',  'El carro se mueve sin que el motor esté encendido.'],
        ],
        'pluses' => [
            'Múltiples canales: app, SMS, WhatsApp',
            'Alertas configurables por vehículo',
            'Geocercas (zonas geográficas)',
            'Alertas de velocidad personalizables',
            'Histórico completo de eventos',
        ],
    ],

    'combustible' => [
        'icon'      => 'fa-gas-pump',
        'title'     => 'Control de combustible',
        'subtitle'  => 'Detecta consumo anormal y previene pérdidas',
        'lead'      => 'Monitorea el consumo de combustible de tu flota o equipo pesado. Identifica robos, desperdicios y mejora la eficiencia.',
        'image'     => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=1200&q=80',
        'long'      => [
            'El control de combustible es una función premium especialmente útil para empresas con flotillas, transportistas y operadores de equipos pesados. El sistema registra el nivel del tanque y detecta variaciones anormales: cargas, consumos y bajadas súbitas.',
            'Esto te permite identificar robos de combustible (bajadas inexplicables en el tanque), conductores ineficientes (consumo excesivo en rutas), o problemas mecánicos (consumo creciente sin razón aparente).',
            'Para una empresa de transporte, el ahorro mensual en combustible identificado por esta función puede pagar el GPS varias veces. Para un dueño de retroexcavadora o montacargas, es la diferencia entre saber y no saber qué pasa con su inversión.',
        ],
        'howItWorks' => [
            ['fa-microchip',      'Sensor en el tanque',  'Se instala un sensor que mide el nivel real de combustible.'],
            ['fa-chart-line',     'Lectura continua',     'El sistema graba los niveles todo el tiempo.'],
            ['fa-robot',          'Análisis automático',  'Detecta cargas, consumos normales y anomalías.'],
            ['fa-file-invoice',   'Reportes claros',      'Tablas y gráficas con todo el comportamiento.'],
        ],
        'useCases' => [
            ['fa-truck',          'Flotas de transporte', 'Identificas robos sistemáticos de combustible.'],
            ['fa-tractor',        'Equipo pesado',        'Sabes cuánto consume realmente tu maquinaria.'],
            ['fa-chart-pie',      'Análisis de eficiencia','Comparas el consumo entre conductores.'],
            ['fa-coins',          'Ahorro mensual',       'Bajas el costo operativo de tu empresa.'],
        ],
        'pluses' => [
            'Sensor adicional opcional para mayor precisión',
            'Alerta automática ante bajadas anómalas',
            'Reportes mensuales descargables',
            'Compatible con vehículos y maquinaria pesada',
            'Integración con tarjetas de combustible (consultar)',
        ],
    ],

    'horas-trabajo' => [
        'icon'      => 'fa-clock',
        'title'     => 'Horas de trabajo',
        'subtitle'  => 'Mide la productividad real de tus equipos',
        'lead'      => 'Controla cuántas horas trabaja cada vehículo o equipo pesado. Diferencia entre encendido, en uso real y detenido.',
        'image'     => 'https://images.unsplash.com/photo-1530124566582-a618bc2615dc?auto=format&fit=crop&w=1200&q=80',
        'long'      => [
            'En equipos pesados (retroexcavadoras, montacargas, grúas) y vehículos comerciales, las horas de trabajo son la métrica fundamental para evaluar productividad, planificar mantenimientos y calcular costos.',
            'El sistema diferencia entre: horas de motor encendido, horas de trabajo real (con movimiento o uso), y horas de inactividad (encendido pero detenido). Esta diferenciación es crucial: un operario puede tener su equipo encendido 8 horas pero solo trabajar 4 reales.',
            'Con datos objetivos, puedes evaluar a tus operadores, planificar mantenimientos preventivos según horas reales de uso, calcular costos por proyecto, y detectar uso indebido de equipos fuera de horario laboral.',
        ],
        'howItWorks' => [
            ['fa-key',            'Detecta el encendido', 'Sabe exactamente cuándo se enciende el equipo.'],
            ['fa-arrows-spin',    'Diferencia uso real',  'Distingue entre encendido y movimiento/trabajo.'],
            ['fa-stopwatch',      'Mide cada minuto',     'Acumula horas en cada categoría.'],
            ['fa-chart-column',   'Reporta por período',  'Te muestra el total por día, semana o mes.'],
        ],
        'useCases' => [
            ['fa-helmet-safety',  'Productividad operario','Evalúas el rendimiento real de cada trabajador.'],
            ['fa-screwdriver-wrench','Mantenimiento',     'Programas servicios según horas reales, no según calendario.'],
            ['fa-money-bill',     'Facturación a clientes','Cobras por horas reales de uso del equipo.'],
            ['fa-bed',            'Detección de inactividad','Identificas equipos encendidos sin uso.'],
        ],
        'pluses' => [
            'Métricas separadas: motor, trabajo, ralentí',
            'Reportes por operador y por equipo',
            'Alertas de inactividad excesiva',
            'Ideal para empresas constructoras y de logística',
            'Programación de mantenimientos basado en horas',
        ],
    ],

    'antirrobo' => [
        'icon'      => 'fa-shield-halved',
        'title'     => 'Seguridad antirrobo',
        'subtitle'  => 'Protege tu inversión 24 horas al día',
        'lead'      => 'Múltiples capas de seguridad para prevenir, detectar y recuperar tu vehículo en caso de robo.',
        'image'     => 'https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=1200&q=80',
        'long'      => [
            'La función antirrobo combina varias capacidades del sistema GPS Haddad para crear una protección integral. No es una sola función, es un conjunto: localización, alertas de movimiento, apagado remoto, geocercas y monitoreo continuo trabajando juntos.',
            'En caso de robo, el sistema te avisa al instante (movimiento sin autorización), te muestra dónde está el vehículo en tiempo real, te permite inmovilizarlo, y te da la información para que las autoridades actúen rápido.',
            'En República Dominicana, donde el robo de vehículos es un riesgo real, los GPS Haddad han permitido la recuperación de cientos de vehículos. La diferencia entre tener el sistema y no tenerlo puede ser la diferencia entre recuperar tu vehículo o perderlo para siempre.',
        ],
        'howItWorks' => [
            ['fa-shield',         'Protección activa',    'El sistema vigila constantemente movimientos.'],
            ['fa-bell',           'Alerta inmediata',     'Te avisa al instante si hay movimiento sospechoso.'],
            ['fa-location-dot',   'Ubicación en vivo',    'Sigues el vehículo en tiempo real desde tu celular.'],
            ['fa-power-off',      'Inmovilización',       'Bloqueas el motor y el ladrón abandona el vehículo.'],
        ],
        'useCases' => [
            ['fa-house-lock',     'Protección en casa',   'Tu vehículo estacionado en casa, vigilado.'],
            ['fa-building',       'Protección en empresa','Tu flota empresarial bajo control total.'],
            ['fa-handcuffs',      'Recuperación de robo', 'Información precisa para denunciar y recuperar.'],
            ['fa-user-shield',    'Disuasión',           'Pegatinas de "Vehículo monitoreado" disuaden ladrones.'],
        ],
        'pluses' => [
            'Combina localización + alertas + apagado',
            'Pegatinas disuasorias incluidas',
            'Asesoría para denuncias en caso de robo',
            'Historial detallado para autoridades',
            'Probado: cientos de vehículos recuperados',
        ],
    ],
];

// ----- Slug y validación -----
$slug = $_GET['slug'] ?? '';
$slug = preg_replace('/[^a-z0-9-]/', '', strtolower($slug));

if (!isset($benefits[$slug])) {
    http_response_code(404);
    header('Location: /haddadgps/404');
    exit;
}

$b   = $benefits[$slug];
$all = array_keys($benefits);

// SEO
$pageTitle       = $b['title'] . ' | Beneficio GPS - Haddad GPS';
$pageDescription = $b['lead'];

require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO -->
<section class="relative overflow-hidden bg-gradient-to-br from-dark via-dark-soft to-black py-16 lg:py-24">
    <div class="absolute inset-0 hero-grid opacity-30 pointer-events-none"></div>
    <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-primary/15 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">

        <div data-aos="fade-right">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-xs text-white/50 mb-6">
                <a href="./" class="hover:text-primary transition">Inicio</a>
                <i class="fa-solid fa-chevron-right text-[8px]"></i>
                <a href="./#beneficios" class="hover:text-primary transition">Beneficios</a>
                <i class="fa-solid fa-chevron-right text-[8px]"></i>
                <span class="text-primary truncate"><?= $b['title'] ?></span>
            </nav>

            <div class="inline-flex items-center gap-3 mb-6">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-primary-dark text-dark flex items-center justify-center text-3xl shadow-glow">
                    <i class="fa-solid <?= $b['icon'] ?>"></i>
                </div>
                <span class="text-[10px] uppercase tracking-[0.3em] text-primary font-bold">Beneficio Haddad GPS</span>
            </div>

            <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-4 leading-[1.05]"><?= $b['title'] ?></h1>
            <p class="text-primary font-display font-semibold text-lg mb-5"><?= $b['subtitle'] ?></p>
            <p class="text-white/70 text-base lg:text-lg leading-relaxed mb-8"><?= $b['lead'] ?></p>

            <div class="flex flex-wrap gap-3">
                <a href="cotizar" class="px-6 py-3.5 rounded-xl bg-primary text-dark font-bold hover:bg-primary-light transition shadow-glow inline-flex items-center gap-2 group">
                    <i class="fa-solid fa-wrench"></i> Cotizar GPS Haddad
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
                </a>
                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-6 py-3.5 rounded-xl bg-whatsapp text-white font-bold hover:opacity-90 transition inline-flex items-center gap-2">
                    <i class="fa-brands fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>

        <div class="relative" data-aos="fade-left">
            <div class="relative rounded-3xl overflow-hidden aspect-[4/3] border border-white/10 shadow-2xl">
                <img src="<?= $b['image'] ?>" alt="<?= $b['title'] ?>" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/30 to-transparent"></div>

                <div class="absolute bottom-5 left-5 right-5 bg-dark/85 backdrop-blur border border-white/10 rounded-2xl p-4 flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl bg-primary text-dark flex items-center justify-center text-xl shrink-0">
                        <i class="fa-solid <?= $b['icon'] ?>"></i>
                    </div>
                    <div class="min-w-0">
                        <div class="text-[10px] uppercase tracking-wider text-primary font-bold">Incluido en el GPS</div>
                        <div class="font-display font-black text-lg text-white">RD$ 5,490 <span class="text-xs font-medium text-white/55">· sin mensualidad</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ¿QUÉ ES? -->
<section class="py-20 lg:py-28 bg-dark relative">
    <div class="max-w-4xl mx-auto px-4 lg:px-8" data-aos="fade-up">

        <div class="text-center mb-12">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>¿Qué es?<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-3xl sm:text-4xl mb-3 leading-tight">
                Conoce esta función a <span class="text-primary">fondo</span>
            </h2>
        </div>

        <div class="space-y-5 text-white/75 leading-relaxed text-base lg:text-lg">
            <?php foreach ($b['long'] as $p): ?>
                <p><?= $p ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ¿CÓMO FUNCIONA? -->
<section class="py-20 lg:py-28 bg-dark-soft relative overflow-hidden">
    <div class="absolute inset-0 hero-grid opacity-15 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-14" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Cómo funciona<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl leading-[1.05]">
                Paso a paso, <span class="text-primary">simple</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5 relative">
            <div class="hidden lg:block absolute top-12 left-[12.5%] right-[12.5%] h-1 bg-gradient-to-r from-primary via-primary-light to-primary z-0 opacity-25"></div>

            <?php foreach ($b['howItWorks'] as $i => $h): ?>
                <div class="relative z-10 bg-dark border border-white/5 hover:border-primary/40 rounded-3xl p-6 transition group" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                    <span class="absolute top-4 right-5 font-display font-black text-4xl text-primary/10 group-hover:text-primary/30 transition">0<?= $i + 1 ?></span>
                    <div class="relative w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-primary-dark text-dark flex items-center justify-center text-2xl mb-5 shadow-glow group-hover:scale-110 transition">
                        <i class="fa-solid <?= $h[0] ?>"></i>
                    </div>
                    <h3 class="font-display font-bold text-lg mb-2"><?= $h[1] ?></h3>
                    <p class="text-white/55 text-sm leading-relaxed"><?= $h[2] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CASOS DE USO -->
<section class="py-20 lg:py-28 bg-dark">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-14" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Casos de uso<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl leading-[1.05]">
                ¿Para qué te <span class="text-primary">sirve?</span>
            </h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <?php foreach ($b['useCases'] as $i => $u): ?>
                <div class="bg-dark-soft border border-white/5 hover:border-primary/40 rounded-3xl p-6 hover:-translate-y-1 transition" data-aos="zoom-in" data-aos-delay="<?= $i * 70 ?>">
                    <div class="w-14 h-14 rounded-2xl bg-primary/15 text-primary flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid <?= $u[0] ?>"></i>
                    </div>
                    <h3 class="font-display font-bold text-base mb-2 leading-snug"><?= $u[1] ?></h3>
                    <p class="text-white/55 text-sm leading-relaxed"><?= $u[2] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- LO QUE INCLUYE -->
<section class="py-20 lg:py-28 bg-dark-soft relative overflow-hidden">
    <div class="absolute -top-32 right-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-5xl mx-auto px-4 lg:px-8">

        <div class="text-center mb-12" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Características<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl leading-[1.05]">
                Lo que incluye esta <span class="text-primary">función</span>
            </h2>
        </div>

        <div class="bg-gradient-to-br from-dark to-black border border-white/10 rounded-3xl p-7 lg:p-10">
            <ul class="grid sm:grid-cols-2 gap-x-8 gap-y-4">
                <?php foreach ($b['pluses'] as $i => $p): ?>
                    <li class="flex items-start gap-3" data-aos="fade-right" data-aos-delay="<?= $i * 50 ?>">
                        <span class="w-7 h-7 rounded-full bg-gradient-to-br from-primary to-primary-dark text-dark flex items-center justify-center text-xs shrink-0 mt-0.5 shadow-glow">
                            <i class="fa-solid fa-check"></i>
                        </span>
                        <span class="text-white/85 text-sm lg:text-base"><?= $p ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<!-- OTROS BENEFICIOS -->
<section class="py-20 lg:py-28 bg-dark">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
                <span class="w-8 h-px bg-primary"></span>Más beneficios<span class="w-8 h-px bg-primary"></span>
            </span>
            <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl leading-[1.05]">
                Otras <span class="text-primary">funciones</span> incluidas
            </h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php
            $others = array_filter($all, fn($s) => $s !== $slug);
            $others = array_slice($others, 0, 4);
            foreach ($others as $i => $os):
                $o = $benefits[$os];
            ?>
                <a href="beneficio-<?= $os ?>" class="group bg-dark-soft border border-white/5 hover:border-primary/40 rounded-3xl p-6 hover:-translate-y-1 transition" data-aos="fade-up" data-aos-delay="<?= $i * 70 ?>">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center text-xl mb-4 group-hover:bg-primary group-hover:text-dark transition">
                        <i class="fa-solid <?= $o['icon'] ?>"></i>
                    </div>
                    <h3 class="font-display font-bold text-base mb-2 leading-tight"><?= $o['title'] ?></h3>
                    <p class="text-white/55 text-xs leading-relaxed mb-4"><?= $o['subtitle'] ?></p>
                    <span class="inline-flex items-center gap-1 text-xs font-bold text-primary group-hover:text-primary-light transition">
                        Ver detalle <i class="fa-solid fa-arrow-right text-[9px] group-hover:translate-x-1 transition"></i>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="relative py-24 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary to-primary-dark"></div>
    <div class="absolute inset-0 hero-grid opacity-20 pointer-events-none"></div>

    <div class="relative max-w-4xl mx-auto px-4 lg:px-8 text-center text-dark" data-aos="zoom-in">
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-3xl bg-dark text-primary mb-7 shadow-2xl">
            <i class="fa-solid <?= $b['icon'] ?> text-3xl"></i>
        </div>

        <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl mb-5 leading-[1.05]">
            Disfruta de <span class="underline decoration-dark/30 decoration-4 underline-offset-4"><?= $b['title'] ?></span> y muchos beneficios más
        </h2>
        <p class="text-dark/85 text-lg mb-8 max-w-2xl mx-auto">
            Todo esto y mucho más por un pago único de <strong>RD$ 5,490</strong>. Sin mensualidades, sin sorpresas.
        </p>
        <div class="flex flex-wrap justify-center gap-3">
            <a href="cotizar" class="px-7 py-4 rounded-2xl bg-dark text-primary font-bold inline-flex items-center gap-2 shadow-2xl">
                Cotizar mi GPS <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-7 py-4 rounded-2xl bg-whatsapp text-white font-bold inline-flex items-center gap-2 shadow-2xl">
                <i class="fa-brands fa-whatsapp text-xl"></i> WhatsApp
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
