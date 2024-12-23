document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".privacy-policy-content-inner");
    const buttons = document.querySelectorAll(".privacy-policy-list-item");

    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.5, 
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                buttons.forEach((btn) => btn.classList.remove("active"));

                const index = Array.from(sections).indexOf(entry.target);
                if (index !== -1) {
                    buttons[index].classList.add("active");
                }
            }
        });
    }, observerOptions);

    sections.forEach((section) => observer.observe(section));

    // Button click handler for scrolling
    buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
            sections[index].scrollIntoView({
                behavior: "smooth", 
                block: "center", 
            });
        });
    });
});
