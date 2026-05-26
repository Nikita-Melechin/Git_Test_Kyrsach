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

    // ===== КАЛЬКУЛЯТОР (полностью новый, как на главной) =====
    const siteTypeRadios = document.querySelectorAll('input[name="siteType"]');
    const pagesSelect = document.getElementById('pages');
    const designCheck = document.getElementById('design');
    const crmCheck = document.getElementById('crm');
    const lkCheck = document.getElementById('lk');
    const totalSpan = document.getElementById('totalPrice');

    function updatePrice() {
        let base = 0;
        // Тип сайта
        siteTypeRadios.forEach(radio => {
            if (radio.checked) base += parseInt(radio.value);
        });
        // Количество страниц
        base += parseInt(pagesSelect.value) || 0;
        // Доп. опции
        if (designCheck && designCheck.checked) base += parseInt(designCheck.value);
        if (crmCheck && crmCheck.checked) base += parseInt(crmCheck.value);
        if (lkCheck && lkCheck.checked) base += parseInt(lkCheck.value);

        totalSpan.textContent = base.toLocaleString('ru-RU') + '₽';
    }

    // Навешиваем слушатели
    siteTypeRadios.forEach(radio => radio.addEventListener('change', updatePrice));
    pagesSelect.addEventListener('change', updatePrice);
    if (designCheck) designCheck.addEventListener('change', updatePrice);
    if (crmCheck) crmCheck.addEventListener('change', updatePrice);
    if (lkCheck) lkCheck.addEventListener('change', updatePrice);

    // Первоначальный расчёт
    updatePrice();

    // ===== FAQ АККОРДЕОН =====
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
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