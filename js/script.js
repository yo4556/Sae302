// Scroll Progress Indicator
const progress = document.getElementById("progress");
const radius = progress.r.baseVal.value;
const circumference = 2 * Math.PI * radius;

progress.style.strokeDasharray = circumference;
progress.style.strokeDashoffset = circumference;

window.addEventListener("scroll", () => {
  const scrollTop =
    document.documentElement.scrollTop || document.body.scrollTop;
  const scrollHeight =
    document.documentElement.scrollHeight - window.innerHeight;
  let scrollPercent = scrollTop / scrollHeight;
  if (scrollPercent > 1) scrollPercent = 1;

  const offset = circumference * (1 - scrollPercent);
  progress.style.strokeDashoffset = offset;
});

// Start du iframe autoplay

var player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player("player", {
    events: {
      onReady: onPlayerReady,
    },
  });
}

function onPlayerReady(event) {
  console.log("Le lecteur est prêt.");
}

var tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

document.addEventListener("DOMContentLoaded", function () {
  const listItems = document.querySelectorAll(".accordion-body li");

  listItems.forEach((item) => {
    item.addEventListener("click", function (e) {
      e.preventDefault();

      const span = this.querySelector("span");
      if (!span) return;

      const timeStr = span.innerText.trim();

      if (timeStr && timeStr !== "00:00") {
        const seconds = hmsToSeconds(timeStr);

        if (player && typeof player.seekTo === "function") {
          player.seekTo(seconds, true);
          player.playVideo();

          document.getElementById("player").scrollIntoView({
            behavior: "smooth",
            block: "center",
          });
        }
      }
    });
  });
});

function hmsToSeconds(str) {
  var p = str.split(":"),
    s = 0,
    m = 1;

  while (p.length > 0) {
    s += m * parseInt(p.pop(), 10);
    m *= 60;
  }
  return s;
}

// Accordion Functionality

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

    accordion.classList.toggle("active");

    if (accordion.classList.contains("active")) {
      body.style.maxHeight = body.scrollHeight + "px";
    } else {
      body.style.maxHeight = null;
    }
  });
});

let currentStep = 1;
const totalSteps = 3;
let draggedTag = null;

function setupDragAndDrop() {
  const tags = document.querySelectorAll(".tag");
  const cards = document.querySelectorAll(".char-card");
  const containers = document.querySelectorAll(".music-tags");

  tags.forEach((tag) => {
    tag.addEventListener("dragstart", () => {
      draggedTag = tag;
      tag.style.opacity = "0.3";
    });
    tag.addEventListener("dragend", () => {
      tag.style.opacity = "1";
      draggedTag = null;
    });
  });

  cards.forEach((card) => {
    const dropArea = card.querySelector(".drop-zone");
    card.addEventListener("dragover", (e) => e.preventDefault());
    card.addEventListener("drop", (e) => {
      e.preventDefault();
      if (card.closest(".game-step").classList.contains("reveal-all")) return;

      const existingTag = dropArea.querySelector(".tag");
      if (existingTag) {
        document
          .querySelector(`#step-${currentStep} .music-tags`)
          .appendChild(existingTag);
      }
      dropArea.querySelector("span").style.display = "none";
      dropArea.appendChild(draggedTag);
    });
  });

  containers.forEach((container) => {
    container.addEventListener("dragover", (e) => e.preventDefault());
    container.addEventListener("drop", (e) => {
      e.preventDefault();
      container.appendChild(draggedTag);
      document.querySelectorAll(".drop-zone").forEach((dz) => {
        if (!dz.querySelector(".tag"))
          dz.querySelector("span").style.display = "block";
      });
    });
  });
}

setupDragAndDrop();

const verifyBtn = document.getElementById("verify-btn");
const nextBtn = document.getElementById("next-btn");
const feedback = document.getElementById("game-feedback");

verifyBtn.addEventListener("click", () => {
  const currentStepEl = document.getElementById(`step-${currentStep}`);
  const cards = currentStepEl.querySelectorAll(".char-card");
  let allPlaced = true;

  cards.forEach((card) => {
    if (!card.querySelector(".tag")) allPlaced = false;
  });

  if (!allPlaced) {
    feedback.innerText = "Veuillez remplir toutes les cases avant de valider !";
    feedback.style.color = "orange";
    return;
  }

  // Active l'affichage des explications ET de la box supplémentaire
  currentStepEl.classList.add("reveal-all");

  cards.forEach((card) => {
    const tag = card.querySelector(".tag");
    card.classList.add("reveal");

    if (tag.dataset.style === card.dataset.answer) {
      card.classList.add("correct");
    } else {
      card.classList.add("wrong");
    }
    tag.setAttribute("draggable", "false");
    tag.style.cursor = "default";
  });

  verifyBtn.style.display = "none";
  nextBtn.style.display = "inline-block";
  feedback.innerText = "Découvrez les explications et le complément d'info !";
  feedback.style.color = "white";
});

nextBtn.addEventListener("click", () => {
  if (currentStep < totalSteps) {
    document.getElementById(`step-${currentStep}`).classList.remove("active");
    currentStep++;
    document.getElementById(`step-${currentStep}`).classList.add("active");
    verifyBtn.style.display = "inline-block";
    nextBtn.style.display = "none";
    feedback.innerText = "";
    setupDragAndDrop();
  } else {
    feedback.innerText = "Félicitations, vous avez fini Behind The Sound !";
  }
});