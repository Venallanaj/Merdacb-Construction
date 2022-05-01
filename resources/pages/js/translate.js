function googleTranslateElementInit() {
    new google.translate.TranslateElement(
        {
            pageLanguage: "sw",
            includedLanguages: "en",
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            multilanguagePage: true,
            gaTrack: true,
        },
        "google_translate_element"
    );
}

jQuery(document).ready(function ($) {
    $(".menu-traslate-header ul li a").click(function (event) {
        window.location = $(this).attr("href");
        location.reload();
    });
});
