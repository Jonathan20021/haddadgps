<?php
/**
 * ============================================
 *  Funciones auxiliares - Haddad GPS
 * ============================================
 */

require_once __DIR__ . '/config.php';

/**
 * Sanitiza una cadena de entrada eliminando
 * espacios, etiquetas y caracteres especiales.
 */
function hgps_clean($value) {
    if ($value === null) return '';
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * Valida un correo electrónico.
 */
function hgps_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Valida un teléfono (formato flexible).
 */
function hgps_valid_phone($phone) {
    $phone = preg_replace('/[^0-9+]/', '', $phone);
    return strlen($phone) >= 7 && strlen($phone) <= 20;
}

/**
 * Construye el cuerpo del correo HTML para
 * las cotizaciones recibidas desde la web.
 */
function hgps_build_email_body(array $data) {
    $rows = '';
    foreach ($data as $label => $value) {
        $rows .= '<tr>'
              .  '<td style="padding:8px 12px;background:#f5f5f5;font-weight:bold;color:#111;">' . $label . '</td>'
              .  '<td style="padding:8px 12px;color:#222;">' . nl2br($value) . '</td>'
              .  '</tr>';
    }

    return '<!doctype html><html><body style="font-family:Arial,Helvetica,sans-serif;background:#111;padding:24px;">'
        . '<div style="max-width:620px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;">'
        . '<div style="background:#ff8a00;padding:20px 24px;color:#111;">'
        . '<h2 style="margin:0;font-size:22px;">Nueva cotización - Haddad GPS</h2>'
        . '<p style="margin:6px 0 0;font-size:14px;">Solicitud recibida desde la web</p>'
        . '</div>'
        . '<table style="width:100%;border-collapse:collapse;">' . $rows . '</table>'
        . '<div style="background:#111;color:#fff;padding:14px 24px;font-size:12px;text-align:center;">'
        . SITE_NAME . ' &middot; ' . SITE_SLOGAN
        . '</div></div></body></html>';
}

/**
 * Envía el correo de cotización utilizando mail().
 *
 * Para producción se recomienda integrar PHPMailer,
 * Resend o SendGrid. Deja preparados los hooks
 * dentro de esta función para reemplazarlo.
 */
function hgps_send_quote_email(array $data) {
    $to      = CONTACT_EMAIL;
    $subject = CONTACT_SUBJECT;
    $body    = hgps_build_email_body($data);

    $headers   = [];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';
    $headers[] = 'From: ' . SITE_NAME . ' <no-reply@' . parse_url(SITE_URL, PHP_URL_HOST) . '>';
    if (!empty($data['Correo'])) {
        $headers[] = 'Reply-To: ' . $data['Correo'];
    }

    // ------------------------------------------
    // TODO (producción): Reemplazar por PHPMailer
    // ------------------------------------------
    // use PHPMailer\PHPMailer\PHPMailer;
    // $mail = new PHPMailer(true);
    // $mail->isSMTP();
    // $mail->Host = 'smtp.tuhost.com';
    // ...
    // ------------------------------------------

    return @mail($to, $subject, $body, implode("\r\n", $headers));
}

/**
 * Genera un token CSRF simple.
 */
function hgps_csrf_token() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(24));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Valida el token CSRF enviado por el formulario.
 */
function hgps_csrf_check($token) {
    if (session_status() === PHP_SESSION_NONE) session_start();
    return !empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], (string)$token);
}
