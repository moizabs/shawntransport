
if (screen.width < 979) {
    const navToggleBtn = document.querySelectorAll(".dropdown");
    const subMenuToggle = document.querySelectorAll(".sideMenu_");
    const navToggle = document.querySelector(".nav_toggle");
    const navMobile = document.querySelector(".header__menu");
    const closeNav = document.querySelector(".closeNav");
    navToggle.addEventListener("click", function(e) {
        e.preventDefault();
        navMobile.style.right = "0%";
    })
    closeNav.addEventListener("click", function(e) {
        e.preventDefault();
        navMobile.style.right = "-100%";
    })

    $(".header__menu-m li").has("ul").addClass("dropdownmain");
    navToggleBtn.forEach(element => {
        element.addEventListener("click", function(e) {
            e.preventDefault();
            element.parentElement.parentElement.classList.toggle("active");
            var subMenu = element.parentElement.nextElementSibling;
            if (subMenu.style.maxHeight) {
                subMenu.style.maxHeight = null;
                element.style.transform = "rotate(0deg)";
            } else {
                subMenu.style.maxHeight = subMenu.scrollHeight + "px";
                element.style.transform = "rotate(180deg)";
            }
        })
    });
}

$(".backToTop").on("click", function () {
    scroll({
        top: 0,
    })
})
window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    if (scroll >= 1000) {
        $(".backToTop").css({
            opacity: 1,
            cursor: "pointer",
            zindex: 9
        })
    } else {
        $(".backToTop").css({
            opacity: 0,
            zindex: 0


        })
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('.header').addClass("header_");
    } else {
        $('.header').removeClass("header_");
    }
});