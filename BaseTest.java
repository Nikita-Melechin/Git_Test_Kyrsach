package tests;

import com.codeborne.selenide.Configuration;
import com.codeborne.selenide.Selenide;
import com.codeborne.selenide.SelenideElement;
import org.junit.jupiter.api.AfterEach;
import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.BeforeEach;

import static com.codeborne.selenide.Selenide.$;
import static com.codeborne.selenide.Selenide.open;

public class BaseTest {

    @BeforeAll
    public static void setUp() {
        Configuration.browser = "chrome";
        Configuration.baseUrl = "http://localhost/site/Worked";
        Configuration.browserSize = "1920x1080";
        Configuration.timeout = 10000;
        Configuration.pageLoadTimeout = 30000;
        Configuration.screenshots = true;
        Configuration.savePageSource = true;
    }

    @BeforeEach
    public void openHomePage() {
        open("/index.html");
        Selenide.sleep(2000);
    }

    /** Прокручивает элемент в центр экрана, чтобы избежать перекрытия header */
    protected void scrollToCenter(String cssSelector) {
        SelenideElement el = $(cssSelector);
        Selenide.executeJavaScript("arguments[0].scrollIntoView({block: 'center'});", el);
        Selenide.sleep(300);
    }

    @AfterEach
    public void tearDown() {
        Selenide.closeWebDriver();
    }
}
