<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$errors = [];
$old    = [
    'nombre'    => '',
    'telefono'  => '',
    'correo'    => '',
    'tipo'      => '',
    'cantidad'  => '1',
    'servicio'  => '',
    'mensaje'   => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // CSRF
    if (!hgps_csrf_check($_POST['csrf'] ?? '')) {
        $errors['general'] = 'La sesión ha expirado. Por favor recarga la página.';
    }

    // Sanitizar entradas
    $old['nombre']   = hgps_clean($_POST['nombre']   ?? '');
    $old['telefono'] = hgps_clean($_POST['telefono'] ?? '');
    $old['correo']   = hgps_clean($_POST['correo']   ?? '');
    $old['tipo']     = hgps_clean($_POST['tipo']     ?? '');
    $old['cantidad'] = hgps_clean($_POST['cantidad'] ?? '1');
    $old['servicio'] = hgps_clean($_POST['servicio'] ?? '');
    $old['mensaje']  = hgps_clean($_POST['mensaje']  ?? '');

    // Validaciones
    if ($old['nombre']   === '')                              $errors['nombre']   = 'Tu nombre es obligatorio.';
    if ($old['telefono'] === '' || !hgps_valid_phone($old['telefono'])) $errors['telefono'] = 'Indica un teléfono válido.';
    if ($old['correo']   !== '' && !hgps_valid_email($old['correo']))   $errors['correo']   = 'El correo no parece válido.';
    if ($old['tipo']     === '')                              $errors['tipo']     = 'Selecciona el tipo de vehículo.';
    if ($old['servicio'] === '')                              $errors['servicio'] = 'Selecciona un servicio.';
    if (!is_numeric($old['cantidad']) || (int)$old['cantidad'] < 1) {
        $errors['cantidad'] = 'La cantidad debe ser mayor o igual a 1.';
    }

    // Si todo está bien, enviamos correo y redirigimos
    if (empty($errors)) {

        $data = [
            'Nombre'             => $old['nombre'],
            'Teléfono'           => $old['telefono'],
            'Correo'             => $old['correo'] !== '' ? $old['correo'] : '(No proporcionado)',
            'Tipo de vehículo'   => $old['tipo'],
            'Cantidad'           => $old['cantidad'],
            'Servicio requerido' => $old['servicio'],
            'Mensaje'            => $old['mensaje'] !== '' ? $old['mensaje'] : '(Sin mensaje)',
            'Origen'             => 'Formulario web - /cotizar',
        ];

        // ----- Envío de correo -----
        // En desarrollo local mail() puede fallar.
        // Para producción: integra PHPMailer / Resend / SendGrid en functions.php.
        @hgps_send_quote_email($data);

        // ----- (Opcional) Guardar en base de datos MySQL -----
        // Aquí podrías insertar en una tabla cotizaciones:
        // $pdo->prepare("INSERT INTO cotizaciones ...")->execute([...]);

        header('Location: gracias');
        exit;
    }
}

$pageTitle       = 'Cotizar GPS | Haddad GPS';
$pageDescription = 'Solicita tu cotización de GPS para vehículos personales, flotillas, camiones y equipos pesados en República Dominicana.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="relative py-20 lg:py-28 bg-gradient-to-br from-dark via-dark-soft to-black overflow-hidden">
    <div class="absolute inset-0 hero-grid opacity-20 pointer-events-none"></div>
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-primary/15 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="relative max-w-6xl mx-auto px-4 lg:px-8 grid lg:grid-cols-5 gap-10">

        <!-- Información lateral -->
        <div class="lg:col-span-2" data-aos="fade-right">
            <span class="inline-block text-primary text-xs font-bold uppercase tracking-[0.3em] mb-3">Cotización</span>
            <h1 class="font-display font-black text-3xl lg:text-4xl mb-5 leading-tight">
                Solicita tu <span class="text-primary">cotización GPS</span>
            </h1>
            <p class="text-white/70 mb-8 leading-relaxed">
                Cuéntanos sobre tu vehículo o flotilla y te enviaremos una propuesta personalizada. También puedes contactarnos al instante por WhatsApp.
            </p>

            <div class="space-y-3 mb-8">
                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 bg-dark-soft border border-white/5 rounded-xl hover:border-whatsapp/40 transition">
                    <div class="w-12 h-12 rounded-xl bg-whatsapp text-white flex items-center justify-center text-xl">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div>
                        <div class="text-xs text-white/50">WhatsApp directo</div>
                        <div class="font-bold"><?= PHONE_DISPLAY ?></div>
                    </div>
                </a>
                <a href="tel:<?= PHONE_LINK ?>" class="flex items-center gap-4 p-4 bg-dark-soft border border-white/5 rounded-xl hover:border-primary/40 transition">
                    <div class="w-12 h-12 rounded-xl bg-primary text-dark flex items-center justify-center text-xl">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <div class="text-xs text-white/50">Teléfono</div>
                        <div class="font-bold"><?= PHONE_DISPLAY ?></div>
                    </div>
                </a>
                <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 bg-dark-soft border border-white/5 rounded-xl hover:border-primary/40 transition">
                    <div class="w-12 h-12 rounded-xl bg-primary text-dark flex items-center justify-center text-xl">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div>
                        <div class="text-xs text-white/50">Instagram</div>
                        <div class="font-bold">@<?= INSTAGRAM_USER ?></div>
                    </div>
                </a>
            </div>

            <div class="bg-primary/10 border border-primary/30 rounded-2xl p-5">
                <div class="flex items-center gap-3 mb-2 text-primary">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span class="font-display font-bold">"<?= SITE_SLOGAN ?>"</span>
                </div>
                <p class="text-white/70 text-sm">Servicio profesional en <?= SITE_COUNTRY ?>. Monitoreo 24/7, instalación garantizada.</p>
            </div>
        </div>

        <!-- Formulario -->
        <div class="lg:col-span-3" data-aos="fade-left">
            <div class="bg-dark-soft border border-white/10 rounded-3xl p-6 lg:p-10 shadow-2xl">

                <?php if (!empty($errors['general'])): ?>
                    <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/30 text-red-300 text-sm">
                        <i class="fa-solid fa-circle-exclamation mr-2"></i><?= $errors['general'] ?>
                    </div>
                <?php endif; ?>

                <form action="cotizar" method="POST" id="quote-form" novalidate>
                    <input type="hidden" name="csrf" value="<?= hgps_csrf_token() ?>">

                    <div class="grid sm:grid-cols-2 gap-5">
                        <!-- Nombre -->
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-white/70 mb-2">Nombre completo *</label>
                            <input type="text" name="nombre" value="<?= $old['nombre'] ?>" required
                                   class="form-input w-full px-4 py-3 rounded-xl bg-dark border border-white/10 focus:border-primary focus:ring-2 focus:ring-primary/30 outline-none transition text-white placeholder-white/40"
                                   placeholder="Ej. Juan Pérez">
                            <?php if (!empty($errors['nombre'])): ?><p class="mt-2 text-xs text-red-400"><?= $errors['nombre'] ?></p><?php endif; ?>
                        </div>

                        <!-- Teléfono -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-white/70 mb-2">Teléfono / WhatsApp *</label>
                            <input type="tel" name="telefono" value="<?= $old['telefono'] ?>" required
                                   class="form-input w-full px-4 py-3 rounded-xl bg-dark border border-white/10 focus:border-primary focus:ring-2 focus:ring-primary/30 outline-none transition text-white placeholder-white/40"
                                   placeholder="809-000-0000">
                            <?php if (!empty($errors['telefono'])): ?><p class="mt-2 text-xs text-red-400"><?= $errors['telefono'] ?></p><?php endif; ?>
                        </div>

                        <!-- Correo -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-white/70 mb-2">Correo electrónico</label>
                            <input type="email" name="correo" value="<?= $old['correo'] ?>"
                                   class="form-input w-full px-4 py-3 rounded-xl bg-dark border border-white/10 focus:border-primary focus:ring-2 focus:ring-primary/30 outline-none transition text-white placeholder-white/40"
                                   placeholder="tu@email.com">
                            <?php if (!empty($errors['correo'])): ?><p class="mt-2 text-xs text-red-400"><?= $errors['correo'] ?></p><?php endif; ?>
                        </div>

                        <!-- Tipo de vehículo -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-white/70 mb-2">Tipo de vehículo *</label>
                            <select name="tipo" required class="form-input w-full px-4 py-3 rounded-xl bg-dark border border-white/10 focus:border-primary focus:ring-2 focus:ring-primary/30 outline-none transition text-white">
                                <option value="">Selecciona...</option>
                                <?php
                                $tipos = ['Vehículo personal', 'Jeepeta', 'Camioneta', 'Camión', 'Equipo pesado', 'Flotilla empresarial', 'Vehículo de reparto', 'Otro'];
                                foreach ($tipos as $t): ?>
                                    <option value="<?= $t ?>" <?= $old['tipo'] === $t ? 'selected' : '' ?>><?= $t ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (!empty($errors['tipo'])): ?><p class="mt-2 text-xs text-red-400"><?= $errors['tipo'] ?></p><?php endif; ?>
                        </div>

                        <!-- Cantidad -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-white/70 mb-2">Cantidad de vehículos *</label>
                            <input type="number" name="cantidad" value="<?= $old['cantidad'] ?>" min="1" required
                                   class="form-input w-full px-4 py-3 rounded-xl bg-dark border border-white/10 focus:border-primary focus:ring-2 focus:ring-primary/30 outline-none transition text-white">
                            <?php if (!empty($errors['cantidad'])): ?><p class="mt-2 text-xs text-red-400"><?= $errors['cantidad'] ?></p><?php endif; ?>
                        </div>

                        <!-- Servicio -->
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-white/70 mb-2">Servicio requerido *</label>
                            <select name="servicio" required class="form-input w-full px-4 py-3 rounded-xl bg-dark border border-white/10 focus:border-primary focus:ring-2 focus:ring-primary/30 outline-none transition text-white">
                                <option value="">Selecciona un servicio...</option>
                                <?php
                                $servicios = [
                                    'GPS para vehículo personal',
                                    'GPS para camión',
                                    'GPS para flotilla',
                                    'GPS para equipo pesado',
                                    'GPS para empresa',
                                    'Apagado remoto',
                                    'Monitoreo 24/7',
                                    'Otro',
                                ];
                                foreach ($servicios as $s): ?>
                                    <option value="<?= $s ?>" <?= $old['servicio'] === $s ? 'selected' : '' ?>><?= $s ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (!empty($errors['servicio'])): ?><p class="mt-2 text-xs text-red-400"><?= $errors['servicio'] ?></p><?php endif; ?>
                        </div>

                        <!-- Mensaje -->
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-white/70 mb-2">Mensaje adicional</label>
                            <textarea name="mensaje" rows="4"
                                      class="form-input w-full px-4 py-3 rounded-xl bg-dark border border-white/10 focus:border-primary focus:ring-2 focus:ring-primary/30 outline-none transition text-white placeholder-white/40 resize-none"
                                      placeholder="Cuéntanos detalles del vehículo, ciudad, horario preferido, etc."><?= $old['mensaje'] ?></textarea>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3 mt-8">
                        <button type="submit" class="flex-1 px-7 py-4 rounded-full bg-primary text-dark font-bold hover:bg-primary-light transition shadow-glow inline-flex items-center justify-center gap-2">
                            Enviar cotización <i class="fa-solid fa-paper-plane"></i>
                        </button>
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="px-7 py-4 rounded-full bg-whatsapp text-white font-bold hover:opacity-90 transition inline-flex items-center justify-center gap-2">
                            <i class="fa-brands fa-whatsapp"></i> WhatsApp
                        </a>
                    </div>

                    <p class="text-xs text-white/50 mt-5 text-center">
                        <i class="fa-solid fa-lock text-primary mr-1"></i>
                        Tus datos son tratados con confidencialidad y solo serán usados para contactarte.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
