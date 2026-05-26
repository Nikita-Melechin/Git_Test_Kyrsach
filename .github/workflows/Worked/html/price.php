<?php 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Цены | Веб-студия Arcana_Nexus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/price.css">
    <script src="../js/price.js" defer></script>
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
                    <li><a href="price.php" class="active">Цены</a></li>
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
                <li><a href="process.php">Услуги</a></li>
                <li><a href="price.php" class="active">Цены</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
            <button class="mobile-btn">Связаться</button>
        </div>
    </header>

    <main>
        <!-- HERO ЦЕН -->
        <section class="prices-hero">
            <div class="container">
                <h1 class="fade-up visible">Цены</h1>
                <p class="fade-up visible delay-1">Прозрачная стоимость разработки: вы платите только за то, что нужно вашему проекту.</p>
            </div>
        </section>

        <!-- ФАКТОРЫ СТОИМОСТИ -->
        <section>
            <div class="container">
                <h2 class="fade-up">Из чего складывается цена</h2>
                <div class="section-divider fade-up"></div>
                <div class="price-factors">
                    <div class="factors-list">
                        <div class="factor-item fade-up">
                            <h4>Количество страниц</h4>
                            <p>Лендинг (1–5 стр.), корпоративный (5–10 стр.), многостраничный (более 10 стр.)</p>
                            <div class="price-range">
                                <div class="range-fill" style="width: 30%"></div>
                            </div>
                            <div class="range-labels">
                                <span>до 5 стр.</span>
                                <span>5–10 стр.</span>
                                <span>более 10</span>
                            </div>
                        </div>
                        <div class="factor-item fade-up delay-1">
                            <h4>Дизайн</h4>
                            <p>Типовой (на основе шаблона) / Индивидуальный</p>
                            <div class="price-range">
                                <div class="range-fill" style="width: 60%"></div>
                            </div>
                            <div class="range-labels">
                                <span>типовой</span>
                                <span>индивидуальный</span>
                            </div>
                        </div>
                        <div class="factor-item fade-up delay-2">
                            <h4>Формы обратной связи</h4>
                            <p>Простая форма, множественные формы, интеграция с CRM</p>
                            <div class="price-range">
                                <div class="range-fill" style="width: 50%"></div>
                            </div>
                            <div class="range-labels">
                                <span>1 форма</span>
                                <span>2–3 формы</span>
                                <span>CRM</span>
                            </div>
                        </div>
                        <div class="factor-item fade-up delay-3">
                            <h4>Калькуляторы</h4>
                            <p>Простой калькулятор, сложный с несколькими параметрами</p>
                            <div class="price-range">
                                <div class="range-fill" style="width: 40%"></div>
                            </div>
                            <div class="range-labels">
                                <span>нет</span>
                                <span>простой</span>
                                <span>сложный</span>
                            </div>
                        </div>
                    </div>
                    <div class="price-values fade-up delay-1">
                        <div class="value-item">
                            <span class="value-label">Лендинг (до 5 стр., типовой дизайн)</span>
                            <span class="value-number">от 6 000₽</span>
                        </div>
                        <div class="value-item">
                            <span class="value-label">Корпоративный (до 10 стр., инд. дизайн)</span>
                            <span class="value-number">от 14 500₽</span>
                        </div>
                        <div class="value-item">
                            <span class="value-label">Интернет-магазин (инд. дизайн + CRM)</span>
                            <span class="value-number">от 50 000₽</span>
                        </div>
                        <div class="value-item">
                            <span class="value-label">Доп. форма обратной связи</span>
                            <span class="value-number">+5 000₽</span>
                        </div>
                        <div class="value-item">
                            <span class="value-label">Калькулятор (сложный)</span>
                            <span class="value-number">+25 000₽</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- КАЛЬКУЛЯТОР СТОИМОСТИ (как на главной) -->
        <section>
            <div class="container">
                <h2 class="fade-up">Калькулятор стоимости</h2>
                <div class="section-divider fade-up"></div>
                <div class="calculator fade-up">
                    <div class="calc-row">
                        <div class="calc-group">
                            <label>Тип сайта</label>
                            <div class="radio-group" id="siteType">
                                <input type="radio" name="siteType" id="landing" value="6000" checked>
                                <label for="landing">Лендинг</label>
                                <input type="radio" name="siteType" id="corp" value="14500">
                                <label for="corp">Корпоративный</label>
                                <input type="radio" name="siteType" id="shop" value="50000">
                                <label for="shop">Интернет-магазин</label>
                            </div>
                        </div>
                        <div class="calc-group">
                            <label for="pages">Количество страниц</label>
                            <select id="pages">
                                <option value="0">до 5 страниц</option>
                                <option value="5000">5-10 страниц (+5 000₽)</option>
                                <option value="10000">более 10 страниц (+10 000₽)</option>
                            </select>
                        </div>
                    </div>
                    <div class="calc-row">
                        <div class="calc-group">
                            <label>Дополнительно</label>
                            <div class="checkbox-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" id="design" value="3000">
                                    <label for="design">Индивидуальный дизайн (+3 000₽)</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="crm" value="10000">
                                    <label for="crm">Разработка БД (+10 000₽)</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="lk" value="10000">
                                    <label for="lk">Личный кабинет (+10 000₽)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calc-total">
                        <span class="total-price" id="totalPrice">6 000₽</span>
                        <button class="btn-calc" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'});">Получить точный расчёт</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ ПО ЦЕНАМ -->
        <section>
            <div class="container">
                <h2 class="fade-up">Часто спрашивают о ценах</h2>
                <div class="section-divider fade-up"></div>
                <div class="faq-list fade-up">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Как рассчитывается итоговая стоимость?</h3>
                            <span class="faq-icon"><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>Мы учитываем количество страниц, сложность дизайна, необходимый функционал (формы, калькуляторы, интеграции). Итоговая цена складывается из суммы всех выбранных опций.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Есть ли скрытые платежи?</h3>
                            <span class="faq-icon"><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>Нет, мы работаем полностью прозрачно. Все расходы оговариваются на этапе договора. Дополнительные работы оплачиваются отдельно только с вашего согласия.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Можно ли разбить оплату на части?</h3>
                            <span class="faq-icon"><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>Да, мы предлагаем поэтапную оплату: 50% предоплата, 50% после завершения проекта. Для крупных проектов возможен индивидуальный график платежей.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Что входит в базовую стоимость?</h3>
                            <span class="faq-icon"><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="faq-answer">
                            <p>В базовую стоимость входит разработка дизайна, вёрстка, адаптивность, настройка базового функционала. Хостинг и домен оплачиваются отдельно.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta-block">
            <div class="container">
                <h2 class="fade-up">Нужен точный расчёт?</h2>
                <p class="fade-up delay-1">Оставьте заявку, и мы подготовим индивидуальное коммерческое предложение для вашего проекта.</p>
                <button class="btn-cta fade-up delay-2" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'});">Связаться</button>
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