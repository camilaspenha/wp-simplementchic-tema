/*
 * Initiate glightbox
 */
const glightbox = GLightbox({
  selector: ".glightbox",
});

/* Scroll to Hash */
const links = document.querySelectorAll(
  'a[href^="#"]'
) as NodeListOf<HTMLAnchorElement>;

if (links) {
  links.forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = anchor.getAttribute("href")?.substring(1);
      if (targetId) scrollToHash(targetId);
    });
  });
}

const scrollToHash = (targetId: string) => {
  const targetElement = document.getElementById(targetId) as HTMLElement;
  if (!targetElement) return;

  const offsetPosition =
    targetElement.getBoundingClientRect().top + window.pageYOffset - 100; // 100px de margem
  window.scrollTo({
    top: offsetPosition,
    behavior: "smooth",
  });
};
let navmenulinks = document.querySelectorAll(
  ".menu-item a"
) as NodeListOf<HTMLAnchorElement>;

function navmenuScrollspy() {
  if (!navmenulinks) return;

  navmenulinks.forEach((navmenulink) => {
    if (!navmenulink.hash) return;

    let section = document.querySelector(navmenulink.hash) as HTMLElement;
    if (!section) return;

    let position = (window.scrollY + 200) as number;
    if (
      position >= section.offsetTop &&
      position <= section.offsetTop + section.offsetHeight
    ) {
      navmenulink.classList.add("active");
    } else {
      navmenulink.classList.remove("active");
    }
  });
}
window.addEventListener("load", navmenuScrollspy);
document.addEventListener("scroll", navmenuScrollspy);
