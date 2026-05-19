/* ============================================
   Haddad GPS - Scripts principales
   Vanilla JS moderno.
============================================ */

(function () {
    'use strict';

    /* ------------------------------------
       Helpers
    ------------------------------------ */
    const $  = (sel, ctx = document) => ctx.querySelector(sel);
    const $$ = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel));

    /* ------------------------------------
       Menú móvil (slide-in panel)
    ------------------------------------ */
    const menuBtn   = $('#mobile-menu-btn');
    const menuClose = $('#mobile-close');
    const menu      = $('#mobile-menu');
    const overlay   = $('#mobile-overlay');

    const openMenu = () => {
        if (!menu || !overlay) return;
        menu.classList.add('is-open');
        overlay.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    };
    const closeMenu = () => {
        if (!menu || !overlay) return;
        menu.classList.remove('is-open');
        overlay.classList.remove('is-open');
        document.body.style.overflow = '';
    };

    if (menuBtn)   menuBtn.addEventListener('click', openMenu);
    if (menuClose) menuClose.addEventListener('click', closeMenu);
    if (overlay)   overlay.addEventListener('click', closeMenu);

    // Cerrar al hacer clic en cualquier enlace de navegación
    $$('.mobile-link', menu).forEach(link => link.addEventListener('click', closeMenu));

    // ESC cierra menú
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMenu();
    });

    /* ------------------------------------
       Acordeones del menú móvil
    ------------------------------------ */
    $$('.mobile-acc-toggle').forEach(btn => {
        btn.addEventListener('click', () => {
            btn.closest('.mobile-accordion').classList.toggle('is-open');
        });
    });

    /* ------------------------------------
       Dropdowns desktop (touch / click)
    ------------------------------------ */
    $$('.dropdown > button').forEach(btn => {
        btn.addEventListener('click', (e) => {
            // Solo aplica click en pantallas táctiles; hover funciona en desktop
            if (window.matchMedia('(hover: none)').matches) {
                e.preventDefault();
                const dd = btn.closest('.dropdown');
                $$('.dropdown.is-open').forEach(d => d !== dd && d.classList.remove('is-open'));
                dd.classList.toggle('is-open');
            }
        });
    });
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.dropdown')) {
            $$('.dropdown.is-open').forEach(d => d.classList.remove('is-open'));
        }
    });

    /* ------------------------------------
       Header al hacer scroll
    ------------------------------------ */
    const header = $('#site-header');
    const onScroll = () => {
        if (!header) return;
        header.classList.toggle('scrolled', window.scrollY > 60);

        const top = $('#back-to-top');
        if (top) top.classList.toggle('show', window.scrollY > 400);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    /* ------------------------------------
       Smooth scroll para anchors internos
    ------------------------------------ */
    $$('a[href^="#"]').forEach(a => {
        a.addEventListener('click', (e) => {
            const href = a.getAttribute('href');
            if (href.length > 1 && href.startsWith('#')) {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const offset = (header?.offsetHeight || 0) + 10;
                    const y = target.getBoundingClientRect().top + window.scrollY - offset;
                    window.scrollTo({ top: y, behavior: 'smooth' });
                }
            }
        });
    });

    /* ------------------------------------
       Botón volver arriba
    ------------------------------------ */
    const backTop = $('#back-to-top');
    if (backTop) {
        backTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ------------------------------------
       FAQ acordeón
    ------------------------------------ */
    $$('.faq-toggle').forEach(btn => {
        btn.addEventListener('click', () => {
            const item   = btn.closest('.faq-item');
            const isOpen = item.classList.contains('active');

            // Cerrar todos
            $$('.faq-item').forEach(i => i.classList.remove('active'));

            if (!isOpen) item.classList.add('active');
        });
    });

    /* ------------------------------------
       Filtro de galería
    ------------------------------------ */
    const filters = $$('.gallery-filter');
    const items   = $$('.gallery-item');

    filters.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            filters.forEach(b => b.classList.remove('active', 'bg-primary', 'text-dark', 'border-primary'));
            filters.forEach(b => b.classList.add('text-white/70'));
            btn.classList.add('active', 'bg-primary', 'text-dark', 'border-primary');
            btn.classList.remove('text-white/70');

            items.forEach(it => {
                const match = filter === 'todos' || it.dataset.category === filter;
                it.classList.toggle('is-hidden', !match);
            });
        });
    });

    /* ------------------------------------
       Contadores animados
    ------------------------------------ */
    const counters = $$('.counter');
    if (counters.length && 'IntersectionObserver' in window) {

        const animateCounter = (el) => {
            const raw = (el.dataset.target || el.textContent || '').trim();

            // Si contiene decimal, estrella, barra o porcentaje fijo, no animar
            if (/[./%★]/.test(raw)) return;

            const prefix = (raw.match(/^[+]/) || [''])[0];
            const num    = parseInt(raw.replace(/[^0-9]/g, ''), 10);
            if (isNaN(num) || num === 0) return;

            const fmt = (n) => n.toLocaleString('en-US'); // 6,000

            let current  = 0;
            const dur    = 1800;
            const start  = performance.now();
            const tick   = (t) => {
                const p = Math.min(1, (t - start) / dur);
                const ease = 1 - Math.pow(1 - p, 3); // ease-out cubic
                current = Math.round(num * ease);
                el.textContent = prefix + fmt(current);
                if (p < 1) requestAnimationFrame(tick);
                else el.textContent = prefix + fmt(num);
            };
            requestAnimationFrame(tick);
        };

        const obs = new IntersectionObserver((entries) => {
            entries.forEach(en => {
                if (en.isIntersecting) {
                    animateCounter(en.target);
                    obs.unobserve(en.target);
                }
            });
        }, { threshold: 0.4 });

        counters.forEach(c => obs.observe(c));
    }

    /* ------------------------------------
       Validación de formulario (frontend)
    ------------------------------------ */
    const form = $('#quote-form');
    if (form) {
        form.addEventListener('submit', (e) => {
            const required = ['nombre', 'telefono', 'tipo', 'servicio', 'cantidad'];
            let valid      = true;

            required.forEach(name => {
                const field = form.querySelector(`[name="${name}"]`);
                if (!field) return;
                const value = (field.value || '').trim();
                field.classList.remove('border-red-500');

                if (!value) {
                    field.classList.add('border-red-500');
                    valid = false;
                }
            });

            // Validación de teléfono (mínimo 7 dígitos)
            const tel = form.querySelector('[name="telefono"]');
            if (tel) {
                const onlyDigits = tel.value.replace(/[^0-9]/g, '');
                if (onlyDigits.length < 7) {
                    tel.classList.add('border-red-500');
                    valid = false;
                }
            }

            // Validación de correo si fue ingresado
            const mail = form.querySelector('[name="correo"]');
            if (mail && mail.value.trim() !== '') {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!re.test(mail.value.trim())) {
                    mail.classList.add('border-red-500');
                    valid = false;
                }
            }

            if (!valid) {
                e.preventDefault();
                window.scrollTo({
                    top: form.getBoundingClientRect().top + window.scrollY - 100,
                    behavior: 'smooth'
                });

                // Reset visual al modificar
                form.querySelectorAll('.border-red-500').forEach(el => {
                    el.addEventListener('input', () => el.classList.remove('border-red-500'), { once: true });
                });
            }
        });
    }

    /* ------------------------------------
       Partículas decorativas en hero
    ------------------------------------ */
    const particleContainer = $('#particles');
    if (particleContainer && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const total = window.innerWidth < 768 ? 12 : 24;
        for (let i = 0; i < total; i++) {
            const p = document.createElement('span');
            p.className = 'particle';
            p.style.left = Math.random() * 100 + '%';
            p.style.animationDelay = (Math.random() * 8) + 's';
            p.style.animationDuration = (6 + Math.random() * 6) + 's';
            p.style.opacity = (0.3 + Math.random() * 0.4).toFixed(2);
            p.style.width = p.style.height = (2 + Math.random() * 4) + 'px';
            particleContainer.appendChild(p);
        }
    }

    /* ------------------------------------
       Tilt 3D suave en cards .tilt
    ------------------------------------ */
    if (!('ontouchstart' in window)) {
        $$('.tilt').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const r  = card.getBoundingClientRect();
                const x  = e.clientX - r.left;
                const y  = e.clientY - r.top;
                const rx = ((y / r.height) - 0.5) * -6;
                const ry = ((x / r.width)  - 0.5) *  6;
                card.style.transform = `perspective(900px) translateY(-6px) rotateX(${rx}deg) rotateY(${ry}deg)`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });
        });
    }

    /* ------------------------------------
       Año dinámico
    ------------------------------------ */
    const yearEl = $('#current-year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    /* ------------------------------------
       Lazy fade-in para imágenes pesadas
    ------------------------------------ */
    $$('img').forEach(img => { if (!img.hasAttribute('loading')) img.setAttribute('loading', 'lazy'); });

})();
