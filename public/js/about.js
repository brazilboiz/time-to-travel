(() => {
    const refs = {
        button: document.querySelector(".tour-card__button"),
        content: document.querySelector(".about-content"),
    };

    const handleButtonClick = () => {
        refs.content.scrollIntoView({ behavior: "smooth" });
    };

    refs.button.addEventListener("click", handleButtonClick);
})();
