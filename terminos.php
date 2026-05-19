<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle       = 'Términos y Condiciones | Haddad GPS';
$pageDescription = 'Términos y condiciones del servicio de Haddad GPS / Multiservicios Haddad S.R.L. para la instalación de dispositivos GPS en República Dominicana.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="relative bg-gradient-to-br from-dark via-dark-soft to-black py-14 lg:py-20 overflow-hidden">
    <div class="absolute inset-0 hero-grid opacity-25 pointer-events-none"></div>
    <div class="absolute -top-32 right-0 w-[400px] h-[400px] bg-primary/12 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative max-w-4xl mx-auto px-4 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
            <span class="w-8 h-px bg-primary"></span>Legal<span class="w-8 h-px bg-primary"></span>
        </span>
        <h1 class="font-display font-black text-4xl sm:text-5xl mb-4 leading-tight">Términos y Condiciones</h1>
        <p class="text-white/55 text-sm">Última actualización: <?= date('d/m/Y') ?></p>
    </div>
</section>

<section class="py-16 lg:py-20 bg-dark">
    <article class="max-w-4xl mx-auto px-4 lg:px-8 prose-haddad">

        <p class="lead">Al contratar los servicios de <strong>Multiservicios Haddad S.R.L.</strong> ("Haddad GPS"), aceptas estos términos y condiciones que regulan la relación comercial entre la empresa y el cliente.</p>

        <h2>1. Objeto del servicio</h2>
        <p>Haddad GPS ofrece el servicio de venta e instalación profesional de dispositivos GPS para vehículos, así como el acceso a una plataforma digital de monitoreo en tiempo real.</p>

        <h2>2. Precio y forma de pago</h2>
        <ul>
            <li>El precio del servicio es <strong>RD$ 5,490</strong> en un único pago.</li>
            <li>El precio incluye: dispositivo GPS, instalación profesional, configuración y acceso a la plataforma de monitoreo.</li>
            <li><strong>No existen mensualidades, cuotas recurrentes ni renovaciones obligatorias.</strong></li>
            <li>El pago se realiza al momento de la instalación, salvo acuerdo distinto por escrito.</li>
            <li>Para flotillas o instalaciones múltiples se pueden aplicar descuentos por volumen previamente acordados.</li>
        </ul>

        <h2>3. Instalación</h2>
        <ul>
            <li>La instalación se realiza por personal técnico certificado de Haddad GPS.</li>
            <li>La cita se coordina previamente con el cliente.</li>
            <li>El cliente debe presentar el vehículo en condiciones que permitan la instalación segura.</li>
            <li>Haddad GPS se reserva el derecho de reprogramar la instalación si las condiciones técnicas no son adecuadas.</li>
        </ul>

        <h2>4. Garantía</h2>
        <ul>
            <li>El dispositivo GPS cuenta con garantía contra defectos de fabricación.</li>
            <li>La garantía no cubre daños por mal uso, accidentes, manipulación por terceros, robo del dispositivo, sumersión en agua o daños por instalaciones realizadas por personas ajenas a Haddad GPS.</li>
            <li>Para hacer válida la garantía, el cliente debe contactar a Haddad GPS por WhatsApp y presentar el equipo en nuestras instalaciones o coordinar revisión a domicilio.</li>
        </ul>

        <h2>5. Plataforma de monitoreo</h2>
        <ul>
            <li>El cliente recibe credenciales de acceso personalizadas y es responsable de mantenerlas en confidencialidad.</li>
            <li>Haddad GPS no se responsabiliza por accesos no autorizados causados por la divulgación de credenciales por parte del cliente.</li>
            <li>El servicio puede sufrir interrupciones temporales por mantenimiento o por causas ajenas (cortes de telefonía móvil, señal GPS, energía).</li>
        </ul>

        <h2>6. Limitación de responsabilidad</h2>
        <p>El sistema GPS es una herramienta de localización y prevención, pero no garantiza al 100% la recuperación del vehículo en caso de robo. Haddad GPS no se hace responsable por:</p>
        <ul>
            <li>Robos, accidentes o daños al vehículo monitoreado.</li>
            <li>Pérdidas económicas derivadas de fallas técnicas puntuales del sistema.</li>
            <li>Interrupciones del servicio por causas de fuerza mayor (huracanes, apagones generales, fallas de proveedores de telefonía).</li>
        </ul>

        <h2>7. Obligaciones del cliente</h2>
        <ul>
            <li>Suministrar información veraz al momento de la contratación.</li>
            <li>No manipular el dispositivo GPS instalado.</li>
            <li>Comunicar inmediatamente cualquier anomalía a Haddad GPS.</li>
            <li>Reportar el robo o sospecha de robo a las autoridades competentes antes o al mismo tiempo que a Haddad GPS.</li>
        </ul>

        <h2>8. Privacidad</h2>
        <p>El tratamiento de los datos personales del cliente se rige por nuestra <a href="privacidad" class="text-primary hover:underline">Política de Privacidad</a>, que forma parte integral de estos términos.</p>

        <h2>9. Modificaciones</h2>
        <p>Haddad GPS puede actualizar estos términos en cualquier momento. Los cambios entran en vigor desde su publicación en este sitio. El uso continuo del servicio implica aceptación de los nuevos términos.</p>

        <h2>10. Jurisdicción</h2>
        <p>Estos términos se rigen por las leyes de la República Dominicana. Cualquier controversia será resuelta por los tribunales competentes del Distrito Nacional, salvo acuerdo distinto entre las partes.</p>

        <h2>11. Contacto</h2>
        <ul>
            <li><strong>Razón social:</strong> Multiservicios Haddad S.R.L.</li>
            <li><strong>WhatsApp / Teléfono:</strong> <?= PHONE_DISPLAY ?></li>
            <li><strong>Instagram:</strong> @<?= INSTAGRAM_USER ?></li>
        </ul>

        <div class="not-prose mt-12 p-6 rounded-2xl bg-primary/10 border border-primary/30 text-center">
            <p class="text-sm text-white/70 mb-4">¿Tienes preguntas sobre los términos?</p>
            <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-whatsapp text-white font-bold">
                <i class="fa-brands fa-whatsapp"></i> Escribirnos
            </a>
        </div>
    </article>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
