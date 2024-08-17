"use strict";
const glightbox = GLightbox({
    selector: ".glightbox",
});
const links = document.querySelectorAll('a[href^="#"]');
if (links) {
    links.forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = anchor.getAttribute("href")?.substring(1);
            if (targetId)
                scrollToHash(targetId);
        });
    });
}
const scrollToHash = (targetId) => {
    const targetElement = document.getElementById(targetId);
    if (!targetElement)
        return;
    const offsetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - 100;
    window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
    });
};
let navmenulinks = document.querySelectorAll(".menu-item a");
function navmenuScrollspy() {
    if (!navmenulinks)
        return;
    navmenulinks.forEach((navmenulink) => {
        if (!navmenulink.hash)
            return;
        let section = document.querySelector(navmenulink.hash);
        if (!section)
            return;
        let position = (window.scrollY + 200);
        if (position >= section.offsetTop &&
            position <= section.offsetTop + section.offsetHeight) {
            navmenulink.classList.add("active");
        }
        else {
            navmenulink.classList.remove("active");
        }
    });
}
window.addEventListener("load", navmenuScrollspy);
document.addEventListener("scroll", navmenuScrollspy);
//# sourceMappingURL=main.js.map