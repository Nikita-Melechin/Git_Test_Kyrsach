package tests;

import com.codeborne.selenide.Configuration;
import com.codeborne.selenide.Selenide;
import org.junit.jupiter.api.*;
import org.openqa.selenium.chrome.ChromeOptions;

import java.time.Duration;
import java.util.Collections;

import static com.codeborne.selenide.Condition.*;
import static com.codeborne.selenide.Selectors.*;
import static com.codeborne.selenide.Selenide.*;
import static org.assertj.core.api.Assertions.assertThat;

@DisplayName("Тесты страницы дизельных автомобилей Drom.ru (Хабаровск)")
public class DromDieselTest {

    private static final String BASE_URL = "https://habarovsk.drom.ru/auto/dizel/";

    @BeforeAll
    static void setup() {
        // Настройки браузера
        Configuration.browser = "chrome";
        Configuration.headless = false;               // видимый браузер
        Configuration.browserSize = "1920x1080";
        Configuration.timeout = 15000;                // таймаут ожидания элементов
        Configuration.pageLoadTimeout = 30000;
        Configuration.screenshots = true;
        Configuration.savePageSource = false;
        Configuration.clickViaJs = false;

        // Маскировка автоматизации
        ChromeOptions options = new ChromeOptions();
        options.addArguments("--user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36");
        options.addArguments("--disable-blink-features=AutomationControlled");
        options.addArguments("--disable-extensions");
        options.addArguments("--no-sandbox");
        options.setExperimentalOption("excludeSwitches", Collections.singletonList("enable-automation"));
        options.setExperimentalOption("useAutomationExtension", false);
        Configuration.browserCapabilities = options;
    }

    @BeforeEach
    void openPage() throws InterruptedException {
        Thread.sleep(2000); // имитация паузы перед открытием
        open(BASE_URL);
        // Ждём загрузки основного контента – появления фильтра марок или списка объявлений
        $("[data-bulletin-list='true']").shouldBe(visible, Duration.ofSeconds(20));
    }

    @AfterEach
    void closeBrowser() {
        Selenide.closeWebDriver(); // закрываем браузер после каждого теста (опционально)
    }

    // ======================== ТЕСТЫ ========================

    @Test
    @DisplayName("1. Проверка заголовка страницы")
    void pageTitleShouldContainDiesel() {
        String title = title();
        System.out.println("Заголовок страницы: " + title);
        assertThat(title).contains("Продажа автомобилей в Хабаровске");
        assertThat(title).contains("дизель");
    }

    @Test
    @DisplayName("2. Проверка наличия блока фильтров по маркам")
    void brandFilterBlockShouldBePresent() {
        $("[data-ftid='component_bulletin-filter']").shouldBe(visible);
        System.out.println("Блок фильтров отображается");
    }

    @Test
    @DisplayName("3. Проверка наличия популярных марок в фильтрах")
    void popularBrandsShouldBePresent() {
        // Ищем элементы, содержащие названия марок
        $("[data-ftid='component_bulletin-filter']").shouldHave(text("Toyota"));
        $("[data-ftid='component_bulletin-filter']").shouldHave(text("Nissan"));
        $("[data-ftid='component_bulletin-filter']").shouldHave(text("Honda"));
        System.out.println("Популярные марки найдены в фильтре");
    }

    @Test
    @DisplayName("4. Проверка наличия фильтра по году выпуска")
    void yearFilterShouldBePresent() {
        $("[data-ftid='bull_filter_year']").shouldBe(visible);
        System.out.println("Фильтр по году присутствует");
    }

    @Test
    @DisplayName("5. Проверка наличия фильтра по коробке передач")
    void transmissionFilterShouldBePresent() {
        $("[data-ftid='bull_filter_transmission']").shouldBe(visible);
        System.out.println("Фильтр по КПП присутствует");
    }

    @Test
    @DisplayName("6. Проверка наличия фильтра по объему двигателя")
    void engineVolumeFilterShouldBePresent() {
        $("[data-ftid='bull_filter_engine_volume']").shouldBe(visible);
        System.out.println("Фильтр по объему двигателя присутствует");
    }

    @Test
    @DisplayName("7. Проверка наличия фильтра по приводу")
    void driveFilterShouldBePresent() {
        $("[data-ftid='bull_filter_drive']").shouldBe(visible);
        System.out.println("Фильтр по приводу присутствует");
    }

    @Test
    @DisplayName("8. Проверка наличия списка объявлений")
    void bulletinListShouldBePresent() {
        $(".bulletinList").shouldBe(visible);
        System.out.println("Список объявлений отображается");
    }


    @Test
    @DisplayName("10. Проверка наличия пагинации (если объявлений > 1 страница)")
    void paginationShouldBePresentIfMany() {
        // Если есть кнопка "Показать ещё" или постраничная навигация
        if ($(".pagination").exists()) {
            $(".pagination").shouldBe(visible);
            System.out.println("Пагинация присутствует");
        } else {
            System.out.println("Пагинации нет (возможно, одна страница)");
        }
    }

    @Test
    @DisplayName("11. Проверка работы фильтра по марке Toyota")
    void filterByToyota() throws InterruptedException {
        // Нажимаем на марку Toyota в фильтре (если это ссылка)
        $("[data-ftid='component_bulletin-filter'] a[href*='toyota']").click();
        Thread.sleep(3000);
        // Проверяем, что в заголовках объявлений есть Toyota
        $$(".bulletinItem .bulletinTitle").first().shouldHave(text("Toyota"));
        System.out.println("Фильтр по Toyota применён");
        // Возвращаем исходный URL для чистоты следующего теста
        open(BASE_URL);
        $(".bulletinList").shouldBe(visible);
    }

    @Test
    @DisplayName("12. Проверка работы фильтра по году 2020")
    void filterByYear2020() throws InterruptedException {
        // Раскрываем фильтр года, выбираем 2020
        $("[data-ftid='bull_filter_year']").click();
        $$("[data-ftid='bull_filter_year'] .select__item").findBy(text("2020")).click();
        Thread.sleep(3000);
        // Проверяем, что в первом объявлении год >= 2020 (примерная проверка)
        String yearText = $(".bulletinItem .year").text();
        System.out.println("Год в первом объявлении: " + yearText);
        assertThat(yearText).contains("2020");
        // Сбрасываем фильтр
        open(BASE_URL);
        $(".bulletinList").shouldBe(visible);
    }

    @Test
    @DisplayName("13. Проверка сортировки по низкой цене")
    void sortByPriceAsc() throws InterruptedException {
        // Ищем селектор сортировки (обычно выпадающий список)
        $("[data-ftid='sorting_selector']").click();
        $$("[data-ftid='sorting_selector'] .select__item").findBy(text("с низкой ценой")).click();
        Thread.sleep(4000);
        // Проверяем, что цены идут по возрастанию (взять первые две цены)
        String firstPrice = $$(".bulletinItem .price").get(0).text().replaceAll("[^0-9]", "");
        String secondPrice = $$(".bulletinItem .price").get(1).text().replaceAll("[^0-9]", "");
        int first = Integer.parseInt(firstPrice);
        int second = Integer.parseInt(secondPrice);
        assertThat(first).isLessThanOrEqualTo(second);
        System.out.println("Сортировка по возрастанию цены работает");
        // Сброс сортировки
        open(BASE_URL);
        $(".bulletinList").shouldBe(visible);
    }

    @Test
    @DisplayName("14. Проверка наличия кнопки 'Показать телефон' в объявлении")
    void phoneButtonShouldBePresent() {
        // Первое объявление: кнопка показа телефона (может быть data-атрибутом)
        $(".bulletinItem .showPhone").shouldBe(visible);
        System.out.println("Кнопка 'Показать телефон' присутствует");
    }

    @Test
    @DisplayName("15. Проверка наличия ссылок на другие категории")
    void additionalCategoryLinksShouldBePresent() {
        // Ссылки на "Новые автомобили", "Автомобили с пробегом", "Автомобили из Японии" и т.п.
        $("a[href*='/auto/new/']").shouldBe(visible);
        $("a[href*='/auto/used/']").shouldBe(visible);
        $("a[href*='/auto/japan/']").shouldBe(visible);
        System.out.println("Ссылки на другие категории найдены");
    }
}