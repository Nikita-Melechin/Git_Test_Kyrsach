 document.addEventListener('DOMContentLoaded', function() {
            // Бургер-меню
            const burgerBtn = document.getElementById('burgerBtn');
            const mobileNav = document.getElementById('mobileNav');
            const closeBtn = document.getElementById('closeBtn');
            
            function openNav(){ mobileNav.classList.add('active'); }
            function closeNav(){ mobileNav.classList.remove('active'); }

            if (burgerBtn) burgerBtn.addEventListener('click', openNav);
            if (closeBtn) closeBtn.addEventListener('click', closeNav);
            document.querySelectorAll('.mobile-nav-list a').forEach(a => {
                a.addEventListener('click', closeNav);
            });

            // Анимации при скролле
            const fadeElements = document.querySelectorAll('.fade-up');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add('visible');
                });
            }, { threshold: 0.2, rootMargin: '0px 0px -40px 0px' });
            fadeElements.forEach(el => observer.observe(el));

            // Плавный скролл по якорям
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e){
                    const targetId = this.getAttribute('href');
                    const target = document.querySelector(targetId);
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });

            // Обработка формы контактов
            const form = document.getElementById('contactForm');
            const status = document.createElement('div');
            status.style.marginTop = '12px';
            status.style.fontSize = '14px';
            form?.appendChild(status);

            form?.addEventListener('submit', async (e) => {
                e.preventDefault();
                const name = document.getElementById('name')?.value?.trim();
                const email = document.getElementById('email')?.value?.trim();
                const message = document.getElementById('message')?.value?.trim();

                if (!name || !email || !message) {
                    status.textContent = 'Пожалуйста, заполните все поля.';
                    status.style.color = '#d22';
                    return;
                }

                status.textContent = 'Отправка...';
                status.style.color = '#555';

                try {
                    // Пример запроса. Замените URL на ваш endpoint.
                    const resp = await fetch('/api/contact', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ name, email, message })
                    });

                    if (resp.ok) {
                        status.textContent = 'Спасибо! Мы свяжемся с вами в ближайшее время.';
                        status.style.color = '#0a0';
                        form.reset();
                    } else {
                        status.textContent = 'Ошибка отправки. Попробуйте позже.';
                        status.style.color = '#d00';
                    }
                } catch (err) {
                    status.textContent = 'Сеть недоступна. Попробуйте позже.';
                    status.style.color = '#d00';
                }
            });
        });