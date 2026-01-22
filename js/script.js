// Scroll Progress Indicator
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

// Start du iframe autoplay

var player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    events: {
      'onReady': onPlayerReady
    }
  });
}

function onPlayerReady(event) {
  console.log("Le lecteur est prêt.");
}

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

document.addEventListener('DOMContentLoaded', function() {
  const listItems = document.querySelectorAll('.accordion-body li');

  listItems.forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      
      const span = this.querySelector('span');
      if (!span) return;

      const timeStr = span.innerText.trim();
      
      if (timeStr && timeStr !== "00:00") {
        const seconds = hmsToSeconds(timeStr);
        
        if (player && typeof player.seekTo === 'function') {
          player.seekTo(seconds, true);
          player.playVideo();
          
          document.getElementById('player').scrollIntoView({ 
            behavior: 'smooth', 
            block: 'center' 
          });
        }
      }
    });
  });
});

function hmsToSeconds(str) {
  var p = str.split(':'),
      s = 0, m = 1;

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