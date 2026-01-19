document.addEventListener("DOMContentLoaded", () => {
  const e = document.getElementById("header");
  window.addEventListener("scroll", () => {
    5 < window.scrollY
      ? e.classList.add("sticky")
      : e.classList.remove("sticky");
  });
});
