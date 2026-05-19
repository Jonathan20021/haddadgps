<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle       = 'Gracias por contactarnos | Haddad GPS';
$pageDescription = 'Hemos recibido tu solicitud. Pronto nos comunicaremos contigo desde Haddad GPS.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="relative min-h-[80vh] flex items-center justify-center py-20 bg-gradient-to-br from-dark via-dark-soft to-black overflow-hidden">

    <div class="absolute inset-0 hero-grid opacity-20 pointer-events-none"></div>
    <div class="absolute -top-32 right-0 w-[500px] h-[500px] bg-primary/15 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute -bottom-32 left-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-2xl mx-auto px-4 lg:px-8 text-center" data-aos="zoom-in">

        <div class="relative inline-flex items-center justify-center mb-8">
            <div class="absolute w-32 h-32 rounded-full bg-primary/30 animate-ping"></div>
            <div class="relative w-28 h-28 rounded-full bg-primary text-dark flex items-center justify-center shadow-glow">
                <i class="fa-solid fa-check text-5xl"></i>
            </div>
        </div>

        <h1 class="font-display font-black text-4xl sm:text-5xl mb-5 leading-tight">
            ¡Gracias por <span class="text-primary">contactarnos</span>!
        </h1>

        <p class="text-white/70 text-lg mb-3">
            Hemos recibido tu solicitud y pronto nos comunicaremos contigo.
        </p>
        <p class="text-white/50 mb-10">
            Nuestro equipo te enviará una propuesta personalizada en el menor tiempo posible.
        </p>

        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-7 py-4 rounded-full bg-whatsapp text-white font-bold hover:opacity-90 transition inline-flex items-center justify-center gap-2">
                <i class="fa-brands fa-whatsapp text-lg"></i> Continuar por WhatsApp
            </a>
            <a href="./" class="px-7 py-4 rounded-full bg-primary text-dark font-bold hover:bg-primary-light transition inline-flex items-center justify-center gap-2">
                <i class="fa-solid fa-house"></i> Volver al inicio
            </a>
        </div>

        <div class="mt-14 pt-8 border-t border-white/10 grid grid-cols-3 gap-4 text-xs text-white/60">
            <div>
                <i class="fa-solid fa-shield-halved text-primary text-2xl mb-2"></i>
                <div class="font-bold">Servicio confiable</div>
            </div>
            <div>
                <i class="fa-solid fa-clock text-primary text-2xl mb-2"></i>
                <div class="font-bold">Monitoreo 24/7</div>
            </div>
            <div>
                <i class="fa-solid fa-headset text-primary text-2xl mb-2"></i>
                <div class="font-bold">Atención personalizada</div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
