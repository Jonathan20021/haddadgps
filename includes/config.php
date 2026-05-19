<?php
/**
 * ============================================
 *  Haddad GPS / Multiservicios Haddad
 *  Archivo de configuración global
 * ============================================
 *
 *  Aquí se centralizan los datos de contacto,
 *  redes sociales, correo destino y constantes
 *  utilizadas en toda la landing.
 *
 *  Cambia estos valores cuando lo necesites
 *  para personalizar la web sin tocar el resto
 *  del código.
 */

// ----- Datos de la empresa -----
define('SITE_NAME',        'Haddad GPS');
define('SITE_LEGAL_NAME',  'Multiservicios Haddad S.R.L.');
define('SITE_TAGLINE',     'Multiservicios Haddad · Haddad GPS · S.R.L.');
define('SITE_SLOGAN',      'Asegura tu inversión con nosotros');
define('SITE_URL',         'https://haddadgps.com'); // Cambia al dominio real
define('SITE_COUNTRY',     'República Dominicana');

// ----- Contacto -----
define('PHONE_DISPLAY',    '809-519-0267');
define('PHONE_LINK',       '+18095190267');
define('WHATSAPP_NUMBER',  '18095190267');
define('WHATSAPP_MESSAGE', 'Hola, vengo desde la página web de Haddad GPS. Me interesa instalar un GPS y quiero más información.');
define('INSTAGRAM_USER',   'multiservicioshaddad');
define('INSTAGRAM_URL',    'https://instagram.com/multiservicioshaddad');

// ----- Correo destino del formulario -----
// Cambia esta dirección por el correo donde quieres recibir las cotizaciones.
define('CONTACT_EMAIL',    'contacto@tudominio.com');
define('CONTACT_SUBJECT',  'Nueva solicitud de cotización - Haddad GPS');

// ----- SEO -----
define('SEO_TITLE',        'Haddad GPS | Instalación de GPS para vehículos en República Dominicana');
define('SEO_DESCRIPTION',  'Haddad GPS ofrece instalación de GPS para vehículos, flotillas y equipos pesados en República Dominicana. Monitoreo 24/7, localización en tiempo real, historial de recorrido y apagado vehicular a distancia.');
define('SEO_KEYWORDS',     'GPS República Dominicana, GPS para vehículos, instalación GPS, GPS para flotillas, GPS para equipos pesados, monitoreo GPS, rastreo vehicular, Haddad GPS, Multiservicios Haddad');

// ----- Año dinámico para el footer -----
define('CURRENT_YEAR',     date('Y'));

// ----- URL de WhatsApp pre-construida -----
define('WHATSAPP_URL', 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . rawurlencode(WHATSAPP_MESSAGE));
