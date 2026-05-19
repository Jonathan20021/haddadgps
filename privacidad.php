<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle       = 'Política de Privacidad | Haddad GPS';
$pageDescription = 'Política de privacidad y protección de datos personales de Haddad GPS / Multiservicios Haddad S.R.L. conforme a la legislación dominicana.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="relative bg-gradient-to-br from-dark via-dark-soft to-black py-14 lg:py-20 overflow-hidden">
    <div class="absolute inset-0 hero-grid opacity-25 pointer-events-none"></div>
    <div class="absolute -top-32 right-0 w-[400px] h-[400px] bg-primary/12 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative max-w-4xl mx-auto px-4 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-[0.3em] mb-4">
            <span class="w-8 h-px bg-primary"></span>Legal<span class="w-8 h-px bg-primary"></span>
        </span>
        <h1 class="font-display font-black text-4xl sm:text-5xl mb-4 leading-tight">Política de Privacidad</h1>
        <p class="text-white/55 text-sm">Última actualización: <?= date('d/m/Y') ?></p>
    </div>
</section>

<section class="py-16 lg:py-20 bg-dark">
    <article class="max-w-4xl mx-auto px-4 lg:px-8 prose-haddad">

        <p class="lead">En <strong>Multiservicios Haddad S.R.L.</strong> (en adelante "Haddad GPS", "nosotros") respetamos tu privacidad y nos comprometemos a proteger los datos personales que nos confías. Esta política explica qué información recopilamos, cómo la usamos y cuáles son tus derechos como cliente o visitante.</p>

        <h2>1. Datos que recopilamos</h2>
        <p>Podemos recopilar los siguientes datos personales cuando interactúas con nosotros:</p>
        <ul>
            <li>Nombre completo y cédula de identidad (solo si lo solicitas para facturación).</li>
            <li>Número de teléfono y/o WhatsApp.</li>
            <li>Correo electrónico.</li>
            <li>Datos del vehículo a instalar (marca, modelo, año, color, placa).</li>
            <li>Información de ubicación generada por el dispositivo GPS instalado.</li>
            <li>Datos de uso del sitio web (cookies, IP, navegador).</li>
        </ul>

        <h2>2. Cómo usamos tu información</h2>
        <p>Utilizamos tus datos exclusivamente para:</p>
        <ul>
            <li>Prestar el servicio de instalación y monitoreo GPS contratado.</li>
            <li>Contactarte para coordinar citas, recordatorios o soporte técnico.</li>
            <li>Emitir facturas y documentos legales.</li>
            <li>Enviarte información relevante sobre el servicio (solo con tu consentimiento).</li>
            <li>Mejorar la experiencia en nuestra página web.</li>
        </ul>

        <h2>3. Datos de ubicación</h2>
        <p>Los datos de ubicación generados por tu dispositivo GPS son propiedad del cliente. Haddad GPS los procesa únicamente para permitir el funcionamiento del servicio de monitoreo y no los compartirá con terceros salvo:</p>
        <ul>
            <li>Cuando el cliente lo autorice expresamente.</li>
            <li>Por requerimiento de una autoridad judicial competente.</li>
            <li>Para responder denuncias formales de robo del vehículo.</li>
        </ul>

        <h2>4. Compartir información con terceros</h2>
        <p>No vendemos, alquilamos ni cedemos tus datos personales a terceros con fines comerciales. Podríamos compartir información estrictamente necesaria con:</p>
        <ul>
            <li>Proveedores de la plataforma de monitoreo GPS.</li>
            <li>Empresas de mensajería para entregas de equipos.</li>
            <li>Autoridades cuando exista obligación legal.</li>
        </ul>

        <h2>5. Seguridad</h2>
        <p>Aplicamos medidas razonables de seguridad informática y física para proteger tus datos. No obstante, ningún sistema es 100% infalible, por lo que te recomendamos no compartir tus credenciales de acceso a la plataforma con personas no autorizadas.</p>

        <h2>6. Tus derechos</h2>
        <p>Como titular de los datos, tienes derecho a:</p>
        <ul>
            <li>Acceder a la información que tenemos sobre ti.</li>
            <li>Solicitar correcciones de datos incorrectos.</li>
            <li>Solicitar la eliminación de tus datos cuando termine la relación comercial.</li>
            <li>Retirar tu consentimiento para comunicaciones promocionales.</li>
        </ul>
        <p>Para ejercer estos derechos, escríbenos por WhatsApp al <strong><?= PHONE_DISPLAY ?></strong>.</p>

        <h2>7. Cookies</h2>
        <p>Nuestro sitio web utiliza cookies técnicas necesarias para su funcionamiento y cookies de análisis para entender cómo se usa el sitio. Puedes desactivarlas desde tu navegador, pero algunas funcionalidades podrían no operar correctamente.</p>

        <h2>8. Cambios a esta política</h2>
        <p>Podemos actualizar esta política periódicamente. La fecha de la última actualización aparece al inicio del documento. Te recomendamos revisarla con frecuencia.</p>

        <h2>9. Contacto</h2>
        <p>Si tienes cualquier pregunta sobre esta política o el manejo de tus datos, escríbenos:</p>
        <ul>
            <li><strong>WhatsApp:</strong> <?= PHONE_DISPLAY ?></li>
            <li><strong>Instagram:</strong> @<?= INSTAGRAM_USER ?></li>
        </ul>

        <div class="not-prose mt-12 p-6 rounded-2xl bg-primary/10 border border-primary/30 text-center">
            <p class="text-sm text-white/70 mb-4">¿Tienes preguntas sobre el manejo de tus datos?</p>
            <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-whatsapp text-white font-bold">
                <i class="fa-brands fa-whatsapp"></i> Escribirnos
            </a>
        </div>
    </article>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
