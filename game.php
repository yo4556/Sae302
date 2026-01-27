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
            <p class="description">Étape 1/3 : Les Fondations</p>
            <div class="music-tags">
                <div class="tag" draggable="true" data-style="rock">Rock Dramatique</div>
                <div class="tag" draggable="true" data-style="classique">Classique</div>
                <div class="tag" draggable="true" data-style="techno">Techno</div>
                <div class="tag" draggable="true" data-style="metal">Metal</div>
                <div class="tag" draggable="true" data-style="rap">Rap</div>
            </div>
            <div class="characters-grid">
                <div class="char-card" data-answer="classique">
                    <div class="char-img"><img src="img/trad.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Le Rock est né dans les années 50, mélangeant blues et country.</div>
                </div>
                <div class="char-card" data-answer="rock">
                    <div class="char-img"><img src="img/goth.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">La musique classique désigne un répertoire savant ancré dans l'histoire européenne.</div>
                </div>
                <div class="char-card" data-answer="rap">
                    <div class="char-img"><img src="img/rap.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">La musique classique désigne un répertoire savant ancré dans l'histoire européenne.</div>
                </div>
                <div class="char-card" data-answer="metal">
                    <div class="char-img"><img src="img/metal.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">La musique classique désigne un répertoire savant ancré dans l'histoire européenne.</div>
                </div>
                <div class="char-card" data-answer="techno">
                    <div class="char-img"><img src="img/techno.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">La musique classique désigne un répertoire savant ancré dans l'histoire européenne.</div>
                </div>
            </div>
            <div class="extra-box">
                <h3>Le saviez-vous ?</h3>
                <p>Ces deux styles, bien que très différents, reposent sur des structures harmoniques communes issues de la théorie musicale occidentale.</p>
            </div>
        </div>

        <div class="game-step" id="step-2">
            <p class="description">Étape 2/3 : L'Ére Urbaine</p>
            <div class="music-tags">
                <div class="tag" draggable="true" data-style="rap">Rap</div>
                <div class="tag" draggable="true" data-style="techno">Techno</div>
                <div class="tag" draggable="true" data-style="rock">Rock Dramatique</div>
                <div class="tag" draggable="true" data-style="metal">Metal</div>
                <div class="tag" draggable="true" data-style="classique">Classique</div>
            </div>
            <div class="characters-grid">
                <div class="char-card" data-answer="metal">
                    <div class="char-img"><img src="img/trad.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Le Rap est une forme d'expression vocale appartenant au mouvement hip-hop.</div>
                </div>
                <div class="char-card" data-answer="rap">
                    <div class="char-img"><img src="img/goth.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">La Techno est née à Detroit, utilisant des synthétiseurs et des boîtes à rythmes.</div>
                </div>
                <div class="char-card" data-answer="classique">
                    <div class="char-img"><img src="img/rap.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">La Techno est née à Detroit, utilisant des synthétiseurs et des boîtes à rythmes.</div>
                </div>
                <div class="char-card" data-answer="techno">
                    <div class="char-img"><img src="img/metal.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">La Techno est née à Detroit, utilisant des synthétiseurs et des boîtes à rythmes.</div>
                </div>
                <div class="char-card" data-answer="rock">
                    <div class="char-img"><img src="img/techno.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">La Techno est née à Detroit, utilisant des synthétiseurs et des boîtes à rythmes.</div>
                </div>
            </div>
            <div class="extra-box">
                <h3>Culture et Technologie</h3>
                <p>L'essor de ces genres est lié à l'accessibilité nouvelle des machines (samplers, boîtes à rythmes) dans les milieux urbains.</p>
            </div>
        </div>

        <div class="game-step" id="step-3">
            <p class="description">Étape 3/3 : La Puissance</p>
            <div class="music-tags">
                <div class="tag" draggable="true" data-style="metal">Métalcore</div>
                <div class="tag" draggable="true" data-style="rap">Hip-Hop</div>
                <div class="tag" draggable="true" data-style="emo">Emo Rap</div>
                <div class="tag" draggable="true" data-style="break">Breakcore</div>
                <div class="tag" draggable="true" data-style="speed">Speedcore</div>
            </div>
            <div class="characters-grid">
                <div class="char-card" data-answer="speed">
                    <div class="char-img2"><img src="img/etan_vous.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Le Heavy Metal se caractérise par des guitares saturées et des rythmes denses.</div>
                </div>
                <div class="char-card" data-answer="metal">
                    <div class="char-img2"><img src="img/hugo_vous.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Le Heavy Metal se caractérise par des guitares saturées et des rythmes denses.</div>
                </div>
                <div class="char-card" data-answer="break">
                    <div class="char-img2"><img src="img/lauren_vous.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Le Heavy Metal se caractérise par des guitares saturées et des rythmes denses.</div>
                </div>
                <div class="char-card" data-answer="emo">
                    <div class="char-img2"><img src="img/enzo_vous.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Le Heavy Metal se caractérise par des guitares saturées et des rythmes denses.</div>
                </div>
                <div class="char-card" data-answer="rap">
                    <div class="char-img2"><img src="img/yoan_vous.png"></div>
                    <div class="drop-zone"><span>Déposez ici</span></div>
                    <div class="explanation">Le Heavy Metal se caractérise par des guitares saturées et des rythmes denses.</div>
                </div>
            </div>
            <div class="extra-box">
                <h3>L'amplification</h3>
                <p>Le Metal n'aurait jamais pu exister sans l'invention des amplificateurs à haute puissance et de la distorsion poussée à son maximum.</p>
            </div>
        </div>

        <div class="controls">
            <button id="verify-btn">Vérifier et voir les explications</button>
            <button id="next-btn" style="display: none;">Passer à l'étape suivante</button>
            <p id="game-feedback"></p>
        </div>
    </section>
</main>

<?php include("autres_pages/footer.php"); ?>