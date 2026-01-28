const progress = document.getElementById("progress"),
    radius = progress.r.baseVal.value,
    circumference = 2 * Math.PI * radius;
var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player("player", {
        events: {
            onReady: onPlayerReady
        }
    })
}

function onPlayerReady(e) {
    console.log("Le lecteur est prêt.")
}

progress.style.strokeDasharray = circumference, progress.style.strokeDashoffset = circumference, window.addEventListener("scroll", (() => {
    let e = (document.documentElement.scrollTop || document.body.scrollTop) / (document.documentElement.scrollHeight - window.innerHeight);
    e > 1 && (e = 1);
    const t = circumference * (1 - e);
    progress.style.strokeDashoffset = t
}));

var tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];

function hmsToSeconds(e) {
    for (var t = e.split(":"), r = 0, n = 1; t.length > 0;) r += n * parseInt(t.pop(), 10), n *= 60;
    return r
}

firstScriptTag.parentNode.insertBefore(tag, firstScriptTag), document.addEventListener("DOMContentLoaded", (function() {
    document.querySelectorAll(".accordion-body li").forEach((e => {
        e.addEventListener("click", (function(e) {
            e.preventDefault();
            const t = this.querySelector("span");
            if (!t) return;
            const r = t.innerText.trim();
            if (r && "00:00" !== r) {
                const e = hmsToSeconds(r);
                player && "function" == typeof player.seekTo && (player.seekTo(e, !0), player.playVideo(), document.getElementById("player").scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                }))
            }
        }))
    }))
}));

const accordions = document.querySelectorAll(".accordion-item");
accordions.forEach((e => {
    const t = e.querySelector(".accordion-header"),
        r = e.querySelector(".accordion-body");
    t.addEventListener("click", (() => {
        e.classList.toggle("active"), e.classList.contains("active") ? r.style.maxHeight = r.scrollHeight + "px" : r.style.maxHeight = null
    }))
}));

let currentStep = 1;
const totalSteps = 3;
let draggedTag = null;

function setupDragAndDrop() {
    const e = document.querySelectorAll(".tag"),
        t = document.querySelectorAll(".char-card"),
        r = document.querySelectorAll(".music-tags");
    e.forEach((e => {
        e.addEventListener("dragstart", (() => {
            draggedTag = e, e.style.opacity = "0.3"
        })), e.addEventListener("dragend", (() => {
            e.style.opacity = "1", draggedTag = null
        }))
    })), t.forEach((e => {
        const t = e.querySelector(".drop-zone");
        e.addEventListener("dragover", (e => e.preventDefault())), e.addEventListener("drop", (r => {
            if (r.preventDefault(), e.closest(".game-step").classList.contains("reveal-all")) return;
            const n = t.querySelector(".tag");
            n && document.querySelector(`#step-${currentStep} .music-tags`).appendChild(n), t.querySelector("span").style.display = "none", t.appendChild(draggedTag)
        }))
    })), r.forEach((e => {
        e.addEventListener("dragover", (e => e.preventDefault())), e.addEventListener("drop", (t => {
            t.preventDefault(), e.appendChild(draggedTag), document.querySelectorAll(".drop-zone").forEach((e => {
                e.querySelector(".tag") || (e.querySelector("span").style.display = "block")
            }))
        }))
    }))
}

setupDragAndDrop();

const verifyBtn = document.getElementById("verify-btn"),
    nextBtn = document.getElementById("next-btn"),
    creditsBtn = document.getElementById("credits-btn"),
    feedback = document.getElementById("game-feedback");

verifyBtn.addEventListener("click", (() => {
    const e = document.getElementById(`step-${currentStep}`),
        t = e.querySelectorAll(".char-card");
    let r = !0;
    if (t.forEach((e => {
            e.querySelector(".tag") || (r = !1)
        })), !r) return feedback.innerText = "Veuillez remplir toutes les cases avant de valider !", void(feedback.style.color = "orange");
    
    e.classList.add("reveal-all"), t.forEach((e => {
        const t = e.querySelector(".tag");
        e.classList.add("reveal"), t.dataset.style === e.dataset.answer ? e.classList.add("correct") : e.classList.add("wrong"), t.setAttribute("draggable", "false"), t.style.cursor = "default"
    })), verifyBtn.style.display = "none";

    // Correction ici : On vérifie si on est à la dernière étape
    if (currentStep === 3) {
        creditsBtn.style.display = "inline-block";
        feedback.innerText = "Congrats! You've finished the game.";
    } else {
        nextBtn.style.display = "inline-block";
    }
    
    feedback.style.color = "white"
}));

nextBtn.addEventListener("click", (() => {
    if (currentStep < 3) {
        document.getElementById(`step-${currentStep}`).classList.remove("active");
        currentStep++;
        document.getElementById(`step-${currentStep}`).classList.add("active");
        verifyBtn.style.display = "inline-block";
        nextBtn.style.display = "none";
        feedback.innerText = "";
        setupDragAndDrop();
    }
}));