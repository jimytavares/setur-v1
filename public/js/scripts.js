console.log("Está funcionando, Top!");

$(window).scroll(function () {
    if ($(this).scrollTop() > 40) {
        $('.navbar').addClass('sticky-top');
    } else {
        $('.navbar').removeClass('sticky-top');
    }
});
