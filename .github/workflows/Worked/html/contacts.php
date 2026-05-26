<?php 

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Контакты | Веб-студия Arcana_Nexus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/contacts.css">
    <script src="../js/contacts.js" defer></script>
</head>
<body>
    <!-- ШАПКА -->
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="../index.html">Arcana_Nexus</a>
            </div>
            <nav class="nav-menu">
                <ul class="nav-list">
                    <li><a href="../index.html">Главная</a></li>
                    <li><a href="portfolio.php">Портфолио</a></li>
                    <li><a href="process.php">Услуги</a></li>
                    <li><a href="price.php">Цены</a></li>
                    <li><a href="contacts.php" class="active">Контакты</a></li>
                </ul>
            </nav>
            <div class="burger" id="burgerBtn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <!-- Мобильное меню -->
        <div class="mobile-nav" id="mobileNav">
            <div class="close" id="closeBtn"><i class="fas fa-times"></i></div>
            <ul class="mobile-nav-list">
                <li><a href="../index.html">Главная</a></li>
                <li><a href="portfolio.php">Портфолио</a></li>
                <li><a href="process.php">Услуги</a></li>
                <li><a href="price.php">Цены</a></li>
                <li><a href="contacts.php" class="active">Контакты</a></li>
            </ul>
            <button class="mobile-btn">Связаться</button>
        </div>
    </header>

    <main>
        <!-- HERO КОНТАКТЫ -->
        <section class="contacts-hero">
            <div class="container">
                <h1 class="fade-up visible">Контакты</h1>
                <p class="fade-up visible delay-1">Свяжитесь с нами любым удобным способом. Мы всегда на связи и готовы обсудить ваш проект.</p>
            </div>
        </section>

        <!-- БЛОК КОНТАКТОВ И ФОРМЫ -->
        <section>
            <div class="container">
                <div class="contacts-grid">
                    <!-- Левая колонка: контактная информация -->
                    <div class="contact-info fade-up">
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="contact-text">
                                <h3>Телефон</h3>
                                <p><a href="tel:+79991234567">+7 (999) 123-45-67</a></p>
                                <p>Ежедневно с 10:00 до 20:00</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                            <div class="contact-text">
                                <h3>Email</h3>
                                <p><a href="mailto:hello@webminimal.ru">hello@webminimal.ru</a></p>
                                <p>Ответим в течение 2 часов</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="contact-text">
                                <h3>Офис</h3>
                                <p>г. Москва, ул. Тверская, д. 7</p>
                                <p>Бизнес-центр «Стандарт», офис 304</p>
                            </div>
                        </div>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-vk"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-telegram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>

                    <!-- Правая колонка: форма обратной связи -->
                    <div class="contact-form fade-up delay-1">
                        <h3 style="font-size: 24px; margin-bottom: 24px; color: var(--black);">Напишите нам</h3>
                        <form id="contactForm" onsubmit="event.preventDefault(); alert('Спасибо! Мы свяжемся с вами.');">
                            <div class="form-group">
                                <label for="name">Ваше имя *</label>
                                <input type="text" class="form-control" id="name" placeholder="Иван Иванов" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="ivan@example.com" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Сообщение *</label>
                                <textarea class="form-control" id="message" placeholder="Расскажите о вашем проекте..." required></textarea>
                            </div>
                            <button type="submit" class="btn-submit">Отправить сообщение</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- КАРТА -->
        <section class="map-section">
            <div class="container">
                <h2 class="fade-up">Как нас найти</h2>
                <div class="section-divider fade-up"></div>
                <div class="map-container fade-up">
                    <!-- Вместо iframe используем плейсхолдер. В реальном проекте можно вставить карту -->
                    <div class="map-placeholder">
                        <i class="fas fa-map"></i>
                        <p>Здесь будет карта проезда</p>
                        <p style="font-size: 14px; margin-top: 8px;">г. Москва, ул. Тверская, д. 7</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ФУТЕР -->
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <p><strong>Телефон:</strong> +7 (999) 123-45-67</p>
                <p><strong>Email:</strong> hello@webminimal.ru</p>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-vk"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-telegram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-behance"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <ul class="footer-menu">
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="portfolio.html">Портфолио</a></li>
                    <li><a href="services.html">Услуги</a></li>
                    <li><a href="prices.html">Цены</a></li>
                    <li><a href="contacts.html">Контакты</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <p>© 2025 WebMinimal. Все права защищены.</p>
                <p>Разработка сайтов в минималистичном стиле.</p>
            </div>
        </div>
        <div class="copyright">
            Сделано с любовью в WebMinimal
        </div>
    </footer>
        <!-- Декоративные геометрические фигуры (задний фон) -->
    <div class="decorations" aria-hidden="true">
        <div class="decor decor-1"></div>
        <div class="decor decor-2"></div>
        <div class="decor decor-3"></div>
    </div>
</body>
</html>