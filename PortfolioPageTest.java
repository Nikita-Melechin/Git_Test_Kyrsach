package tests;

import com.codeborne.selenide.CollectionCondition;
import com.codeborne.selenide.Selenide;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.DisplayName;
import org.junit.jupiter.api.Test;

import static com.codeborne.selenide.Condition.*;
import static com.codeborne.selenide.Selenide.*;
import static org.assertj.core.api.Assertions.assertThat;

public class PortfolioPageTest extends BaseTest {
    @Override
    @BeforeEach
    public void openHomePage() {
        open("/html/portfolio.php");
        Selenide.sleep(2000);
    }

    @Test
    @DisplayName("Страница портфолио содержит заголовок")
    void testPageTitle() {
        $("h1").shouldBe(visible).shouldHave(text("Готовые решения"));
    }

    @Test
    @DisplayName("Все 9 проектов отображаются при фильтре 'Все проекты'")
    void testAllProjectsVisible() {
        $(".filter-btn[data-filter='all']").shouldHave(cssClass("active"));
        $$(".project-card").shouldHave(CollectionCondition.size(9));
        $$(".project-card").forEach(card -> card.shouldNotHave(cssClass("hide")));
    }

    @Test
    @DisplayName("Фильтр 'Лендинги' показывает только карточки с data-category='landing'")
    void testFilterLanding() {
        $(".filter-btn[data-filter='landing']").click();
        Selenide.sleep(500);
        $$(".project-card[data-category='landing']").forEach(card -> card.shouldNotHave(cssClass("hide")));
        $$(".project-card:not([data-category='landing'])").forEach(card -> card.shouldHave(cssClass("hide")));
    }

    @Test
    @DisplayName("Фильтр 'Корпоративные' показывает только корпоративные проекты")
    void testFilterCorp() {
        $(".filter-btn[data-filter='corp']").click();
        Selenide.sleep(500);
        $$(".project-card[data-category='corp']").forEach(card -> card.shouldNotHave(cssClass("hide")));
        $$(".project-card:not([data-category='corp'])").forEach(card -> card.shouldHave(cssClass("hide")));
    }

    @Test
    @DisplayName("Фильтр 'Интернет-магазины' работает корректно")
    void testFilterShop() {
        $(".filter-btn[data-filter='shop']").click();
        Selenide.sleep(500);
        $$(".project-card[data-category='shop']").forEach(card -> card.shouldNotHave(cssClass("hide")));
        $$(".project-card:not([data-category='shop'])").forEach(card -> card.shouldHave(cssClass("hide")));
    }

    @Test
    @DisplayName("Фильтр 'Другое' показывает только карточки с категорией other")
    void testFilterOther() {
        $(".filter-btn[data-filter='other']").click();
        Selenide.sleep(500);
        $$(".project-card[data-category='other']").forEach(card -> card.shouldNotHave(cssClass("hide")));
        $$(".project-card:not([data-category='other'])").forEach(card -> card.shouldHave(cssClass("hide")));
    }

    @Test
    @DisplayName("Активная кнопка фильтра подсвечивается")
    void testActiveFilterButton() {
        $(".filter-btn[data-filter='corp']").click();
        Selenide.sleep(300);
        $(".filter-btn[data-filter='corp']").shouldHave(cssClass("active"));
        $(".filter-btn[data-filter='all']").shouldNotHave(cssClass("active"));
    }

    @Test
    @DisplayName("При клике на карточку открывается модальное окно с деталями проекта")
    void testModalOpenWithProjectDetails() {
        $(".project-card").shouldBe(visible).click();
        Selenide.sleep(500);
        $("#projectModal").shouldHave(cssClass("active"));

        String expectedTitle = $(".project-card h3").getText();
        $("#modalTitle").shouldHave(text(expectedTitle));
        $("#modalCategory").shouldNotBe(empty);
        $("#modalDescription").shouldNotBe(empty);
        // Проверка, что атрибут src не пуст, через AssertJ
        String src = $("#modalImage").shouldHave(attribute("src")).getAttribute("src");
        assertThat(src).isNotEmpty();
    }

    @Test
    @DisplayName("Закрытие модального окна по крестику")
    void testModalCloseByButton() {
        $(".project-card").click();
        Selenide.sleep(500);
        $("#projectModal").shouldHave(cssClass("active"));
        $("#modalClose").click();
        Selenide.sleep(500);
        $("#projectModal").shouldNotHave(cssClass("active"));
    }

    @Test
    @DisplayName("Закрытие модального окна кликом на оверлей")
    void testModalCloseByOverlay() {
        $(".project-card").click();
        Selenide.sleep(500);
        $("#projectModal").shouldHave(cssClass("active"));
        $("#projectModal").click();
        Selenide.sleep(500);
        $("#projectModal").shouldNotHave(cssClass("active"));
    }
}
