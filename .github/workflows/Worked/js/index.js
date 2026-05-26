        document.addEventListener('DOMContentLoaded', function() {
            // ===== БУРГЕР-МЕНЮ =====
            const burger = document.getElementById('burgerBtn');
            const mobileNav = document.getElementById('mobileNav');
            const closeBtn = document.getElementById('closeBtn');
            
            if (burger) {
                burger.addEventListener('click', () => {
                    mobileNav.classList.add('active');
                });
            }
            if (closeBtn) {
                closeBtn.addEventListener('click', () => {
                    mobileNav.classList.remove('active');
                });
            }
            document.querySelectorAll('.mobile-nav-list a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileNav.classList.remove('active');
                });
            });

            // ===== АНИМАЦИИ ПРИ СКРОЛЛЕ =====
            const fadeElements = document.querySelectorAll('.fade-up');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.2, rootMargin: '0px 0px -50px 0px' });
            
            fadeElements.forEach(el => observer.observe(el));

            // ===== КАЛЬКУЛЯТОР =====
            const siteTypeRadios = document.querySelectorAll('input[name="siteType"]');
            const pagesSelect = document.getElementById('pages');
            const designCheck = document.getElementById('design');
            const crmCheck = document.getElementById('crm');
            const lkCheck = document.getElementById('lk');
            const totalSpan = document.getElementById('totalPrice');

            function updatePrice() {
                let base = 0;
                siteTypeRadios.forEach(radio => {
                    if (radio.checked) base += parseInt(radio.value);
                });
                base += parseInt(pagesSelect.value || 0);
                if (designCheck.checked) base += parseInt(designCheck.value);
                if (crmCheck.checked) base += parseInt(crmCheck.value);
                if (lkCheck.checked) base += parseInt(lkCheck.value);
                
                totalSpan.textContent = base.toLocaleString('ru-RU') + '₽';
            }

            siteTypeRadios.forEach(radio => radio.addEventListener('change', updatePrice));
            pagesSelect.addEventListener('change', updatePrice);
            designCheck.addEventListener('change', updatePrice);
            crmCheck.addEventListener('change', updatePrice);
            lkCheck.addEventListener('change', updatePrice);
            updatePrice();

            // ===== FAQ АККОРДЕОН =====
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                question.addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            });

            // Плавный скролл до якорей
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    const target = document.querySelector(targetId);
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });

            // ===== ПЕРЕКЛЮЧЕНИЕ ТЕМЫ =====
            const themeToggle = document.getElementById('themeToggle');
            const mobileThemeToggle = document.getElementById('mobileThemeToggle');
            const body = document.body;
            const iconSun = 'fa-sun';
            const iconMoon = 'fa-moon';

            // Проверяем сохранённую тему
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                body.classList.add('dark-theme');
                updateThemeIcons(true);
            } else {
                updateThemeIcons(false);
            }

            function updateThemeIcons(isDark) {
                const icons = [themeToggle?.querySelector('i'), mobileThemeToggle?.querySelector('i')];
                icons.forEach(icon => {
                    if (icon) {
                        icon.classList.remove(isDark ? iconMoon : iconSun);
                        icon.classList.add(isDark ? iconSun : iconMoon);
                    }
                });
            }

            function toggleTheme() {
                if (body.classList.contains('dark-theme')) {
                    body.classList.remove('dark-theme');
                    localStorage.setItem('theme', 'light');
                    updateThemeIcons(false);
                } else {
                    body.classList.add('dark-theme');
                    localStorage.setItem('theme', 'dark');
                    updateThemeIcons(true);
                }
            }

            if (themeToggle) themeToggle.addEventListener('click', toggleTheme);
            if (mobileThemeToggle) mobileThemeToggle.addEventListener('click', toggleTheme);
        });