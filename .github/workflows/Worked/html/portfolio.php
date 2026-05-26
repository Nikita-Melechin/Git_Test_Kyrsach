<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Готовые решения | Веб-студия Arcana_Nexus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/portfolio.css">
    <style>
        /* Добавляем стиль для скрытых карточек */
        .project-card.hide {
            display: none;
        }
        /* Убедимся, что сетка адаптируется */
        .projects-grid {
            transition: all 0.3s ease;
        }
    </style>
    <script src="../js/portfolio.js" defer></script>
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
                    <li><a href="portfolio.php" class="active">Готовые решения</a></li>
                    <li><a href="process.php">Услуги</a></li>
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
                <li><a href="portfolio.php" class="active">Портфолио</a></li>
                <li><a href="process.php">Услуги</a></li>
                <li><a href="price.php">Цены</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
            <button class="mobile-btn">Связаться</button>
        </div>
    </header>

    <main>
        <!-- HERO ПОРТФОЛИО -->
        <section class="portfolio-hero">
            <div class="container">
                <h1 class="fade-up visible">Готовые решения</h1>
                <p class="fade-up visible delay-1">Примеры наших работ. Реальные кейсы для бизнеса из разных ниш.</p>
            </div>
        </section>

        <!-- ФИЛЬТРЫ -->
        <div class="container">
            <div class="portfolio-filters fade-up">
                <button class="filter-btn active" data-filter="all">Все проекты</button>
                <button class="filter-btn" data-filter="landing">Лендинги</button>
                <button class="filter-btn" data-filter="corp">Корпоративные</button>
                <button class="filter-btn" data-filter="shop">Интернет-магазины</button>
                <button class="filter-btn" data-filter="other">Другое</button>
            </div>
        </div>

        <!-- СЕТКА ПРОЕКТОВ (9 карточек) -->
        <section style="padding-top: 0;">
            <div class="container">
                <div class="projects-grid" id="projectsGrid">
                    <!-- Карточка 1 -->
                    <div class="project-card fade-up" data-category="landing">
                        <div class="card-image">
                            <img src="../img/img1.png" alt="Проект">
                            <a href="../sample/option1/option1.html" target="_blank" rel="noopener noreferrer"><div class="card-overlay">Смотреть проект</div></a>
                        </div>
                        <div class="card-content">
                            <h3>Лендинг “SmartFit”</h3>
                            <p class="project-category">Лендинг</p>
                            <p class="project-description">Посадочная страница для фитнес-клуба с формой записи.</p>
                        </div>
                    </div>
                    <!-- Карточка 2 -->
                    <div class="project-card fade-up delay-1" data-category="corp">
                        <div class="card-image">
                            <img src="../img/img2.jpg" alt="Проект">
                            <a href="../sample/option2/option0.html" target="_blank" rel="noopener noreferrer"><div class="card-overlay">Смотреть проект</div></a>
                        </div>
                        <div class="card-content">
                            <h3>Юридическая компания “LexPro”</h3>
                            <p class="project-category">Корпоративный</p>
                            <p class="project-description">Сайт с описанием услуг и блогом.</p>
                        </div>
                    </div>
                    <!-- Карточка 3 -->
                    <div class="project-card fade-up delay-2" data-category="shop">
                        <div class="card-image">
                            <img src="../img/img3.jpg" alt="Проект">
                            <a href="../sample/option3/option3.html" target="_blank" rel="noopener noreferrer"><div class="card-overlay">Смотреть проект</div></a>
                        </div>
                        <div class="card-content">
                            <h3>Интернет-магазин “Fashionista”</h3>
                            <p class="project-category">Интернет-магазин</p>
                            <p class="project-description">Одежда и аксессуары, корзина, интеграция с 1С.</p>
                        </div>
                    </div>
                    <!-- Карточка 4 -->
                    <div class="project-card fade-up" data-category="other">
                        <div class="card-image">
                            <img src="../img/img4.jpg" alt="Проект">
                            <a href="../sample/option4/option4.html" target="_blank" rel="noopener noreferrer"><div class="card-overlay">Смотреть проект</div></a>
                        </div>
                        <div class="card-content">
                            <h3>Портфолио фотографа</h3>
                            <p class="project-category">Другое</p>
                            <p class="project-description">Креативное портфолио с адаптивом.</p>
                        </div>
                    </div>
                    <!-- Карточка 5 -->
                    <div class="project-card fade-up delay-1" data-category="landing">
                        <div class="card-image">
                            <img src="../img/img5.jpg" alt="Проект">
                            <a href=""><div class="card-overlay">Смотреть проект</div></a>
                        </div>
                        <div class="card-content">
                            <h3>Лендинг “Digital Agency”</h3>
                            <p class="project-category">Лендинг</p>
                            <p class="project-description">Продвижение digital-услуг.</p>
                        </div>
                    </div>
                    <!-- Карточка 6 -->
                    <div class="project-card fade-up delay-2" data-category="corp">
                        <div class="card-image">
                            <img src="../img/img6.jpg" alt="Проект">
                            <a href=""><div class="card-overlay">Смотреть проект</div></a>
                        </div>
                        <div class="card-content">
                            <h3>Завод “Металлист”</h3>
                            <p class="project-category">Корпоративный</p>
                            <p class="project-description">Промышленный сайт с каталогом продукции.</p>
                        </div>
                    </div>
                    <!-- Карточка 7 -->
                    <div class="project-card fade-up" data-category="shop">
                        <div class="card-image">
                            <img src="../img/img7.jpeg" alt="Проект">
                            <a href=""><div class="card-overlay">Смотреть проект</div></a>
                        </div>
                        <div class="card-content">
                            <h3>Магазин чая “TeaMaster”</h3>
                            <p class="project-category">Интернет-магазин</p>
                            <p class="project-description">Фильтры, сорта, корзина.</p>
                        </div>
                    </div>
                    <!-- Карточка 8 -->
                    <div class="project-card fade-up delay-1" data-category="other">
                        <div class="card-image">
                            <img src="../img/img8.jpg" alt="Проект">
                            <div class="card-overlay">Смотреть проект</div>
                        </div>
                        <div class="card-content">
                            <h3>Сайт конференции</h3>
                            <p class="project-category">Другое</p>
                            <p class="project-description">Регистрация, программа, спикеры.</p>
                        </div>
                    </div>
                    <!-- Карточка 9 -->
                    <div class="project-card fade-up delay-2" data-category="landing">
                        <div class="card-image">
                            <img src="../img/img9.jpg" alt="Проект">
                            <div class="card-overlay">Смотреть проект</div>
                        </div>
                        <div class="card-content">
                            <h3>Лендинг “Коворкинг”</h3>
                            <p class="project-category">Лендинг</p>
                            <p class="project-description">Аренда рабочих мест.</p>
                        </div>
                    </div>
                </div>

                <!-- Пагинация / Кнопка "Загрузить ещё" -->
                <div class="pagination fade-up">
                    <button class="btn-load-more">Загрузить ещё</button>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta-block">
            <div class="container">
                <h2 class="fade-up">Обсудим ваш проект?</h2>
                <p class="fade-up delay-1">Расскажите о своей задаче — мы предложим оптимальное решение и предварительный расчёт.</p>
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
                    <li><a href="portfolio.html">Готовые решения</a></li>
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

    <!-- МОДАЛЬНОЕ ОКНО (попап) для детального просмотра -->
    <div class="modal" id="projectModal">
        <div class="modal-content">
            <span class="modal-close" id="modalClose"><i class="fas fa-times"></i></span>
            <img src="" alt="Project" class="modal-image" id="modalImage">
            <h3 class="modal-title" id="modalTitle"></h3>
            <p class="modal-category" id="modalCategory"></p>
            <p class="modal-description" id="modalDescription"></p>
            <a href="#" class="modal-link" id="modalLink">Посмотреть сайт</a>
        </div>
    </div>

    <!-- JavaScript для фильтрации -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');

            // Функция фильтрации
            function filterProjects(filterValue) {
                projectCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filterValue === 'all' || category === filterValue) {
                        card.classList.remove('hide');
                    } else {
                        card.classList.add('hide');
                    }
                });
            }

            // Обработчики кнопок фильтров
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Удаляем класс active у всех кнопок
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Добавляем текущей
                    this.classList.add('active');
                    // Получаем значение фильтра
                    const filter = this.getAttribute('data-filter');
                    filterProjects(filter);
                });
            });
        });
    </script>
</body>
</html>