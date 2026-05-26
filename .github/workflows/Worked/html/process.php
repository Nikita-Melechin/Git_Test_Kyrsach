<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Услуги | Веб-студия Arcana_Nexus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/process.css">
    <script src="../js/process.js" defer></script>
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
                    <li><a href="process.php" class="active">Услуги</a></li>
                    <li><a href="price.php">Цены</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
                </ul>
                <button class="btn-header">Связаться</button>
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
                <li><a href="process.php" class="active">Услуги</a></li>
                <li><a href="price.php">Цены</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
            <button class="mobile-btn">Связаться</button>
        </div>
    </header>

    <main>
        <!-- HERO УСЛУГ -->
        <section class="services-hero">
            <div class="container">
                <h1 class="fade-up visible">Услуги</h1>
                <p class="fade-up visible delay-1">Комплексный подход к разработке: от идеи до готового продукта и его поддержки.</p>
            </div>
        </section>

        <!-- ОСНОВНЫЕ УСЛУГИ (СЕТКА) -->
        <section>
            <div class="container">
                <h2 class="fade-up">Что мы делаем</h2>
                <div class="section-divider fade-up"></div>
                <div class="services-grid">
                    <div class="service-card fade-up">
                        <div class="service-icon"><i class="fas fa-code"></i></div>
                        <h3>Разработка сайтов</h3>
                        <p>Лендинги, корпоративные сайты, интернет-магазины на современных технологиях.</p>
                    </div>
                    <div class="service-card fade-up delay-1">
                        <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
                        <h3>Веб-дизайн</h3>
                        <p>Уникальный минималистичный дизайн, прототипирование, редизайн.</p>
                    </div>
                    <div class="service-card fade-up delay-2">
                        <div class="service-icon"><i class="fas fa-cogs"></i></div>
                        <h3>Поддержка и SEO</h3>
                        <p>Техническая поддержка, доработки, поисковая оптимизация.</p>
                    </div>
                    <div class="service-card fade-up delay-3">
                        <div class="service-icon"><i class="fas fa-shopping-cart"></i></div>
                        <h3>Интернет-магазины</h3>
                        <p>Полнофункциональные магазины с корзиной, оплатой, интеграциями.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ДЕТАЛЬНОЕ ОПИСАНИЕ УСЛУГ (АККОРДЕОН) -->
        <section class="services-detail">
            <div class="container">
                <h2 class="fade-up">Подробнее о направлениях</h2>
                <div class="section-divider fade-up"></div>
                <div class="accordion fade-up">
                    <div class="accordion-item active">
                        <div class="accordion-header">
                            <h3>Разработка сайтов</h3>
                            <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="accordion-content">
                            <p>Мы создаём сайты любого уровня сложности: от простых лендингов до крупных порталов. Используем современные технологии (React, Vue, Node.js), обеспечиваем высокую скорость загрузки и адаптивность.</p>
                            <span class="service-price-range">от 50 000 ₽</span>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Веб-дизайн</h3>
                            <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="accordion-content">
                            <p>Разрабатываем уникальный дизайн в минималистичном стиле, ориентированный на пользовательский опыт. Создаём прототипы, адаптируем под мобильные устройства, прорабатываем микро-анимации.</p>
                            <span class="service-price-range">от 30 000 ₽</span>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Поддержка и SEO</h3>
                            <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="accordion-content">
                            <p>Обеспечиваем техническую поддержку, обновление контента, доработки функционала. Также проводим SEO-оптимизацию для роста позиций в поисковых системах.</p>
                            <span class="service-price-range">от 10 000 ₽/мес</span>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Интернет-магазины</h3>
                            <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="accordion-content">
                            <p>Разрабатываем полноценные интернет-магазины с каталогом, корзиной, личным кабинетом, интеграцией с платежными системами и CRM.</p>
                            <span class="service-price-range">от 150 000 ₽</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- КАК МЫ РАБОТАЕМ -->
        <section>
            <div class="container">
                <h2 class="fade-up">Как мы работаем над вашим проектом</h2>
                <div class="section-divider fade-up"></div>
                <div class="steps">
                    <div class="step fade-up">
                        <div class="step-icon">1</div>
                        <div class="step-text">
                            <h3>Брифинг</h3>
                            <p>Знакомство, анализ задач и целей</p>
                        </div>
                    </div>
                    <div class="step fade-up delay-1">
                        <div class="step-icon">2</div>
                        <div class="step-text">
                            <h3>Прототип</h3>
                            <p>Создание структуры и логики</p>
                        </div>
                    </div>
                    <div class="step fade-up delay-2">
                        <div class="step-icon">3</div>
                        <div class="step-text">
                            <h3>Дизайн</h3>
                            <p>Разработка визуальной концепции</p>
                        </div>
                    </div>
                    <div class="step fade-up delay-3">
                        <div class="step-icon">4</div>
                        <div class="step-text">
                            <h3>Вёрстка и разработка</h3>
                            <p>Чистый код, адаптивность</p>
                        </div>
                    </div>
                    <div class="step fade-up delay-4">
                        <div class="step-icon">5</div>
                        <div class="step-text">
                            <h3>Тестирование и запуск</h3>
                            <p>Проверка и публикация</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ПАКЕТЫ УСЛУГ (ТАРИФЫ) -->
        <section>
            <div class="container">
                <h2 class="fade-up">Пакеты услуг</h2>
                <div class="section-divider fade-up"></div>
                <div class="pricing-grid">
                    <!-- Базовый -->
                    <div class="pricing-card fade-up">
                        <h3>Базовый</h3>
                        <div class="pricing-price">50 000 ₽<span> / проект</span></div>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check"></i> Лендинг до 5 блоков</li>
                            <li><i class="fas fa-check"></i> Уникальный дизайн</li>
                            <li><i class="fas fa-check"></i> Адаптивная вёрстка</li>
                            <li><i class="fas fa-times"></i> Интеграция с CRM</li>
                            <li><i class="fas fa-times"></i> Личный кабинет</li>
                        </ul>
                        <button class="btn-pricing">Заказать</button>
                    </div>
                    <!-- Оптимальный (популярный) -->
                    <div class="pricing-card popular fade-up delay-1">
                        <div class="popular-tag">Популярный</div>
                        <h3>Оптимальный</h3>
                        <div class="pricing-price">120 000 ₽<span> / проект</span></div>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check"></i> Корпоративный сайт до 10 страниц</li>
                            <li><i class="fas fa-check"></i> Индивидуальный дизайн</li>
                            <li><i class="fas fa-check"></i> Адаптивность</li>
                            <li><i class="fas fa-check"></i> Интеграция с CRM</li>
                            <li><i class="fas fa-times"></i> Интернет-магазин</li>
                        </ul>
                        <button class="btn-pricing">Заказать</button>
                    </div>
                    <!-- Максимальный -->
                    <div class="pricing-card fade-up delay-2">
                        <h3>Максимальный</h3>
                        <div class="pricing-price">250 000 ₽<span> / проект</span></div>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check"></i> Интернет-магазин</li>
                            <li><i class="fas fa-check"></i> Уникальный дизайн</li>
                            <li><i class="fas fa-check"></i> Личный кабинет</li>
                            <li><i class="fas fa-check"></i> Интеграция с 1С / CRM</li>
                            <li><i class="fas fa-check"></i> SEO-оптимизация</li>
                        </ul>
                        <button class="btn-pricing">Заказать</button>
                    </div>
                </div>
                <p style="text-align: center; margin-top: 32px; color: var(--gray-light);">* Возможна индивидуальная комплектация под ваш проект</p>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta-block">
            <div class="container">
                <h2 class="fade-up">Начнём проект?</h2>
                <p class="fade-up delay-1">Оставьте заявку, и мы свяжемся с вами для консультации и предварительного расчёта.</p>
                <button class="btn-cta fade-up delay-2">Связаться</button>
            </div>
        </section>
    </main>

    <!-- ФУТЕР -->
    <footer id="contact">
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