<?php require_once __DIR__ . '/config.php'; ?>

<!-- =================== FOOTER =================== -->
<footer class="relative bg-dark border-t border-white/5 pt-20 pb-8 overflow-hidden">

    <!-- Glow decorativo -->
    <div class="pointer-events-none absolute -top-32 left-1/2 -translate-x-1/2 w-[900px] h-[400px] bg-primary/10 blur-[120px] rounded-full"></div>

    <div class="relative max-w-7xl mx-auto px-4 lg:px-8">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 mb-14">

            <!-- Marca -->
            <div>
                <img src="assets/img/logo.png"
                     alt="Haddad GPS - Multiservicios Haddad S.R.L."
                     class="h-24 w-auto rounded-2xl ring-1 ring-white/10 shadow-2xl mb-5">

                <p class="text-white/55 text-xs leading-relaxed mb-5">
                    Instalación profesional de GPS para vehículos, flotillas y equipos pesados en <?= SITE_COUNTRY ?>.
                    <strong class="text-primary">+6,000 clientes</strong> confían en nosotros.
                </p>
                <div class="flex items-center gap-3">
                    <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-dark-soft border border-white/10 flex items-center justify-center hover:bg-primary hover:text-dark transition" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-dark-soft border border-white/10 flex items-center justify-center hover:bg-whatsapp hover:text-white transition" aria-label="WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="tel:<?= PHONE_LINK ?>" class="w-10 h-10 rounded-full bg-dark-soft border border-white/10 flex items-center justify-center hover:bg-primary hover:text-dark transition" aria-label="Llamar">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                </div>
            </div>

            <!-- Enlaces rápidos -->
            <div>
                <h4 class="font-display font-bold text-base mb-5 text-white">Empresa</h4>
                <ul class="space-y-3 text-sm text-white/60">
                    <li><a href="./"           class="hover:text-primary transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[8px] text-primary"></i>Inicio</a></li>
                    <li><a href="servicios"       class="hover:text-primary transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[8px] text-primary"></i>Servicios</a></li>
                    <li><a href="nosotros"        class="hover:text-primary transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[8px] text-primary"></i>Sobre nosotros</a></li>
                    <li><a href="contacto"        class="hover:text-primary transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[8px] text-primary"></i>Contacto</a></li>
                    <li><a href="cotizar"         class="hover:text-primary transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[8px] text-primary"></i>Cotizar</a></li>
                    <li><a href="./#planes"    class="hover:text-primary transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[8px] text-primary"></i>Precio</a></li>
                    <li><a href="./#galeria"   class="hover:text-primary transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[8px] text-primary"></i>Galería</a></li>
                    <li><a href="./#faq"       class="hover:text-primary transition inline-flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[8px] text-primary"></i>FAQ</a></li>
                </ul>
            </div>

            <!-- Servicios -->
            <div>
                <h4 class="font-display font-bold text-base mb-5 text-white">Servicios</h4>
                <ul class="space-y-3 text-sm text-white/60">
                    <li><i class="fa-solid fa-car text-primary mr-2 w-4"></i>GPS Vehículos personales</li>
                    <li><i class="fa-solid fa-truck text-primary mr-2 w-4"></i>GPS para Camiones</li>
                    <li><i class="fa-solid fa-truck-fast text-primary mr-2 w-4"></i>GPS para Flotillas</li>
                    <li><i class="fa-solid fa-tractor text-primary mr-2 w-4"></i>GPS Equipos Pesados</li>
                    <li><i class="fa-solid fa-shop text-primary mr-2 w-4"></i>GPS Vehículos de Reparto</li>
                    <li><i class="fa-solid fa-power-off text-primary mr-2 w-4"></i>Apagado remoto</li>
                    <li><i class="fa-solid fa-shield-halved text-primary mr-2 w-4"></i>Monitoreo 24/7</li>
                </ul>
            </div>

            <!-- Contacto -->
            <div>
                <h4 class="font-display font-bold text-base mb-5 text-white">Contacto</h4>
                <ul class="space-y-4 text-sm text-white/70 mb-6">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-phone text-primary mt-1"></i>
                        <a href="tel:<?= PHONE_LINK ?>" class="hover:text-primary transition"><?= PHONE_DISPLAY ?></a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-brands fa-whatsapp text-primary mt-1"></i>
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="hover:text-primary transition"><?= PHONE_DISPLAY ?></a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-brands fa-instagram text-primary mt-1"></i>
                        <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener" class="hover:text-primary transition">@<?= INSTAGRAM_USER ?></a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-primary mt-1"></i>
                        <span><?= SITE_COUNTRY ?></span>
                    </li>
                </ul>
                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-whatsapp text-white font-bold text-sm hover:opacity-90 transition w-full justify-center">
                    <i class="fa-brands fa-whatsapp"></i> Escríbenos por WhatsApp
                </a>
            </div>
        </div>

        <div class="pt-8 border-t border-white/5 flex flex-col lg:flex-row items-center justify-between gap-4 text-xs text-white/50">
            <p class="text-center lg:text-left">&copy; <?= CURRENT_YEAR ?> <?= SITE_NAME ?> / <?= SITE_LEGAL_NAME ?>. Todos los derechos reservados.</p>
            <div class="flex flex-wrap items-center justify-center gap-x-4 gap-y-2">
                <a href="privacidad" class="hover:text-primary transition">Política de Privacidad</a>
                <span class="opacity-30">|</span>
                <a href="terminos" class="hover:text-primary transition">Términos y Condiciones</a>
                <span class="opacity-30">|</span>
                <span>Desarrollado por <span class="text-primary font-semibold">Kyros Solutions</span></span>
            </div>
        </div>
    </div>
</footer>

<!-- Botones flotantes -->
<a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" id="float-whatsapp"
   class="fixed bottom-5 right-5 z-40 group flex items-center gap-3"
   aria-label="Hablar por WhatsApp">
    <span class="hidden md:block opacity-0 group-hover:opacity-100 transition bg-dark text-white text-xs font-medium py-2 px-3 rounded-lg shadow-lg whitespace-nowrap">Hablar por WhatsApp</span>
    <span class="w-14 h-14 rounded-full bg-whatsapp text-white flex items-center justify-center shadow-2xl hover:scale-110 transition relative">
        <i class="fa-brands fa-whatsapp text-2xl"></i>
        <span class="absolute inset-0 rounded-full bg-whatsapp animate-ping opacity-30"></span>
    </span>
</a>

<button id="back-to-top" class="fixed bottom-24 right-5 z-40 w-12 h-12 rounded-full bg-primary text-dark shadow-glow hidden items-center justify-center hover:bg-primary-light transition" aria-label="Volver arriba">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({ duration: 800, easing: 'ease-out', once: true, offset: 60 });</script>

<!-- JS propio -->
<script src="assets/js/main.js"></script>
</body>
</html>
