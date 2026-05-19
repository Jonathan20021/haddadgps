# Haddad GPS — Landing Page

Landing page profesional, moderna y lista para producción para **Haddad GPS / Multiservicios Haddad**, empresa dedicada a la instalación de GPS para vehículos, flotillas, camiones y equipos pesados en República Dominicana.

> **Slogan:** *Asegura tu inversión con nosotros*

---

## 1. Descripción del proyecto

Sitio web orientado a conversión, con:

- Hero de alto impacto.
- Secciones de beneficios, servicios, equipos pesados, flotillas y vehículos personales.
- Sección "Cómo funciona", "Por qué elegirnos" y contadores animados.
- Galería filtrable, testimonios y FAQ.
- Formulario de cotización funcional en PHP.
- Botones directos de WhatsApp y llamada en toda la página.
- SEO básico, Open Graph y diseño responsive mobile-first.

## 2. Tecnologías usadas

- **PHP puro** (sin frameworks pesados).
- **Tailwind CSS** vía CDN (con configuración extendida).
- **JavaScript vanilla** moderno.
- **AOS** para animaciones al hacer scroll.
- **Font Awesome 6** para íconos.
- **Google Fonts**: Poppins + Urbanist.

No requiere Composer ni dependencias externas. Funciona en cualquier hosting compartido con PHP 7.4+.

## 3. Estructura de carpetas

```
haddad-gps/
├── index.php              # Landing principal
├── cotizar.php            # Formulario de cotización
├── gracias.php            # Página de confirmación
├── robots.txt
├── sitemap.xml
│
├── assets/
│   ├── css/
│   │   └── styles.css     # Estilos propios (complementa Tailwind)
│   ├── js/
│   │   └── main.js        # JS principal (menú, FAQ, contador, etc.)
│   ├── img/
│   │   ├── logo.png
│   │   ├── hero-car.png
│   │   ├── gps-device.png
│   │   ├── map-pin.png
│   │   ├── heavy-equipment.png
│   │   ├── app-preview.png
│   │   └── gallery/
│   └── icons/
│
├── includes/
│   ├── header.php         # Header / navbar
│   ├── footer.php         # Footer + flotantes + scripts finales
│   ├── config.php         # Datos de contacto, SEO, correo
│   └── functions.php      # Sanitización, validación, mail()
│
└── README.md
```

## 4. Instalación

### Opción A — XAMPP / WAMP (local)

1. Copia la carpeta `haddadgps/` dentro de `htdocs/`.
2. Inicia Apache desde el panel de XAMPP.
3. Abre [http://localhost/haddadgps](http://localhost/haddadgps).

### Opción B — Hosting compartido / cPanel

1. Comprime la carpeta del proyecto en `.zip`.
2. Sube el archivo al **Administrador de archivos** dentro de `public_html/`.
3. Descomprímelo allí.
4. Asegúrate de que `index.php` quede en la raíz (`public_html/`) o en la subcarpeta que prefieras.
5. Ajusta `SITE_URL` en `includes/config.php`.

> Si tu hosting no permite `mail()`, integra **PHPMailer** dentro de `includes/functions.php` (instrucciones más abajo).

## 5. Cómo cambiar imágenes

Coloca tus imágenes reales en `assets/img/` con estos nombres sugeridos:

| Archivo                       | Uso                                  |
|-------------------------------|--------------------------------------|
| `logo.png`                    | Logo en header / footer              |
| `hero-car.png`                | Imagen principal del hero            |
| `gps-device.png`              | Foto del dispositivo GPS             |
| `map-pin.png`                 | Marcador GPS decorativo              |
| `heavy-equipment.png`         | Sección equipos pesados              |
| `app-preview.png`             | Mockup de plataforma móvil           |
| `og-image.jpg`                | Imagen para redes sociales (1200×630)|
| `gallery/*.jpg`               | Imágenes de la galería               |

En `index.php`, las imágenes actuales usan placeholders de Unsplash. Reemplaza el `src="..."` por la ruta a tus imágenes locales, por ejemplo:

```html
<img src="assets/img/hero-car.png" alt="...">
```

## 6. Cómo cambiar colores

Los colores se definen en dos lugares:

1. **Tailwind (incluido en `includes/header.php`):**

```js
tailwind.config = {
  theme: { extend: { colors: {
    primary:        '#ff8a00',
    'primary-dark': '#e67600',
    ...
  }}}
}
```

2. **`assets/css/styles.css`** (variables CSS `:root`):

```css
:root {
  --primary: #ff8a00;
  --primary-dark: #e67600;
  ...
}
```

Cambia ambos para mantener consistencia visual.

## 7. Cómo cambiar el número de WhatsApp / teléfono

Abre `includes/config.php` y modifica:

```php
define('PHONE_DISPLAY',    '809-519-0267');
define('PHONE_LINK',       '+18095190267');
define('WHATSAPP_NUMBER',  '18095190267');
define('WHATSAPP_MESSAGE', 'Hola, vengo desde la página web ...');
```

Todo el sitio se actualizará automáticamente.

## 8. Cómo configurar el correo destino

En `includes/config.php`:

```php
define('CONTACT_EMAIL',   'contacto@tudominio.com');
define('CONTACT_SUBJECT', 'Nueva solicitud de cotización - Haddad GPS');
```

Cambia `contacto@tudominio.com` por la dirección donde quieres recibir las cotizaciones.

### Usar PHPMailer (recomendado para producción)

1. Descarga PHPMailer desde [https://github.com/PHPMailer/PHPMailer](https://github.com/PHPMailer/PHPMailer) y súbelo a `vendor/PHPMailer/`.
2. Reemplaza la función `hgps_send_quote_email()` en `includes/functions.php` con:

```php
require __DIR__ . '/../vendor/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../vendor/PHPMailer/src/SMTP.php';
require __DIR__ . '/../vendor/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host       = 'smtp.tudominio.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'no-reply@tudominio.com';
$mail->Password   = 'TU_PASSWORD';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port       = 465;

$mail->setFrom('no-reply@tudominio.com', SITE_NAME);
$mail->addAddress(CONTACT_EMAIL);
$mail->isHTML(true);
$mail->Subject = CONTACT_SUBJECT;
$mail->Body    = hgps_build_email_body($data);
$mail->send();
```

## 9. Cómo probar el formulario

1. Ingresa a `/cotizar.php`.
2. Completa los campos.
3. Si todos son válidos, redirige a `/gracias` (URL limpia) y dispara `mail()`.

### URLs limpias

El proyecto usa URLs sin extensión `.php` gracias al `.htaccess`. Por ejemplo:
- `/servicios` (no `/servicios.php`)
- `/nosotros`, `/contacto`, `/cotizar`, etc.

Si alguien entra a una URL con `.php`, el `.htaccess` redirige automáticamente con `301` a la versión limpia.

### Producción vs Local

El proyecto está configurado por defecto para **producción** en:

**https://haddadgps.kyrosrd.com/**

Para **desarrollo local** (XAMPP en `/haddadgps/`), edita `.htaccess`:

```apache
# Cambiar esta línea:
ErrorDocument 404 /404
# Por esta:
ErrorDocument 404 /haddadgps/404
```

Y comenta el bloque "Forzar HTTPS" (Apache local no usa HTTPS):

```apache
# RewriteCond %{HTTPS} off
# RewriteCond %{HTTP:X-Forwarded-Proto} !https
# RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

### Despliegue a producción

1. Sube todos los archivos al servidor por FTP/cPanel.
2. Verifica que el dominio `haddadgps.kyrosrd.com` apunte a la carpeta donde subiste los archivos.
3. Activa HTTPS desde cPanel (Let's Encrypt suele ser gratuito).
4. Edita `includes/config.php` y confirma:
   - `SITE_URL` = `https://haddadgps.kyrosrd.com`
   - `CONTACT_EMAIL` = correo real donde quieras recibir cotizaciones
5. Envía el `sitemap.xml` a Google Search Console:
   - URL: `https://haddadgps.kyrosrd.com/sitemap.xml`
4. Si `mail()` no funciona en tu hosting compartido, revisa los logs y considera PHPMailer + SMTP.
5. Para depurar en desarrollo, agrega temporalmente `error_reporting(E_ALL); ini_set('display_errors', 1);` al inicio de `cotizar.php`.

## 10. SEO y archivos auxiliares

- Actualiza `SITE_URL` en `config.php` con tu dominio real.
- Actualiza `sitemap.xml` con tu dominio.
- Actualiza `robots.txt` con la URL real del sitemap.
- Sube una imagen `assets/img/og-image.jpg` de 1200×630 px.

## 11. Recomendaciones para producción

- Comprime todas las imágenes (TinyPNG / Squoosh).
- Usa **Tailwind compilado** (CLI) en lugar del CDN para mayor velocidad si pasas a un sitio de alto tráfico.
- Activa HTTPS desde cPanel (Let's Encrypt).
- Configura caché en `.htaccess`:

```apache
<IfModule mod_expires.c>
  ExpiresActive On
  ExpiresByType image/jpeg "access plus 1 year"
  ExpiresByType image/png  "access plus 1 year"
  ExpiresByType text/css   "access plus 1 month"
  ExpiresByType application/javascript "access plus 1 month"
</IfModule>
```

- Configura Google Analytics, Meta Pixel o Search Console si los necesitas.
- Envía el sitemap a Google Search Console.

## 12. Licencia

© <?= date('Y') ?> Haddad GPS / Multiservicios Haddad. Todos los derechos reservados.

Desarrollado por **Kyros Solutions**.
