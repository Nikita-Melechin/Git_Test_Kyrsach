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

            // ===== ФИЛЬТРЫ (переключение активного класса) =====
            const filterButtons = document.querySelectorAll('.filter-btn');
            filterButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    filterButtons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    // Здесь можно добавить логику фильтрации, но для демо оставляем так
                });
            });

            // ===== МОДАЛЬНОЕ ОКНО =====
            const modal = document.getElementById('projectModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalCategory = document.getElementById('modalCategory');
            const modalDescription = document.getElementById('modalDescription');
            const modalLink = document.getElementById('modalLink');
            const modalClose = document.getElementById('modalClose');

            // Данные для карточек
            const cards = document.querySelectorAll('.project-card');
            cards.forEach(card => {
                card.addEventListener('click', function(e) {
                    const imgSrc = this.querySelector('.card-image img').src;
                    const title = this.querySelector('h3').innerText;
                    const category = this.querySelector('.project-category').innerText;
                    const description = this.querySelector('.project-description').innerText;
                    
                    modalImage.src = imgSrc;
                    modalTitle.innerText = title;
                    modalCategory.innerText = category;
                    modalDescription.innerText = description;
                    modalLink.href = '#'; // Можно заменить на реальную ссылку

                    modal.classList.add('active');
                });
            });

            // Закрытие модального окна
            modalClose.addEventListener('click', () => {
                modal.classList.remove('active');
            });

            window.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.remove('active');
                }
            });

            // ===== Плавный скролл до якорей =====
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