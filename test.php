<?php
// Archivo temporal de diagnóstico — eliminar después de usar
echo '<!DOCTYPE html><html><head><title>Test Haddad</title></head><body style="font-family:sans-serif;background:#111;color:#fff;padding:40px;">';
echo '<h1 style="color:#ff8a00;">✓ Haddad GPS — Test OK</h1>';
echo '<p>Este archivo se cargó correctamente.</p>';
echo '<hr><h2>Información del servidor</h2>';
echo '<p><strong>Document Root:</strong> ' . $_SERVER['DOCUMENT_ROOT'] . '</p>';
echo '<p><strong>Script Path:</strong> ' . __FILE__ . '</p>';
echo '<p><strong>HTTP Host:</strong> ' . $_SERVER['HTTP_HOST'] . '</p>';
echo '<p><strong>PHP Version:</strong> ' . phpversion() . '</p>';
echo '<p><strong>mod_rewrite:</strong> ' . (in_array('mod_rewrite', apache_get_modules() ?: []) ? '✓ Habilitado' : '⚠️ Verificar') . '</p>';
echo '<hr><p style="color:#ffb347;">Si ves este mensaje, la carpeta es correcta. Borra este archivo después.</p>';
echo '</body></html>';
?>
