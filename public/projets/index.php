<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CHRZ Development</title>

        <link rel="icon" href="https://avatars.githubusercontent.com/u/67024770?s=400&u=24615cb4001020dbe7900d45f8c85a9c3c5d0725&v=4">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <div id="iconSectionNavBar1">
                <img id="iconNavBar1" src="../res/logos/beetleAnimated.gif">
                <p><b>CHRZ Development</b></p>
            </div>

            <div id="icon-drop-down-navigation-bar"></div>

            <div id="drop-down-menu">
                <p><a href="../index.php">ACCEUIL</a></p>
                <p><a href="/index.php">PROJETS</a></p>
                <p><a href="../skills/index.php">COMPETENCE</a></p>
                <p><a href="../contact/index.php">CONTACT</a></p>
            </div>

            <!-- Top nav bar -->
            <div id="sectionNavBar1">
                <nav id="nav1Button0"
                     class="navBar1Button0  navBar1"
                     onclick="window.location.href = '../index.php'">
                    <img src="https://eapi.pcloud.com/getpubthumb?code=XZPADJZYccxT6nA3yyTM0c5FQxYffcV8G2X&linkpassword=undefined&size=256x64&crop=0&type=auto"
                         alt="Button img">
                    <span><b>ACCUEIL</b></span>
                </nav>
                <nav id="nav1Button1"
                     class="navBar1Button1  navBar1"
                     onclick="window.location.href = '/index.html'">
                    <img src="https://eapi.pcloud.com/getpubthumb?code=XZPADJZYccxT6nA3yyTM0c5FQxYffcV8G2X&linkpassword=undefined&size=256x64&crop=0&type=auto"
                         alt="Button img">
                    <span><b>PROJETS</b></span>
                </nav>
                <nav id="nav1Button2"
                     class="navBar1Button2  navBar1"
                     onclick="window.location.href = '../skills/index.php'">
                    <img src="https://eapi.pcloud.com/getpubthumb?code=XZPADJZYccxT6nA3yyTM0c5FQxYffcV8G2X&linkpassword=undefined&size=256x64&crop=0&type=auto"
                         alt="Button img">
                    <span><b>COMPETENCE</b></span>
                </nav>
                <nav id="nav1Button3"
                     class="navBar1Button3  navBar1"
                     onclick="window.location.href = '../contact/index.php'">
                    <img src="https://eapi.pcloud.com/getpubthumb?code=XZPADJZYccxT6nA3yyTM0c5FQxYffcV8G2X&linkpassword=undefined&size=256x64&crop=0&type=auto"
                         alt="Button img">
                    <span><b>CONTACT</b></span>
                </nav>
            </div>
        </header>

        <main>
            <!-- Web site banner -->
            <div id="homeTop">
                <img src="https://eapi.pcloud.com/getpubthumb?code=XZKV1JZPoL9BLPDMX0RLURHyXQ8k4UNUwmV&linkpassword=undefined&size=1920x1080&crop=0&type=auto">
            </div>
            <div class="woodBar" style="position: absolute; top: 64px; width: 100%; box-shadow: 0 2px 15px black; z-index: -1;"></div>

            <div style="border-bottom: solid #3f2341 1px; ">
                <p style="margin-left: 5%; font-family: 'Press Start 2P', cursive;">Projets personnel</p>
            </div>

            <div class="vitrineProjet">
                <!-- SuperMarioBros 3 -->
                <div class="sectionsDevInProgress">
                    <!-- Image illustration -->
                    <div class="illustrationSection">
                        <img id="illustrationSection0img0" src="https://github.com/NaulaN/CHRZ-development_website/blob/master/res/illustration-Animated-Super-Mario-Bros3.gif?raw=true"
                             style="grid-column-start: 1; grid-column-end: 1; grid-row-start: 1; grid-row-end: 1;">
                        <img id="illustrationSection0img1" src="https://eapi.pcloud.com/getpubthumb?code=XZSiDJZdUfzK0lMLrfNr88Iyw9zXfhax63V&linkpassword=undefined&size=620x345&crop=0&type=auto"
                             style="grid-column-start: 1; grid-column-end: 1; grid-row-start: 1; grid-row-end: 1;">
                    </div>

                    <!-- little information -->
                    <section class="informationSections">
                        <h1 style="margin-top: -3%; font-size: 75%; font-family: 'Press Start 2P', cursive;"><u><b>SuperMarioBros 3</b></u></h1>
                        <p>Une copie du jeux SuperMarioBros 3 est en cours de développement !</p>
                        <p>Ce jeux est disponible en tant que bêta.</p>
                        <p>Codé uniquement sur le langage Python et grâce à la librairie pygame.</p>
                        <p>Plus de détails sur ce projets, vous pouvez vous y rendre dans
                            <u onclick="window.location.href = 'index.html'">projets</u>
                            ou bien sur le
                            <u onclick="window.location.href = 'https://github.com/NaulaN/SuperMarioBros3-pygame'">Github</u>
                            du code source
                        </p>
                    </section>

                    <!-- Logo for access the project -->
                    <section>
                        <img class="animSocialNetwork"
                             style="width: 10%; margin-left: 40%; cursor: pointer;"
                             onclick="window.location.href = 'https://github.com/NaulaN/SuperMarioBros3-pygame'"
                             src="https://cdn-icons-png.flaticon.com/512/25/25231.png"
                             alt="Github logo">
                    </section>
                </div>

                <!-- Escarbot project -->
                <div class="sectionsDevInProgress"
                     style="grid-column-start: 3; grid-column-end: 3; grid-row: 1;">
                    <!-- Image illustration -->
                    <div class="illustrationSection">
                        <img src="https://camo.githubusercontent.com/6b78d5078db1fa1b404e34f301dc43ad51adb91980acf9ac6134fda3ed2b67a8/68747470733a2f2f656170692e70636c6f75642e636f6d2f6765747075627468756d623f636f64653d585a526964305a544470586a4a744774584862324d6a784a4236773537764d42345630266c696e6b70617373776f72643d756e646566696e65642673697a653d31303738783139302663726f703d3026747970653d6175746f">
                    </div>

                    <!-- little information -->
                    <section class="informationSections">
                        <h1 style="margin-top: -3%; font-size: 75%; font-family: 'Press Start 2P', cursive;"><u><b>Escarbot (Bot Discord)</b></u></h1>
                        <p>Un bot discord multi-usage !</p>
                        <p>En cours de migration vers le langage Java pour cause de compatibilité et de support.</p>
                        <p>Sera pour le coup codé en Java mais, il est toujours en Python</p>
                        <p>Plus de détails, dans
                            <u onclick="window.location.href = 'index.html'">projets</u>
                            ou bien sur le
                            <u onclick="window.location.href = 'https://github.com/NaulaN/Escarbot-java'">Github</u>
                            du code source
                        </p>
                    </section>

                    <!-- Logo for access the project -->
                    <section>
                        <img style="display: inline-block; margin-left: 15%; width: 10%;"
                             src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg">
                        <img class="animSocialNetwork"
                             style="width: 10%; cursor: pointer;"
                             onclick="window.location.href = 'https://github.com/NaulaN/Escarbot-py'"
                             src="https://cdn-icons-png.flaticon.com/512/25/25231.png"
                             alt="Github logo">
                        <img style="display: inline-block; margin-left: 25%; width: 8%;"
                             src="http://assets.stickpng.com/images/58480979cef1014c0b5e4901.png">
                        <img class="animSocialNetwork"
                             style="width: 10%; cursor: pointer;"
                             onclick="window.location.href = 'https://github.com/NaulaN/Escarbot-java'"
                             src="https://cdn-icons-png.flaticon.com/512/25/25231.png"
                             alt="Github logo">
                    </section>
                </div>

                <!-- AventuraBuild project -->
                <div class="sectionsDevInProgress"
                     style="grid-column-start: 4; grid-column-end: 4; grid-row: 1;">
                    <!-- Image illustration -->
                    <div class="illustrationSection">
                        <img src="https://eapi.pcloud.com/getpubthumb?code=XZCGg0ZgcAoYt2G81p98A4AOu5bymo8IWfk&linkpassword=undefined&size=1280x720&crop=0&type=auto">
                    </div>

                    <!-- little information -->
                    <section class="informationSections">
                        <h1 style="margin-top: -3%; font-size: 75%; font-family: 'Press Start 2P', cursive;"><u><b>AventuraBuild ! Serveur MC orienté survie et build</b></u></h1>
                        <p>Ce serveur est privée et accueille les personnes matures avec un minimum de confiance.</p>
                        <p>Aujourd'hui, il compte un faible effectif d'environ 11 personnes</p>
                        <p>Serveur concu entièrement par CHRZASZCZ Naulan</p>
                        <p>Plus de détails, sur le
                            <u onclick="window.location.href = 'https://www.aventurabuild.ovh'">site</u>
                            ou bien sur le
                            <u onclick="window.location.href = 'http://discord.aventurabuild.ovh'">Discord</u>
                            du serveur
                        </p>
                    </section>

                    <!-- Logo for access the project -->
                    <section>
                        <img class="animSocialNetwork"
                             style="margin-left: 35%; width: 10%; cursor: pointer;"
                             onclick="window.location.href = 'http://discord.aventurabuild.ovh'"
                             src="https://seeklogo.com/images/D/discord-logo-134E148657-seeklogo.com.png"
                             alt="Discord logo">
                        <img class="animSocialNetwork"
                             style="margin-left: 5%; width: 11%; cursor: pointer;"
                             onclick="window.location.href = 'http://www.aventurabuild.ovh'"
                             src="https://www.pngkey.com/png/full/450-4500237_internet-icon-world-wide-web-logo-png.png"
                             alt="Website logo">
                    </section>
                </div>

                <!-- CHRZ Radio project -->
                <div class="sectionsDevInProgress"
                     style="grid-column-start: 5; grid-column-end: 5; grid-row: 1;">
                    <!-- Image illustration -->
                    <div class="illustrationSection">
                        <img src="https://camo.githubusercontent.com/12388ce36f4e4bc0fc8886b648b1642e6d01c7f7210a498bcba9ca539efd5b47/68747470733a2f2f656170692e70636c6f75642e636f6d2f6765747075627468756d623f636f64653d585a463430305a3531536a4f4a62685538344f64434165336b32455356427476453358266c696e6b70617373776f72643d756e646566696e65642673697a653d31303738783139302663726f703d3026747970653d6175746f">
                    </div>

                    <!-- little information -->
                    <section class="informationSections">
                        <h1 style="margin-top: -3%; font-size: 75%; font-family: 'Press Start 2P', cursive;"><u><b>CHRZ Radio ! Un bot musique.</b></u></h1>
                        <p>Ce bot est un bot Discord et permet d'ecouté de la musique grâce à un vocal channel</p>
                        <p>Ce bot est destinée a une utilisation personnel. Propose du Lo-Fi et de l'HardBass</p>
                        <p>Codé en Python avec la libraries discord-py</p>
                        <p>Plus de détails, sur le
                            <u onclick="window.location.href = 'https://github.com/NaulaN/CHRZ_Radio-py'">Github</u>
                        </p>
                    </section>

                    <!-- Logo for access the project -->
                    <section>
                        <img class="animSocialNetwork"
                             style="margin-left: 40%; width: 10%; cursor: pointer;"
                             onclick="window.location.href = 'https://github.com/NaulaN/CHRZ_Radio-py'"
                             src="https://cdn-icons-png.flaticon.com/512/25/25231.png"
                             alt="Github logo">
                    </section>
                </div>
            </div>

            <div style="border-bottom: solid #3f2341 1px; padding-top: 5%;">
                <p style="margin-left: 5%; font-family: 'Press Start 2P', cursive;">Projets académique</p>
            </div>

            <div class="vitrineProjet">
                <!-- IUT Web site project -->
                <div class="sectionsDevInProgress"
                     style="grid-column: 5/5; grid-row: 1;">
                    <!-- Image illustration -->
                    <div class="illustrationSection">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/iut-web-site.png">
                    </div>

                    <!-- little information -->
                    <section class="informationSections">
                        <h1 style="margin-top: -3%; font-size: 75%; font-family: 'Press Start 2P', cursive;"><u><b>S1.05-06 Recueil de besoins</b></u></h1>
                        <p>Projet universitaire qui consiste de faire un site internet grâce au info recupérer par nos recherches</p>
                        <p style="margin-bottom: 0;">Réalisé en compagnie de deux autres personnes qui sont:</p>
                        <lu style="font-family: 'Source Code Pro', monospace; font-size: 90%;">
                            <ul style="margin-bottom: 0; margin-top: 0;">BOUCHE Antoine</ul>
                            <ul style="margin-bottom: 0; margin-top: 0;">NARSICO Tiago</ul>
                        </lu>
                        <p style="margin-top: 2%">Codé en HTML, CSS et un peut de JavaScript</p>
                        <p>Plus de détails, sur le <a href="https://github.com/NaulaN/SAE-Receuil-Besoin"><u>Github</u></a></p>
                    </section>

                    <!-- Logo for access the project -->
                    <section>
                        <a href="https://github.com/NaulaN/SAE-Receuil-Besoin">
                            <img class="animSocialNetwork"
                                 style="margin-left: 40%; width: 10%; cursor: pointer;"
                                 src="https://cdn-icons-png.flaticon.com/512/25/25231.png"
                                 alt="Github logo">
                        </a>
                    </section>
                </div>

                <!-- SAE Jeux terminal project -->
                <div class="sectionsDevInProgress"
                     style="grid-column: 5/5; grid-row: 1;">
                    <!-- Image illustration -->
                    <div class="illustrationSection">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/sea-jeux-terminal.png">
                    </div>

                    <!-- little information -->
                    <section class="informationSections">
                        <h1 style="margin-top: -3%; font-size: 75%; font-family: 'Press Start 2P', cursive;"><u><b>SAE_1.01-02 Jeux sur un terminal.</b></u></h1>
                        <p>Le gros projet du semestre 1, concevoir un jeux uniquement affichable sur un terminal.</p>
                        <p>Jeux crée en 1mois et projet concus seul.</p>
                        <p>Codé en Java avec une libraries pour lire les .json</p>
                        <p>Plus de détails, sur le <u onclick="window.location.href = 'https://github.com/NaulaN/SAE_1.01-Projet-Jeux'">Github</u></p>
                    </section>

                    <!-- Logo for access the project -->
                    <section>
                        <img class="animSocialNetwork"
                             style="margin-left: 40%; width: 10%; cursor: pointer;"
                             onclick="window.location.href = 'https://github.com/NaulaN/CHRZ_Radio-py'"
                             src="https://cdn-icons-png.flaticon.com/512/25/25231.png"
                             alt="Github logo">
                    </section>
                </div>

                <!-- Puissance 4 C project -->
                <div class="sectionsDevInProgress"
                     style="grid-column-start: 5; grid-column-end: 5; grid-row: 1;">
                    <!-- Image illustration -->
                    <div class="illustrationSection">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/sea-jeux-puissance4.png">
                    </div>

                    <!-- little information -->
                    <section class="informationSections">
                        <h1 style="margin-top: -3%; font-size: 75%; font-family: 'Press Start 2P', cursive;"><u><b>SAE-C-Puissance-4</b></u></h1>
                        <p>Ce jeux est concus pour nous exercé sur le language C</p>
                        <p>Projet crée en 1j et à étais concus seul.</p>
                        <p>Codé en C.</p>
                        <p>Plus de détails, sur le <a href="https://github.com/NaulaN/SAE-C-Puissance-4"><u>Github</u></a></p>
                    </section>

                    <!-- Logo for access the project -->
                    <section>
                        <img class="animSocialNetwork"
                             style="margin-left: 40%; width: 10%; cursor: pointer;"
                             onclick="window.location.href = 'https://github.com/NaulaN/CHRZ_Radio-py'"
                             src="https://cdn-icons-png.flaticon.com/512/25/25231.png"
                             alt="Github logo">
                    </section>
                </div>
            </div>
        </main>

        <footer id="footerCopyright">
            <p><b>© 2019-2022 CHRZ Development</b><b>, Pixel art concus par CHRZASZCZ Naulan</b></p>

            <div id="structureWebSite">
                <div>
                    <h1><a href="index.html">Accueil</a></h1>

                    <ul>
                        <li><a href="index.html#bio">Bio</a></li>
                        <li><a href="index.html#mes-reseaux">Mes réseaux</a></li>
                        <li><a href="index.html#titleSectionDevInProgress">En cours de développement</a></li>
                        <ul>
                            <li><a href="index.html#SuperMariobros3">SuperMarioBros3</a></li>
                            <li><a href="index.html#Escarbot">Escarbot</a></li>
                        </ul>
                    </ul>
                </div>

                <div>
                    <h1><a href="/index.php">Projets</a></h1>

                    <ul>
                        <li><a href="/index.php#SuperMarioBros3">SuperMarioBros3</a></li>
                        <li><a href="/index.php#Escarbot">Escarbot</a></li>
                        <li><a href="/index.php#AventuraBuild">AventuraBuild</a></li>
                        <li><a href="/index.php#CHRZ-Radio">CHRZ Radio</a></li>
                    </ul>
                </div>

                <div>
                    <h1>Competence</h1>
                </div>

                <div>
                    <h1>Contact</h1>
                </div>
            </div>
        </footer>

        <script src="../script.js"></script>
    </body>
</html>