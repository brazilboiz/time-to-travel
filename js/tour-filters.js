(() => {
  const refs = {
    countryFilter: document.querySelector(".country-filter"),
    countryImages: document.querySelectorAll(".country-filter__image"),
    countriesButton: document.querySelector(".tour-card__button"),
  };

  const activeFilters = {
    country: null,
  };

  const handleCountryFilterClick = (e) => {
    const country = e.target.getAttribute("alt");

    if (country) {
      activeFilters.country = country;

      e.target.classList.toggle("choosen");

      Array.from(refs.countryImages).forEach((countryImage) => {
        if (countryImage.getAttribute("alt") !== country) {
          countryImage.classList.remove("choosen");
        }
      });
    }
  };

  const scrollToCountries = () => {
    refs.countryFilter.scrollIntoView({ behavior: "smooth" });
  };

  refs.countriesButton.addEventListener("click", scrollToCountries);
  refs.countryFilter.addEventListener("click", handleCountryFilterClick);
})();
