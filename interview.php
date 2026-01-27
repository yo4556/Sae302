<?php
include("autres_pages/head.php");
?>
<title>Interview</title>
</head>
<body id="interview">
<?php
include("autres_pages/menu.php");
?>
</header>
<main id="main">
    <div class="disque">
        <img class="img_disque" src="img/vinyl_magenta.png">
    </div>
    <h1 class="center_f">The interview</h1>
    <p class="center_f intro-text">
        Now, let's dive into the complexity of musical genres. We met with an expert to understand why music unites us as much as it divides us. Click on the questions below to jump directly to the relevant part of the interview.
    </p>
    <h1 class="center_f">Listen to an Expert</h1>
    <div style="display: flex; justify-content: center; width: 100%;">
        <iframe 
            id="player" 
            src="https://www.youtube.com/embed/EBgzNhHLTmA?si=428Qfkt442D_F2Pa&enablejsapi=1&cc_load_policy=1&cc_lang_pref=en" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
        </iframe>
    </div>
    <section class="question">
        <h1 class="center_f">The questions</h1>
        <div class="accordion-wrapper">
            <div class="accordion-item">
                <div class="accordion-header">
                    <div class="header-left">
                        <img class="arrow-icon" src="img/play.svg" alt="arrow">
                        <div class="header-text">
                            <h2>Music in General - Questions 1 to 4</h2>
                            <p>Stereo-music</p>
                        </div>
                    </div>
                <span class="duration">3:14</span>
            </div>
            <div class="accordion-body">
                <ul>
                    <li><a href="#">1. Would you say that music today unites more than it divides?</a> <span>00:23</span></li>
                    <li><a href="#">2. Why do certain musical genres become markers of identity or belonging to a group?</a> <span>01:24</span></li>
                    <li><a href="#">3. Do you think there's a difference in behavior among concertgoers of one style versus another?</a> <span>02:17</span></li>
                    <li><a href="#">4. Do the phenomena of musical styles influencing each other create new connections between communities?</a> <span>03:37</span></li>
                </ul>
            </div>
        </div>

    <div class="accordion-item">
        <div class="accordion-header">
            <div class="header-left">
                <img class="arrow-icon" src="img/play.svg" alt="arrow">
                    <div class="header-text">
                        <h2>Prejudices and stereotypes - Questions 5 to 7</h2>
                        <p>Stereo-music</p>
                    </div>
            </div>
            <span class="duration">9:12</span>
        </div>
        <div class="accordion-body">
            <ul>
                <li>
                    <a href="#">5. What types of prejudices come up most often around different musical genres? </a>
                    <span>4:58</span>
                </li>
                <li>
                    <a href="#">6. Do you think this is a reality? Don't you think the prejudices come from the music itself? Or rather from the image conveyed by artists or the media?</a>
                    <span>5:55</span>
                </li>
                <li>
                    <a href="#">7. So, you think there are changes. But for you, for example, regarding rap, are there differences between the stereotypical image of rap today and the rap of the 90s?</a>
                    <span>6:43</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="accordion-item">
        <div class="accordion-header">
            <div class="header-left">
                <img class="arrow-icon" src="img/play.svg" alt="arrow">
                <div class="header-text">
                    <h2>Music and young people - Questions 8 to 12</h2>
                    <p>Stereo-music</p>
                </div>
            </div>
            <span class="duration">3:47</span>
        </div>
        <div class="accordion-body">
            <ul>
                <li><a href="#">8. In your opinion, what place does music occupy in the lives of young people today?</a> <span>8:10</span></li>
                <li><a href="#">9. And do you think that these young people have a different approach compared to older generations?</a> <span>8:44</span></li>
                <li><a href="#">10. Do you also think that social media influences young people's musical tastes?</a> <span>8:55</span></li>
                <li><a href="#">11. Okay. And the stereotypes and judgments that you often hear among young people regarding these styles, which ones do you hear most often?</a> <span>9:47</span></li>
                <li><a href="#">12. On that question, you mentioned your classes. In your classes, have you noticed that music, on the other hand, can bring some of your students together?</a> <span>10:40</span></li>
            </ul>
        </div>
    </div>

    <div class="accordion-item">
        <div class="accordion-header">
            <div class="header-left">
                <img class="arrow-icon" src="img/play.svg" alt="arrow">
                <div class="header-text">
                    <h2>Solution and opening - Questions 12 to 14</h2>
                    <p>Stereo-music</p>
                </div>
            </div>
            <span class="duration">3:47</span>
        </div>
        <div class="accordion-body">
            <ul>
                <li><a href="#">13. How would you react if you heard a student disparage a musical style or an artist?</a> <span>11:30</span></li>
                <li><a href="#">14. So, what advice would you give us to break down these stereotypes about a genre that prevent people from listening to it?</a> <span>12:30</span></li>
            </ul>
        </div>
    </div>

    <div class="center_f" style="margin-top: 40px; margin-bottom: 40px;">
        <a href="game.php" class="btn-continuer">Continue</a>
    </div>
</div>
</section>
    <section class="music_note_vroum">
        <img class="speaker" src="img/enceinte.svg" alt="Enceinte">
    
    <div class="notes-container">
        <img class="note" src="img/une_note.png">
        <img class="note" src="img/deux_notes.png">
        <img class="note" src="img/une_note.png">
        <img class="note" src="img/deux_notes.png">
        <img class="note" src="img/une_note.png">
        <img class="note" src="img/deux_notes.png">
    </div>
    </section>
</main>

<?php
include("autres_pages/footer.php");
?>