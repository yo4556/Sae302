<?php include("autres_pages/head.php"); ?>
<title>Game - Behind The Sound</title>
</head>
<body id="game">
<?php include("autres_pages/menu.php"); ?>

<main>
    <div class="disque">
        <img class="img_disque" src="img/vinyl_violet.png">
    </div>

    <section id="game-container">
        <h1>Behind The Sound</h1>
        
        <div class="game-step active" id="step-1">
            <p class="description">Appearances shape our expectations.But music doesn’t always follow the rules.</br></br>
Drag each genre onto the person you think listens to it, based on their stereotypical appearance.</p>
            <div class="music-tags">
                <div class="tag" draggable="true" data-style="rock">Dramatic Rock</div>
                <div class="tag" draggable="true" data-style="classique">Classical</div>
                <div class="tag" draggable="true" data-style="techno">Techno</div>
                <div class="tag" draggable="true" data-style="metal">Metal</div>
                <div class="tag" draggable="true" data-style="rap">Rap</div>
            </div>
            <div class="characters-grid">
                <div class="char-card" data-answer="classique">
                    <div class="char-img"><img src="img/trad.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">People who listen to rap are often seen as wearing oversized streetwear, baggy hoodies, expensive sneakers, and "bling" or heavy jewelry.</div>
                </div>
                <div class="char-card" data-answer="rock">
                    <div class="char-img"><img src="img/goth.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">People who listen to metal are often seen as wearing all-black clothing, band t-shirts, long hair, leather jackets, and silver chains or studs.</div>
                </div>
                <div class="char-card" data-answer="rap">
                    <div class="char-img"><img src="img/rap.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">People who listen to classical are often seen as dressing in formal or "preppy" attire, such as tailored suits, cardigans, or spectacles, looking very polished and refined.</div>
                </div>
                <div class="char-card" data-answer="metal">
                    <div class="char-img"><img src="img/metal.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">People who listen to techno are often seen as wearing "industrial" or futuristic styles, neon colors, bucket hats, tinted sunglasses, and comfortable "rave" gear.</div>
                </div>
                <div class="char-card" data-answer="techno">
                    <div class="char-img"><img src="img/techno.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">People who listen to rock are often seen as wearing worn-out denim, vintage graphic tees, flannel shirts, and distressed boots or Converse.</div>
                </div>
            </div>
            <div class="extra-box">
                <h3>To go futher!</h3>
                <p>Stereotypical appearance is deceptive because it is merely a tool: “social subjects distinguish themselves by the distinctions they make.”* 
                    Wearing a particular style is a “practical affirmation of an inevitable difference”* so as not to look like everyone else. Often, this look 
                    is a “simple aesthetic pose”* unrelated to our deepest values, but the media prefers to “maintain the most worn-out negative clichés”* to simplify reality. 
                    This visual choice serves to “classify the classifier”* through a “self-presentation”* that sometimes masks a “weak ego.”* In reality, our “tastes are probably, 
                    above all, dislikes”*: we dress to reject a group rather than to express ourselves. Finally, the meaning of a look depends on “interpretation and interpreters”* 
                    in the face of “standardized products,” and not on the truth of the individual.</p>
            </div>
        </div>

        <div class="game-step" id="step-2">
            <p class="description">Behind every face, there’s a sound you don’t expect.
</br></br>Trust your instincts, make your choices, and see how appearances can be misleading.
Uncover what’s really behind the sound.</p>
            <div class="music-tags">
                <div class="tag" draggable="true" data-style="rap">Rap</div>
                <div class="tag" draggable="true" data-style="techno">Techno</div>
                <div class="tag" draggable="true" data-style="rock">Dramatic Rock</div>
                <div class="tag" draggable="true" data-style="metal">Metal</div>
                <div class="tag" draggable="true" data-style="classique">Classical</div>
            </div>
            <div class="characters-grid">
                <div class="char-card" data-answer="metal">
                    <div class="char-img"><img src="img/trad.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Lucienne is a hardworking, elegant young woman who is soft-spoken and kind. She plays acoustic guitar and is in a band. At first, she was hesitant, but her bandmates suggested she try listening to metal. She instantly loved it and is going to ask them if they can play some metal sometime.</div>
                </div>
                <div class="char-card" data-answer="rap">
                    <div class="char-img"><img src="img/goth.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Anna, a rebel at heart, loves to dress in gothic aesthetics. In middle school, she discovered rap music and has since fallen in love with many artists and the powerful, real messages they convey through rhythmic lyrics </div>
                </div>
                <div class="char-card" data-answer="classique">
                    <div class="char-img"><img src="img/rap.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Kevin discovered his passion for classical music while listening to his little brother play the piano. He started looking up classical piano playlists on YouTube and eventually explored orchestral pieces too. Sometimes, he even tries to learn a few simple pieces he likes on his brother’s piano.</div>
                </div>
                <div class="char-card" data-answer="techno">
                    <div class="char-img"><img src="img/metal.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Jérémy has been into music since he was 10, learning a wide range of instruments and exploring different music genres. Out of them all, he finds techno particularly energizing and fun, and he regularly goes to raves with his friends.</div>
                </div>
                <div class="char-card" data-answer="rock">
                    <div class="char-img"><img src="img/techno.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Jonathan, whose look can be as extreme as his personality, tried getting into electronic music but didn’t enjoy it. Instead, he found that the raw sound of rock instruments suited him best. He loves shouting the lyrics at the top of his lungs.</div>
                </div>
            </div>
        </div>

        <div class="game-step" id="step-3">
            <p class="description">What do you hear when you look at them? 
What kind of music do you think the members on our team listen to ? 
Have fun and discover our favorite music genres !</p>
            <div class="music-tags">
                <div class="tag" draggable="true" data-style="metal">Metalcore</div>
                <div class="tag" draggable="true" data-style="rap">Hip-Hop</div>
                <div class="tag" draggable="true" data-style="emo">Emo Rap</div>
                <div class="tag" draggable="true" data-style="break">Breakcore</div>
                <div class="tag" draggable="true" data-style="speed">Speedcore</div>
            </div>
            <div class="characters-grid">
                <div class="char-card" data-answer="speed">
                    <div class="char-img2"><img src="img/etan_vous.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                </div>
                <div class="char-card" data-answer="metal">
                    <div class="char-img2"><img src="img/hugo_vous.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>       
                </div>
                <div class="char-card" data-answer="break">
                    <div class="char-img2"><img src="img/lauren_vous.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>               
                </div>
                <div class="char-card" data-answer="emo">
                    <div class="char-img2"><img src="img/enzo_vous.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>        
                </div>
                <div class="char-card" data-answer="rap">
                    <div class="char-img2"><img src="img/yoan_vous.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>       
                </div>
            </div>
        </div>

        <div class="controls">
            <button id="verify-btn">Validate and show the answers.</button>
            <button id="next-btn" style="display: none;">Proceed to the next step</button>
            <a href="credit.php" id="credits-btn" style="display: none;">
        <button type="button">Continue</button>
    </a>
            <p id="game-feedback"></p>
        </div>
    </section>
</main>

<?php include("autres_pages/footer.php"); ?>