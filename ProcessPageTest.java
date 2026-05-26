package tests;

import com.codeborne.selenide.CollectionCondition;
import com.codeborne.selenide.Selenide;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.DisplayName;
import org.junit.jupiter.api.Test;

import static com.codeborne.selenide.Condition.*;
import static com.codeborne.selenide.Selenide.*;

public class ProcessPageTest extends BaseTest {

    @Override
    @BeforeEach
    public void openHomePage() {
        open("/html/process.php");
        Selenide.sleep(2000);
    }

    @Test
    @DisplayName("Страница услуг содержит заголовок и описание")
    void testPageHeading() {
        $("h1").shouldBe(visible).shouldHave(text("Услуги"));
        $(".services-hero p").shouldBe(visible)
                .shouldHave(text("Комплексный подход к разработке: от идеи до готового продукта и его поддержки."));
    }

    @Test
    @DisplayName("На странице отображаются 4 карточки услуг")
    void testServiceCardsCount() {
        $$(".service-card").shouldHave(CollectionCondition.size(4));
    }

    @Test
    @DisplayName("Аккордеон: первый элемент активен по умолчанию")
    void testAccordionFirstActive() {
        $(".accordion-item:first-child").shouldHave(cssClass("active"));
        $(".accordion-item:nth-child(2)").shouldNotHave(cssClass("active"));
        $(".accordion-item:nth-child(3)").shouldNotHave(cssClass("active"));
        $(".accordion-item:nth-child(4)").shouldNotHave(cssClass("active"));
    }

    @Test
    @DisplayName("Аккордеон: клик по второму элементу активирует его и деактивирует первый")
    void testAccordionToggle() {
        $(".accordion-item:nth-child(2) .accordion-header").scrollIntoView(true).click();
        Selenide.sleep(500);
        $(".accordion-item:nth-child(2)").shouldHave(cssClass("active"));
        $(".accordion-item:first-child").shouldNotHave(cssClass("active"));
    }

    @Test
    @DisplayName("На странице 3 тарифных плана")
    void testPricingCardsCount() {
        $$(".pricing-card").shouldHave(CollectionCondition.size(3));
    }

    @Test
    @DisplayName("Кнопка 'Заказать' в тарифах присутствует и кликабельна")
    void testPricingOrderButton() {
        $(".btn-pricing").scrollIntoView(true).shouldBe(visible).shouldBe(enabled);
    }

    @Test
    @DisplayName("На странице отображаются 5 шагов работы")
    void testStepsCount() {
        $$(".step").shouldHave(CollectionCondition.size(5));
    }
}
