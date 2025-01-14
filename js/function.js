function animeBg(){
    const hd = $("header");
    const windowTop = $(window).scrollTop();

    if(windowTop > 0){
        hd.css("background-color","#000");
    }else{
        hd.css("background","linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 10% rgba(0, 0, 0, 0))");
    }
}

$(window).on("scroll", () => {
    animeBg();
})


function listeningMenuMobile() {
//abre e fecha o menu
$(".navbar_mobile").on("click", () => {
    $(".navbar").toggleClass("active");
})

//remove classe active
$(window).on("resize", () => {
    if ($(window).width() > 884) {
        $(".navbar").removeClass("active");
    }
})

}

listeningMenuMobile();


