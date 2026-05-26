package tests;

import com.codeborne.selenide.Selenide;
import com.codeborne.selenide.SelenideElement;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.DisplayName;
import org.junit.jupiter.api.Test;

import static com.codeborne.selenide.Condition.*;
import static com.codeborne.selenide.Selenide.*;

public class PricePageTest extends BaseTest {

    @Override
    @BeforeEach
    public void openHomePage() {
        open("/html/price.php");
        Selenide.sleep(2500);
    }

    @Test
    @DisplayName("Страница содержит заголовок Цены")
    void testPageHeading() {
        $("h1").shouldBe(visible).shouldHave(text("Цены"));
    }

    @Test
    @DisplayName("Калькулятор: дефолтная цена = 6 000₽")
    void testCalculatorDefaultValue() {
        scrollToCenter(".calculator");
        $("#totalPrice").shouldBe(visible)
                .should(matchText(".*6\\s*000\\s*₽.*"));
    }

    @Test
    @DisplayName("Калькулятор: изменение количества страниц меняет цену")
    void testCalculatorPagesChange() {
        scrollToCenter(".calculator");
        $("#pages").selectOptionByValue("5000");
        Selenide.sleep(500);
        $("#totalPrice").should(matchText(".*11\\s*000\\s*₽.*"));
    }

    @Test
    @DisplayName("Калькулятор: выбор корпоративного типа меняет цену")
    void testCalculatorCorpType() {
        scrollToCenter(".calculator");
        $("label[for='corp']").click();
        Selenide.sleep(500);
        $("#totalPrice").should(matchText(".*14\\s*500\\s*₽.*"));
    }

    @Test
    @DisplayName("Калькулятор: выбор индивидуального дизайна добавляет 3 000₽")
    void testCalculatorDesignIndividual() {
        scrollToCenter(".calculator");
        $("#design").setSelected(true);
        Selenide.sleep(500);
        $("#totalPrice").should(matchText(".*9\\s*000\\s*₽.*"));
    }

    @Test
    @DisplayName("Калькулятор: несколько опций дают корректную сумму")
    void testCalculatorMultipleOptions() {
        scrollToCenter(".calculator");
        $("#pages").selectOptionByValue("5000");
        $("#design").setSelected(true);
        $("#crm").setSelected(true);
        Selenide.sleep(500);
        $("#totalPrice").should(matchText(".*24\\s*000\\s*₽.*"));
    }

    @Test
    @DisplayName("Калькулятор: все опции вместе дают корректную сумму")
    void testCalculatorAllOptions() {
        scrollToCenter(".calculator");
        $("#pages").selectOptionByValue("10000");
        $("label[for='corp']").click();
        $("#design").setSelected(true);
        $("#crm").setSelected(true);
        $("#lk").setSelected(true);
        Selenide.sleep(500);
        $("#totalPrice").should(matchText(".*47\\s*500\\s*₽.*"));
    }

    @Test
    @DisplayName("FAQ: аккордеон открывается и закрывается")
    void testFaqAccordion() {
        scrollToCenter(".faq-item:first-child .faq-question");
        $(".faq-item:first-child .faq-question").click();
        Selenide.sleep(500);
        $(".faq-item:first-child").shouldHave(cssClass("active"));

        $(".faq-item:first-child .faq-question").click();
        Selenide.sleep(500);
        $(".faq-item:first-child").shouldNotHave(cssClass("active"));
    }
}
