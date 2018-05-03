var $cache = $(".design-mobileNav-cache");
var $slide = $(".design-mobileNav-side");
var $btn = $(".design-mobileNav-top-hamburger");
$cache.click(function () {
    $slide.css("width", "0");
    $cache.css("z-index", "-1");
    $cache.css("background-color", "rgba(0, 0, 0, 0)");
});
$btn.click(function () {
    $slide.css("width", "80%");
    $cache.css("z-index", "1");
    $cache.css("background-color", "rgba(0, 0, 0, 0.6)");
});