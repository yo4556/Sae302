document.addEventListener("DOMContentLoaded", () => {
  const e = document.getElementById("header");
  window.addEventListener("scroll", () => {
    5 < window.scrollY
      ? e.classList.add("sticky")
      : e.classList.remove("sticky");
  });
});


const progress = document.getElementById('progress');
const radius = progress.r.baseVal.value;
const circumference = 2 * Math.PI * radius;

progress.style.strokeDasharray = circumference;
progress.style.strokeDashoffset = circumference;

window.addEventListener('scroll', () => {
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
    let scrollPercent = scrollTop / scrollHeight;
    if(scrollPercent > 1) scrollPercent = 1;

    const offset = circumference * (1 - scrollPercent);
    progress.style.strokeDashoffset = offset;
});

const accordions = document.querySelectorAll(".accordion-item");

accordions.forEach((accordion) => {
  const header = accordion.querySelector(".accordion-header");
  const body = accordion.querySelector(".accordion-body");

  header.addEventListener("click", () => {
    // Optionnel : Fermer les autres accordéons quand on en ouvre un
    // accordions.forEach(item => {
    //   if (item !== accordion) {
    //     item.classList.remove("active");
    //     item.querySelector(".accordion-body").style.maxHeight = null;
    //   }
    // });

    // Basculer la classe active
    accordion.classList.toggle("active");

    // Gérer la hauteur pour l'animation
    if (accordion.classList.contains("active")) {
      body.style.maxHeight = body.scrollHeight + "px";
    } else {
      body.style.maxHeight = null;
    }
  });
});