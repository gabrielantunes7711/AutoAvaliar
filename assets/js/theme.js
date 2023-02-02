/* ------- General ------- */
const swiperHero = new Swiper(".slide-hero", {
  loop: true,
  speed: 500,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".btn-next",
    prevEl: ".btn-prev",
  },
});

const forWhoItems = document.querySelectorAll(".for-who-infos ul li a");
const forWhoCards = document.querySelectorAll(".for-who-card");

for (const item of forWhoItems) {
  item.addEventListener("click", (event) => {
    event.preventDefault();
    const el = event.target;
    const itemId = el.getAttribute("href").replace("#", "");

    for (const item of forWhoItems) {
      if (el !== item) {
        item.classList.remove("selected");
      } else {
        el.classList.add("selected");
      }
    }

    for (const card of forWhoCards) {
      if (card.id === itemId) {
        card.style.display = "flex";
      } else {
        card.style.display = "none";
      }
    }
  });
}
/* ------- Mobile ------- */
let screen = window.innerWidth;

window.addEventListener("resize", () => {
  screen = window.innerWidth;
});

const menuMobileBtn = document.querySelector(".mobile-btn");
const containerMenuMobile = document.querySelector(".container-menu-mobile");
const menuMobileItems = containerMenuMobile.querySelectorAll(
  "ul .menu-item-has-children"
);

menuMobileBtn.addEventListener("click", () => {
  containerMenuMobile.classList.toggle("open");
  menuMobileBtn.classList.toggle("open");
});

for (let item of menuMobileItems) {
  item = item.firstElementChild;
  item.addEventListener("click", (evt) => {
    const el = evt.target;
    const submenu = el.parentNode.querySelector("ul");
    const allOpenSubmenu = document.querySelectorAll(
      ".container-menu-mobile .open"
    );
    let submenuHeight = 0;
    if ((el.tagName = "a" && screen <= 1366)) {
      evt.preventDefault();

      console.log(el);

      for (const submenu of allOpenSubmenu) {
        if (submenu !== el.nextElementSibling) {
          submenu.classList.remove("open");
          submenu.style.height = null;
        }
      }

      submenu.classList.toggle("open");

      if (submenu.classList.contains("open")) {
        for (const children of submenu.children) {
          submenuHeight += children.offsetHeight;
        }

        submenu.style.height = submenuHeight + "px";
      } else {
        submenu.style.height = null;
      }
    }
  });
}

/* ------- Desktop ------- */
const allSubmenu = document.querySelectorAll(".main-header .sub-menu");

function mainMenuColumns() {
  if (screen > 1366) {
    for (const submenu of allSubmenu) {
      const columns = Math.ceil((submenu.children.length - 1) / 4);
      if (columns > 1) {
        submenu.classList.add("two-columns");
      }
    }
  }
}
mainMenuColumns();

window.addEventListener("resize", () => {
  mainMenuColumns();
});

const callMenuSearchBtn = document.querySelector(".call-menu-search");
const menuSearch = document.querySelector(".menu-mobile-search");

callMenuSearchBtn.addEventListener("click", () => {
  callMenuSearchBtn.classList.toggle("open");
  menuSearch.classList.toggle("open");
});
