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

            // ===== АККОРДЕОН =====
            const accordionItems = document.querySelectorAll('.accordion-item');
            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                header.addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            });

            // ===== ПЛАВНЫЙ СКРОЛЛ =====
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
        });