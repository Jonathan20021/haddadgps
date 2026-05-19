<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle       = 'Contacto | Haddad GPS - Atención al cliente RD';
$pageDescription = 'Contacta a Haddad GPS por WhatsApp, llamada o Instagram. Atendemos en toda República Dominicana. Servicio profesional con +6,000 clientes activos.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO -->
<section class="relative overflow-hidden bg-gradient-to-br from-dark via-dark-soft to-black py-16 lg:py-24">
    <div class="absolute inset-0 hero-grid opacity-30 pointer-events-none"></div>
    <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-primary/15 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4" data-aos="fade-down">
            <span class="w-8 h-px bg-primary"></span>Contacto<span class="w-8 h-px bg-primary"></span>
        </span>
        <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl mb-5 leading-[1.05]" data-aos="fade-up">
            Estamos para <span class="text-primary">ayudarte</span>
        </h1>
        <p class="text-white/65 text-base sm:text-lg max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            ¿Tienes preguntas sobre nuestro servicio GPS? Escríbenos por el canal que prefieras, atendemos rápido y sin compromiso.
        </p>
    </div>
</section>

<!-- CONTACTO PRINCIPAL -->
<section class="py-20 lg:py-28 bg-dark relative">
    <div class="max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-3 gap-5">

        <!-- WhatsApp -->
        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="group bg-gradient-to-br from-whatsapp to-green-700 rounded-3xl p-8 hover:-translate-y-1 transition shadow-2xl" data-aos="fade-up">
            <div class="w-16 h-16 rounded-2xl bg-white/20 text-white flex items-center justify-center text-3xl mb-5">
                <i class="fa-brands fa-whatsapp"></i>
            </div>
            <h3 class="font-display font-black text-2xl text-white mb-2">WhatsApp</h3>
            <p class="text-white/80 text-sm mb-5">El canal más rápido. Respuestas en minutos durante horario laboral.</p>
            <div class="text-white font-display font-bold text-lg mb-1"><?= PHONE_DISPLAY ?></div>
            <div class="inline-flex items-center gap-2 text-white/90 text-sm font-bold mt-3">
                Escribir ahora <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
            </div>
        </a>

        <!-- Llamada -->
        <a href="tel:<?= PHONE_LINK ?>" class="group bg-gradient-to-br from-primary to-primary-dark text-dark rounded-3xl p-8 hover:-translate-y-1 transition shadow-2xl" data-aos="fade-up" data-aos-delay="100">
            <div class="w-16 h-16 rounded-2xl bg-dark/15 text-dark flex items-center justify-center text-3xl mb-5">
                <i class="fa-solid fa-phone-volume"></i>
            </div>
            <h3 class="font-display font-black text-2xl mb-2">Llámanos</h3>
            <p class="text-dark/75 text-sm mb-5">Hablamos directamente. Te asesoramos en lo que necesites.</p>
            <div class="font-display font-bold text-lg mb-1"><?= PHONE_DISPLAY ?></div>
            <div class="inline-flex items-center gap-2 text-dark text-sm font-bold mt-3">
                Llamar ahora <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
            </div>
        </a>

        <!-- Instagram -->
        <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener" class="group bg-gradient-to-br from-purple-600 via-pink-600 to-orange-500 rounded-3xl p-8 hover:-translate-y-1 transition shadow-2xl" data-aos="fade-up" data-aos-delay="200">
            <div class="w-16 h-16 rounded-2xl bg-white/20 text-white flex items-center justify-center text-3xl mb-5">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <h3 class="font-display font-black text-2xl text-white mb-2">Instagram</h3>
            <p class="text-white/85 text-sm mb-5">Síguenos para ver instalaciones, novedades y promociones.</p>
            <div class="text-white font-display font-bold text-lg mb-1">@<?= INSTAGRAM_USER ?></div>
            <div class="inline-flex items-center gap-2 text-white text-sm font-bold mt-3">
                Ir al perfil <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
            </div>
        </a>
    </div>
</section>

<!-- INFO + HORARIO -->
<section class="py-20 lg:py-28 bg-dark-soft relative">
    <div class="absolute inset-0 hero-grid opacity-15 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8 grid lg:grid-cols-2 gap-10 lg:gap-14 items-start">

        <div data-aos="fade-right">
            <span class="inline-block text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">Información</span>
            <h2 class="font-display font-black text-3xl sm:text-4xl mb-6 leading-[1.05]">
                Datos de la <span class="text-primary">empresa</span>
            </h2>

            <div class="space-y-4">
                <div class="flex items-start gap-4 bg-dark border border-white/5 rounded-2xl p-5">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <div class="min-w-0">
                        <div class="text-[10px] uppercase tracking-wider text-white/40 font-bold mb-1">Razón social</div>
                        <div class="font-bold text-white">Multiservicios Haddad S.R.L.</div>
                        <div class="text-sm text-white/55 mt-1">Comercializa: Haddad GPS</div>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-dark border border-white/5 rounded-2xl p-5">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="min-w-0">
                        <div class="text-[10px] uppercase tracking-wider text-white/40 font-bold mb-1">Cobertura</div>
                        <div class="font-bold text-white">República Dominicana</div>
                        <div class="text-sm text-white/55 mt-1">Servicio a domicilio en todo el territorio</div>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-dark border border-white/5 rounded-2xl p-5">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div class="min-w-0">
                        <div class="text-[10px] uppercase tracking-wider text-white/40 font-bold mb-1">Soporte técnico</div>
                        <div class="font-bold text-white">Atención por WhatsApp</div>
                        <div class="text-sm text-white/55 mt-1">Resolución rápida y humana</div>
                    </div>
                </div>

                <div class="flex items-start gap-4 bg-dark border border-white/5 rounded-2xl p-5">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="min-w-0">
                        <div class="text-[10px] uppercase tracking-wider text-white/40 font-bold mb-1">Compromiso</div>
                        <div class="font-bold text-white">"<?= SITE_SLOGAN ?>"</div>
                        <div class="text-sm text-white/55 mt-1">+6,000 clientes activos en RD</div>
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="fade-left">
            <span class="inline-block text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">Horario</span>
            <h2 class="font-display font-black text-3xl sm:text-4xl mb-6 leading-[1.05]">
                Cuándo nos <span class="text-primary">encuentras</span>
            </h2>

            <div class="bg-gradient-to-br from-dark to-black border border-white/10 rounded-3xl p-7">

                <?php
                $hours = [
                    ['Lunes',     '8:00 AM - 6:00 PM', true],
                    ['Martes',    '8:00 AM - 6:00 PM', true],
                    ['Miércoles', '8:00 AM - 6:00 PM', true],
                    ['Jueves',    '8:00 AM - 6:00 PM', true],
                    ['Viernes',   '8:00 AM - 6:00 PM', true],
                    ['Sábado',    '8:00 AM - 2:00 PM', true],
                    ['Domingo',   'Cerrado',           false],
                ];
                $today = (int)date('N'); // 1 = Mon, 7 = Sun
                foreach ($hours as $i => $h):
                    $isToday = ($i + 1) === $today;
                ?>
                    <div class="flex items-center justify-between py-3 <?= $i < 6 ? 'border-b border-white/5' : '' ?> <?= $isToday ? 'text-primary font-bold' : ($h[2] ? 'text-white' : 'text-white/40') ?>">
                        <span class="flex items-center gap-2 text-sm">
                            <?php if ($isToday): ?><span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span><?php endif; ?>
                            <?= $h[0] ?> <?= $isToday ? '<span class="text-[10px] uppercase ml-1 opacity-70">Hoy</span>' : '' ?>
                        </span>
                        <span class="text-sm"><?= $h[1] ?></span>
                    </div>
                <?php endforeach; ?>

                <div class="mt-5 pt-5 border-t border-primary/30 bg-primary/5 -mx-7 -mb-7 px-7 pb-7 rounded-b-3xl">
                    <div class="flex items-center gap-3 text-primary">
                        <i class="fa-solid fa-bell text-xl"></i>
                        <div>
                            <div class="font-bold text-sm">Monitoreo 24/7</div>
                            <div class="text-xs text-white/70">El sistema GPS está activo todos los días, todas las horas.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 grid grid-cols-2 gap-3">
                <a href="cotizar" class="text-center py-4 rounded-2xl bg-primary text-dark font-bold shadow-glow">
                    <i class="fa-solid fa-wrench mr-1"></i> Cotizar
                </a>
                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="text-center py-4 rounded-2xl bg-whatsapp text-white font-bold shadow-lg">
                    <i class="fa-brands fa-whatsapp mr-1"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="relative py-20 lg:py-28 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary to-primary-dark"></div>
    <div class="absolute inset-0 hero-grid opacity-20 pointer-events-none"></div>

    <div class="relative max-w-4xl mx-auto px-4 lg:px-8 text-center text-dark" data-aos="zoom-in">
        <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl mb-5 leading-[1.05]">
            ¿Listo para asegurar tu inversión?
        </h2>
        <p class="text-dark/80 text-lg mb-8">
            RD$ 5,490 — pago único, sin mensualidades, instalación incluida.
        </p>
        <div class="flex flex-wrap justify-center gap-3">
            <a href="cotizar" class="px-7 py-4 rounded-2xl bg-dark text-primary font-bold inline-flex items-center gap-2 shadow-2xl">
                Cotizar ahora <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
