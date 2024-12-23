// autofill tabs js

const appTabs = document.querySelectorAll("[data-view]");

appTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    appTabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    $("[data-content]").removeClass("active");
    $(`[data-content="${tab.dataset.view}"]`).addClass("active");
    tab.classList.add("active");
  });
});