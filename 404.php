<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$pageTitle       = 'Página no encontrada | Haddad GPS';
$pageDescription = 'La página que buscas no existe. Vuelve al inicio de Haddad GPS para conocer nuestros servicios de instalación de GPS en República Dominicana.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="relative min-h-[80vh] flex items-center justify-center py-20 bg-gradient-to-br from-dark via-dark-soft to-black overflow-hidden">

    <div class="absolute inset-0 hero-grid opacity-25 pointer-events-none"></div>
    <div class="absolute -top-32 right-0 w-[500px] h-[500px] bg-primary/15 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute -bottom-32 left-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-3xl mx-auto px-4 lg:px-8 text-center" data-aos="zoom-in">

        <!-- Pin perdido -->
        <div class="relative inline-flex items-center justify-center mb-8">
            <div class="absolute w-40 h-40 rounded-full bg-primary/15 animate-ping"></div>
            <div class="relative w-32 h-32 rounded-full bg-gradient-to-br from-primary to-primary-dark text-dark flex items-center justify-center shadow-glow-lg">
                <i class="fa-solid fa-location-dot text-6xl"></i>
            </div>
        </div>

        <div class="font-display font-black text-7xl sm:text-8xl lg:text-9xl text-primary leading-none mb-3">404</div>
        <h1 class="font-display font-black text-3xl sm:text-4xl mb-4 leading-tight">
            Esta ruta se salió del <span class="text-primary">mapa</span>
        </h1>
        <p class="text-white/65 text-base sm:text-lg mb-10 max-w-lg mx-auto">
            La página que buscas no existe o fue movida. Pero tranquilo, nosotros nunca perdemos la ubicación de un vehículo Haddad.
        </p>

        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <a href="./" class="px-7 py-4 rounded-2xl bg-primary text-dark font-bold hover:bg-primary-light transition shadow-glow inline-flex items-center gap-2">
                <i class="fa-solid fa-house"></i> Volver al inicio
            </a>
            <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-7 py-4 rounded-2xl bg-whatsapp text-white font-bold hover:opacity-90 transition inline-flex items-center gap-2">
                <i class="fa-brands fa-whatsapp text-xl"></i> WhatsApp
            </a>
        </div>

        <!-- Enlaces útiles -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-2xl mx-auto pt-10 border-t border-white/10">
            <?php
            $links = [
                ['fa-circle-info',  'Servicios',  'servicios.php'],
                ['fa-tag',          'Precio',     'index.php#planes'],
                ['fa-images',       'Galería',    'index.php#galeria'],
                ['fa-envelope',     'Contacto',   'contacto.php'],
            ];
            foreach ($links as $l): ?>
                <a href="<?= $l[2] ?>" class="bg-white/[0.04] hover:bg-primary/10 border border-white/5 hover:border-primary/30 rounded-xl p-4 transition group">
                    <i class="fa-solid <?= $l[0] ?> text-primary text-xl mb-2"></i>
                    <div class="font-bold text-sm text-white group-hover:text-primary transition"><?= $l[1] ?></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
