const tabLinks = document.querySelectorAll(".tabs-links a");
const tabPanels = document.querySelectorAll(".tabs-panel");

for (let el of tabLinks) {
    el.addEventListener("click", e => {
        e.preventDefault();

        document.querySelector(".tabs-links li.active").classList.remove("active");
        document.querySelector(".tabs-panel.active").classList.remove("active");

        const parentListItem = el.parentElement;
        parentListItem.classList.add("active");
        const index = [...parentListItem.parentElement.children].indexOf(parentListItem);

        const panel = [...tabPanels].filter(el => el.getAttribute("data-index") == index);
        panel[0].classList.add("active");
    });
}

const tabProductLinks = document.querySelectorAll(".product-single-tabs-links a");
const tabProductPanels = document.querySelectorAll(".product-single-tabs-panel");

for (let el of tabProductLinks) {
  el.addEventListener("click", e => {
    e.preventDefault();

    document.querySelector(".product-single-tabs-links li.active").classList.remove("active");
    document.querySelector(".product-single-tabs-panel.active").classList.remove("active");

    const parentListItem = el.parentElement;
    parentListItem.classList.add("active");
    const index = [...parentListItem.parentElement.children].indexOf(parentListItem);

    const panel = [...tabProductPanels].filter(el => el.getAttribute("data-index") == index);
    panel[0].classList.add("active");
  });
}

/*
const navButton = document.getElementById("navigation");
const header = document.getElementById("header");

navButton.addEventListener("click", e => {
    header.classList.toggle("header-toggle");
});*/
