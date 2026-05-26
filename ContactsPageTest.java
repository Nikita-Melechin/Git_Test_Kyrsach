package tests;

import com.codeborne.selenide.Selenide;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.DisplayName;
import org.junit.jupiter.api.Test;

import static com.codeborne.selenide.Condition.*;
import static com.codeborne.selenide.Selenide.*;

public class ContactsPageTest extends BaseTest {

    @Override
    @BeforeEach
    public void openHomePage() {
        open("/html/contacts.php");
        Selenide.sleep(2000);
    }

    @Test
    @DisplayName("Страница содержит заголовок Контакты")
    void testPageHeading() {
        $("h1").shouldBe(visible).shouldHave(text("Контакты"));
    }

    @Test
    @DisplayName("Отображается контактный телефон")
    void testPhoneVisible() {
        $(".contact-text").shouldHave(text("+7 (999) 123-45-67"));
    }

    @Test
    @DisplayName("Отображается email")
    void testEmailVisible() {
        $(".contact-text").shouldHave(text("hello@webminimal.ru"));
    }

    @Test
    @DisplayName("Отображается адрес офиса")
    void testAddressVisible() {
        $(".contact-text").shouldHave(text("г. Москва, ул. Тверская, д. 7"));
    }

    @Test
    @DisplayName("Форма обратной связи: поля имя, email, сообщение видимы")
    void testFormFieldsVisible() {
        scrollToCenter("#contactForm");
        $("#name").shouldBe(visible);
        $("#email").shouldBe(visible);
        $("#message").shouldBe(visible);
    }

    @Test
    @DisplayName("Форма обратной связи: кнопка отправки присутствует и активна")
    void testSubmitButton() {
        scrollToCenter("#contactForm");
        $(".btn-submit").shouldBe(visible).shouldBe(enabled);
    }

    @Test
    @DisplayName("При попытке отправить пустую форму появляется сообщение об ошибке валидации")
    void testEmptyFormSubmissionShowsError() {
        scrollToCenter("#contactForm");
        // Отправляем пустую форму
        $(".btn-submit").click();
        Selenide.sleep(500);
        // Проверяем, что внутри формы появился статус с текстом
        $("#contactForm div:last-child").shouldBe(visible)
                .shouldHave(text("Пожалуйста, заполните все поля."));
    }

    @Test
    @DisplayName("При заполнении формы и отправке появляется статусное сообщение (сеть недоступна)")
    void testFilledFormSubmission() {
        scrollToCenter("#contactForm");
        // Заполняем поля
        $("#name").setValue("Иван");
        $("#email").setValue("ivan@example.com");
        $("#message").setValue("Тестовое сообщение");
        $(".btn-submit").click();
        Selenide.sleep(1000); // ждём асинхронный fetch
        // Так как /api/contact не существует, ожидаем ошибку сети
        $("#contactForm div:last-child").shouldBe(visible)
                .shouldHave(text("Сеть недоступна. Попробуйте позже."));
    }

}
