package tests;

import com.codeborne.selenide.*;
import org.junit.jupiter.api.*;
import static com.codeborne.selenide.Condition.*;
import static com.codeborne.selenide.Selenide.*;
import static com.codeborne.selenide.WebDriverConditions.urlContaining;

public class HomePageTest extends BaseTest {
    @Test
    @DisplayName("Проверка навигации: ссылки в главном меню ведут на правильные страницы")
    void testMainMenuLinks() {
        // Главная страница уже открыта, проверяем активный пункт
        $(".nav-list a[href='index.html']").shouldBe(visible).shouldHave(cssClass("active"));

        // Портфолио
        $(".nav-list a[href='html/portfolio.php']").shouldBe(visible).click();
        webdriver().shouldHave(urlContaining("html/portfolio.php"));
        open("/index.html");

        // Услуги
        $(".nav-list a[href='html/process.php']").shouldBe(visible).click();
        webdriver().shouldHave(urlContaining("html/process.php"));
        open("/index.html");

        // Цены
        $(".nav-list a[href='html/price.php']").shouldBe(visible).click();
        webdriver().shouldHave(urlContaining("html/price.php"));
        open("/index.html");

        // Контакты
        $(".nav-list a[href='html/contacts.php']").shouldBe(visible).click();
        webdriver().shouldHave(urlContaining("html/contacts.php"));
    }

    @Test
    @DisplayName("Калькулятор: дефолтная цена (лендинг) = 6 000₽")
    void testCalculatorDefaultValue() {
        // Прокручиваем к калькулятору
        $("#calculator").scrollIntoView(true);
        // Ждём обновления цены (JS отработает)
        Selenide.sleep(1000);
        $("#totalPrice").shouldBe(visible)
                .should(matchText(".*6\\s*000\\s*₽.*"));
    }

    @Test
    @DisplayName("Калькулятор: при выборе 'Корпоративный' цена меняется на 14 500₽")
    void testCalculatorChangeType() {
        $("#calculator").scrollIntoView(true);
        Selenide.sleep(500);
        // Радио скрыто, кликаем по label
        $("label[for='corp']").shouldBe(visible).click();
        Selenide.sleep(500);
        $("#totalPrice").shouldBe(visible)
                .should(matchText(".*14\\s*500\\s*₽.*"));
    }

    @Test
    @DisplayName("Модальное окно: открытие и закрытие по кнопке")
    void testModalOpenClose() {
        // Кнопка "Связаться" в шапке
        $("#openModalBtnHeader").shouldBe(visible).click();
        // Модальное окно должно появиться
        $("#contactModal").shouldHave(cssClass("active"));
        $(".modal-overlay").shouldBe(visible);

        // Закрываем окно
        $("#closeModalBtn").shouldBe(visible).click();
        // Ждём завершения анимации закрытия
        Selenide.sleep(500);
        $(".modal-overlay").shouldNotBe(visible);
    }
}
