(() => {
  const refs = {
    burger: document.querySelector(".sidebar-handler"),
    sidebar: document.querySelector(".sidebar"),
  };

  let isOpen = false;

  const handleBurgerClick = (e) => {
    e.stopPropagation();

    isOpen = !isOpen;
    refs.sidebar.classList.toggle("open");
    refs.burger.classList.toggle("is-active");

    document.body.classList.toggle("overflow-hidden");
  };

  refs.burger.addEventListener("click", handleBurgerClick);

  // To handle sidebar dismiss
  const handleDocumentClick = (e) => {
    if (isOpen && !refs.sidebar.contains(e.target)) {
      isOpen = false;
      refs.sidebar.classList.toggle("open");
      refs.burger.classList.toggle("is-active");
      document.body.classList.toggle("overflow-hidden");
    }
  };

  document.addEventListener("click", handleDocumentClick);
})();
