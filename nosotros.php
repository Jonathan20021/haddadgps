<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle       = 'Sobre Nosotros | Haddad GPS - Multiservicios Haddad S.R.L.';
$pageDescription = 'Conoce a Haddad GPS / Multiservicios Haddad S.R.L., empresa dominicana con más de 6,000 clientes en la instalación de sistemas GPS para vehículos, flotillas y equipos pesados.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO -->
<section class="relative overflow-hidden bg-gradient-to-br from-dark via-dark-soft to-black py-16 lg:py-24">
    <div class="absolute inset-0 hero-grid opacity-30 pointer-events-none"></div>
    <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-primary/15 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4" data-aos="fade-down">
            <span class="w-8 h-px bg-primary"></span>Nosotros<span class="w-8 h-px bg-primary"></span>
        </span>
        <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]" data-aos="fade-up">
            La empresa que protege a <span class="text-primary">+6,000 vehículos</span> en RD
        </h1>
        <p class="text-white/65 text-base sm:text-lg max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Somos <strong class="text-white">Multiservicios Haddad S.R.L.</strong>, empresa dominicana especializada en sistemas GPS para todo tipo de vehículos. Llevamos años protegiendo la inversión de nuestros clientes con tecnología confiable y atención humana.
        </p>
    </div>
</section>

<!-- HISTORIA / SLOGAN -->
<section class="py-20 lg:py-28 bg-dark relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <div data-aos="fade-right">
            <span class="inline-block text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">Nuestra historia</span>
            <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl mb-6 leading-[1.05]">
                Asegura tu inversión <span class="text-primary">con nosotros</span>
            </h2>
            <p class="text-white/70 leading-relaxed mb-5">
                Haddad GPS nació con una misión clara: ofrecer a las familias y empresas dominicanas una solución GPS profesional, accesible y sin las trampas de los pagos mensuales que ofrecen otras empresas.
            </p>
            <p class="text-white/70 leading-relaxed mb-5">
                Hoy somos parte de <strong class="text-white">Multiservicios Haddad S.R.L.</strong>, una empresa consolidada con presencia en toda República Dominicana. Hemos protegido vehículos personales, flotillas empresariales completas y equipos pesados de grandes constructoras.
            </p>
            <p class="text-white/70 leading-relaxed">
                Nuestro lema lo resume todo: <em class="text-primary font-display font-bold">"Asegura tu inversión con nosotros"</em>. Porque sabemos que tu vehículo, tu flota o tu maquinaria no son solo un gasto: son herramientas de trabajo y patrimonio que merecen protección real.
            </p>
        </div>

        <div class="relative" data-aos="fade-left">
            <div class="grid grid-cols-2 gap-4">
                <div class="aspect-square rounded-3xl overflow-hidden bg-dark-soft border border-white/10">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=600&q=80" alt="Equipo Haddad" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square rounded-3xl overflow-hidden bg-dark-soft border border-white/10 mt-8">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=600&q=80" alt="Instalaciones" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square rounded-3xl overflow-hidden bg-dark-soft border border-white/10 -mt-4">
                    <img src="https://images.unsplash.com/photo-1486006920555-c77dcf18193c?auto=format&fit=crop&w=600&q=80" alt="Flota" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square rounded-3xl overflow-hidden bg-dark-soft border border-white/10 mt-4">
                    <img src="https://images.unsplash.com/photo-1545987796-200677ee1011?auto=format&fit=crop&w=600&q=80" alt="Plataforma" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="hidden md:flex absolute -bottom-6 -left-6 bg-primary text-dark rounded-2xl p-5 shadow-glow items-center gap-3">
                <i class="fa-solid fa-shield-halved text-3xl"></i>
                <div>
                    <div class="font-black text-2xl leading-none">+6,000</div>
                    <div class="text-xs font-semibold">Clientes</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MISIÓN, VISIÓN, VALORES -->
<section class="py-20 lg:py-28 bg-dark-soft relative">
    <div class="absolute inset-0 hero-grid opacity-15 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-14" data-aos="fade-up">
            <span class="inline-block text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">Pilares</span>
            <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl leading-[1.05]">
                Lo que nos <span class="text-primary">define</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-5">
            <?php
            $pillars = [
                ['fa-bullseye',     'Misión',  'Brindar soluciones GPS profesionales y accesibles que protejan la inversión de nuestros clientes, ofreciendo tecnología confiable, atención humana y un pago único sin sorpresas mensuales.'],
                ['fa-eye',          'Visión',  'Ser la empresa de referencia en monitoreo GPS vehicular en República Dominicana, reconocida por la calidad de la instalación, el servicio postventa y la honestidad en nuestros precios.'],
                ['fa-heart',        'Valores', 'Honestidad en cada cotización. Profesionalismo en cada instalación. Compromiso con cada cliente. Innovación constante. Respeto y calidez en la atención.'],
            ];
            foreach ($pillars as $i => $p): ?>
                <div class="bg-dark border border-white/5 hover:border-primary/40 rounded-3xl p-7 transition" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-primary-dark text-dark flex items-center justify-center text-2xl mb-5 shadow-glow">
                        <i class="fa-solid <?= $p[0] ?>"></i>
                    </div>
                    <h3 class="font-display font-black text-2xl mb-3"><?= $p[1] ?></h3>
                    <p class="text-white/65 text-sm leading-relaxed"><?= $p[2] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- POR QUÉ ELEGIRNOS -->
<section class="py-20 lg:py-28 bg-dark">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-14" data-aos="fade-up">
            <span class="inline-block text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">Diferenciadores</span>
            <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl leading-[1.05]">
                ¿Por qué somos <span class="text-primary">diferentes?</span>
            </h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php
            $diff = [
                ['fa-bolt-lightning', 'Pago único',          'RD$ 5,490, sin mensualidades. Punto.'],
                ['fa-users',          '+6,000 clientes',     'Confianza ganada año tras año.'],
                ['fa-clock',          'Monitoreo 24/7',      'Todos los días, todas las horas.'],
                ['fa-user-shield',    'Técnicos certificados','Instalaciones limpias y ocultas.'],
                ['fa-comment-dots',   'Soporte por WhatsApp','Respuestas rápidas y humanas.'],
                ['fa-flag',           'Empresa dominicana',  'Aquí estamos, aquí respondemos.'],
                ['fa-shield-halved',  'Garantía incluida',   'Respondemos por nuestro trabajo.'],
                ['fa-mobile-screen',  'Plataforma móvil',    'Control desde tu celular.'],
            ];
            foreach ($diff as $i => $d): ?>
                <div class="bg-dark-soft border border-white/5 hover:border-primary/40 rounded-2xl p-5 transition" data-aos="zoom-in" data-aos-delay="<?= $i * 50 ?>">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid <?= $d[0] ?>"></i>
                    </div>
                    <h3 class="font-bold text-sm mb-1"><?= $d[1] ?></h3>
                    <p class="text-white/55 text-xs"><?= $d[2] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="relative py-20 lg:py-28 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary to-primary-dark"></div>
    <div class="absolute inset-0 hero-grid opacity-20 pointer-events-none"></div>

    <div class="relative max-w-4xl mx-auto px-4 lg:px-8 text-center text-dark" data-aos="zoom-in">
        <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl mb-5 leading-[1.05]">
            Únete a los +6,000 clientes que ya confían en Haddad GPS
        </h2>
        <p class="text-dark/80 text-lg mb-8">
            Asegura tu inversión hoy con un pago único de RD$ 5,490. Sin sorpresas, sin mensualidades.
        </p>
        <div class="flex flex-wrap justify-center gap-3">
            <a href="cotizar" class="px-7 py-4 rounded-2xl bg-dark text-primary font-bold inline-flex items-center gap-2 shadow-2xl">
                Cotizar mi GPS <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-7 py-4 rounded-2xl bg-whatsapp text-white font-bold inline-flex items-center gap-2 shadow-2xl">
                <i class="fa-brands fa-whatsapp text-xl"></i> Hablar con un asesor
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
