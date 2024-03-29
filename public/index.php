<?php require_once "./environments/Environment.php"; ?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?=getenv('WEBSITE_TITLE')?></title>

        <link rel="icon" href="<?=getenv('WEBSITE_ICON')?>">
        <link rel="stylesheet" href="style.css">

        <script src="./librairies/jquery-3.6.4.min.js"></script>
    </head>
    
    <body>
        <header id="topBanner">
            <!-- Little bar information -->
            <div id="bannerInfoUseful">
                <marquee id="textScrollTop"
                         behavior="scroll">
                    💻 Ce site est en cours de développement. 🔍 Un bug ? Un problème ? 📧 Contactez-moi sur
                    <a class="email-link" href="https://mail.google.com/mail/?view=cm&source=mailto&to=<?=getenv('CONTACT_MAIL')?>"><?=getenv('CONTACT_MAIL')?></a>
                </marquee>
            </div>

            <!-- Web site banner -->
            <div id="bannerCHRZ">
                <img style="width: 50vw;"
                     src="<?=getenv('WEBSITE_BANNER_IMG')?>"
                     alt="CHRZ development banner">
            </div>
        </header>


        <main>
            <div id="header">
                <div id="minigame">

                    <!-- The floor is automatically generated by the floorResize function -->
                    <div id="floor">
                        <?=Environment::generateWheat(11, 1, 12)?>
                    </div>

                    <div id="village">
                        <?=Environment::generateHouse0(3, 4)?>

                        <?=Environment::generateTree(2, 5, 4, -1)?>
                        <?=Environment::generateTree(2, 5, 5, -1, "position: relative; left: 45px")?>
                        <?=Environment::generateTree(6, 5, 4, -1, "position: relative; left: 45px")?>

                        <!-- FIXME Wrong tile display on head of Moulin -->
                        <?=Environment::generateMoulin(10, 1)?>

                        <?=Environment::spawnBird()?>
                        <?=Environment::spawnBird(-5, 375, 29)?>
                        <?=Environment::spawnBird(30, 250, 25)?>
                    </div>

                    <!-- TODO Tru to simplify this part into generateMoulin function -->
                    <div class="palle-moulin" style="left: 442px; top: -440px;">
                        <img src="res/moulin/palle3.png" style="grid-column: 1/1; grid-row: 5/5;">
                        <img src="res/moulin/palle2.png" style="grid-column: 2/2; grid-row: 5/5;">
                        <img src="res/moulin/palle1.png" style="grid-column: 3/3; grid-row: 5/5;">
                        <img src="res/moulin/palle0.png" style="grid-column: 4/4; grid-row: 5/5;">

                        <img src="res/moulin/moulin12.png" style="grid-column: 5/5; grid-row: 5/5;">

                        <img src="res/moulin/palle2.png" style="grid-column: 5/5; grid-row: 8/8; transform: rotate(-90deg)">
                        <img src="res/moulin/palle1.png" style="grid-column: 5/5; grid-row: 7/7; transform: rotate(-90deg)">
                        <img src="res/moulin/palle0.png" style="grid-column: 5/5; grid-row: 6/6; transform: rotate(-90deg)">
                        <img src="res/moulin/palle3.png" style="grid-column: 5/5; grid-row: 9/9; transform: rotate(-90deg)">

                        <img src="res/moulin/palle3.png" style="grid-column: 9/9; grid-row: 5/5; transform: rotate(-180deg); position: relative; left: -3px;">
                        <img src="res/moulin/palle2.png" style="grid-column: 8/8; grid-row: 5/5; transform: rotate(-180deg); position: relative; left: -3px;">
                        <img src="res/moulin/palle1.png" style="grid-column: 7/7; grid-row: 5/5; transform: rotate(-180deg); position: relative; left: -3px;">
                        <img src="res/moulin/palle0.png" style="grid-column: 6/6; grid-row: 5/5; transform: rotate(-180deg); position: relative; left: -3px;">

                        <img src="res/moulin/palle3.png" style="grid-column: 5/5; grid-row: 1/1; transform: rotate(90deg); position: relative; top: 3px;">
                        <img src="res/moulin/palle2.png" style="grid-column: 5/5; grid-row: 2/2; transform: rotate(90deg); position: relative; top: 3px;">
                        <img src="res/moulin/palle1.png" style="grid-column: 5/5; grid-row: 3/3; transform: rotate(90deg); position: relative; top: 3px;">
                        <img src="res/moulin/palle0.png" style="grid-column: 5/5; grid-row: 4/4; transform: rotate(90deg); position: relative; top: 3px;">
                    </div>

                    <div id="bucheronPerso"></div>
                </div>

                <div style="width: 96vw; display: flex; justify-content: center; align-items: center; column-gap: 5%">
                    <div id="iconSectionNavBar1">
                        <img id="iconNavBar1" src="res/logos/beetleAnimated.gif?raw=true"
                             alt="Icon animated CHRZ Development">
                        <p><b>CHRZ Development</b></p>
                    </div>

                    <div id="icon-drop-down-navigation-bar"></div>

                    <div id="drop-down-menu">
                        <p><a href="./index.php">ACCEUIL</a></p>
                        <p><a href="projets/index.php">PROJETS</a></p>
                        <p><a href="skills/index.php">COMPETENCE</a></p>
                        <p><a href="contact/index.php">CONTACT</a></p>
                    </div>

                    <!-- Top nav bar -->
                    <div id="sectionNavBar1">
                        <nav id="nav1Button0" class="navBar1Button0  navBar1"
                             onclick="window.location.href = 'index.html'">
                            <img src="https://eapi.pcloud.com/getpubthumb?code=XZPADJZYccxT6nA3yyTM0c5FQxYffcV8G2X&linkpassword=undefined&size=256x64&crop=0&type=auto"
                                 alt="Button img">
                            <span><b>ACCUEIL</b></span>
                        </nav>
                        <nav id="nav1Button1" class="navBar1Button1  navBar1"
                             onclick="window.location.href = 'projets/index.php'">
                            <img src="https://eapi.pcloud.com/getpubthumb?code=XZPADJZYccxT6nA3yyTM0c5FQxYffcV8G2X&linkpassword=undefined&size=256x64&crop=0&type=auto"
                                 alt="Button img">
                            <span><b>PROJETS</b></span>
                        </nav>
                        <nav id="nav1Button2" class="navBar1Button2  navBar1"
                             onclick="window.location.href = 'skills/index.php'">
                            <img src="https://eapi.pcloud.com/getpubthumb?code=XZPADJZYccxT6nA3yyTM0c5FQxYffcV8G2X&linkpassword=undefined&size=256x64&crop=0&type=auto"
                                 alt="Button img">
                            <span><b>COMPETENCE</b></span>
                        </nav>
                        <nav id="nav1Button3" class="navBar1Button3  navBar1"
                             onclick="window.location.href = 'contact/index.php'">
                            <img src="https://eapi.pcloud.com/getpubthumb?code=XZPADJZYccxT6nA3yyTM0c5FQxYffcV8G2X&linkpassword=undefined&size=256x64&crop=0&type=auto"
                                 alt="Button img">
                            <span><b>CONTACT</b></span>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="profile-section" style="margin-top: 125px">
                <div id="header-sectionAcceuil" style="grid-column: 3/3;">
                    <img src="https://eapi.pcloud.com/getpubthumb?code=XZ2qfzZ6aJNHKtLkpH9g3zA14MhAJyXNAOV&linkpassword=undefined&size=1430x1430&crop=0&type=auto"
                         alt="Linkedin photo profile">
                    <div>
                        <h1><u><?=getenv("PROFILE_NAME")?></u></h1>
                        <h2><?=getenv("PROFILE_SUBTEXT")?></h2>
                    </div>
                </div>

                <?=Environment::generateTorch(-30, -20, "grid-column: 4/4")?>
                <?=Environment::generateTorch(-675, -20, "grid-column: 4/4")?>

                <div style="grid-column: 4/4; width: 1px; height: 1px; z-index: 9;">
                    <div class="platform" style="top: -225px; left: -895px;">
                        <img src="res/floors/corner-left.png" style="grid-row: 3/3; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="res/grass.png" style="grid-row: 2/2; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="res/grass.png" style="grid-row: 1/1; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/grass.png" style="grid-row: 1/1; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="res/grass.png" style="grid-row: 1/1; grid-column: 6/6; width: 100%; height: 100%">
                        <img src="res/buisson.png" style="grid-row: 1/1; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/corner-right.png" style="grid-row: 2/2; grid-column: 6/6; width: 100%; height: 100%">
                        <img src="res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="res/floors/corner-left.png" style="grid-row: 2/2; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/dirt-left.png" style="grid-row: 3/3; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 6/6; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 6/6; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="res/floors/rock-bottom.png" style="grid-row: 4/4; grid-column: 6/6; width: 100%; height: 100%; -ms-transform: rotateY(-180deg); transform: rotateY(-180deg);">
                        <img src="res/floors/rock-bottom.png" style="grid-row: 5/5; grid-column: 6/6; width: 100%; height: 100%; -ms-transform: rotateY(-180deg); transform: rotateY(-180deg);">
                        <img src="res/floors/rock-pick.png" style="grid-row: 6/6; grid-column: 6/6; width: 100%; height: 100%;">
                        <img src="res/floors/rock-pick.png" style="grid-row: 6/6; grid-column: 5/5; width: 100%; height: 100%;">
                        <img src="res/floors/rock-big-pick.png" style="grid-row: 7/7; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/rock-top_0.png" style="grid-row: 3/3; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/floors/rock-top_1.png" style="grid-row: 3/3; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/rock-top_0.png" style="grid-row: 3/3; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="res/floors/rock-bottom.png" style="grid-row: 5/5; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="res/floors/dirt-left.png" style="grid-row: 4/4; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="res/floors/rock-bottom.png" style="grid-row: 6/6; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/rock-bottom.png" style="grid-row: 7/7; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/rock-big-pick.png" style="grid-row: 8/8; grid-column: 2/2; width: 100%; height: 100%;">
                        <img src="res/floors/rock-pick.png" style="grid-row: 7/7; grid-column: 3/3; width: 100%; height: 100%;">
                        <img src="res/floors/rock-big-pick.png" style="grid-row: 6/6; grid-column: 1/1; width: 100%; height: 100%;">
                        <img src="res/floors/dirt-left.png" style="grid-row: 3/3; grid-column: 6/6; width: 100%; height: 100%; -ms-transform: rotateY(180deg); transform: rotateY(180deg);">
                    </div>
                </div>

                <div style="grid-column: 4/4; width: 1px; height: 1px; z-index: 9;">
                    <div class="platform" style="top: -225px; left: -20px;">
                        <img src="res/buisson.png" style="grid-row: 2/2; grid-column: 1/1; width: 100%; height: 100%; -ms-transform: rotateY(-180deg); transform: rotateY(-180deg);">
                        <img src="res/floors/corner-left.png" style="grid-row: 3/3; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="res/grass.png" style="grid-row: 2/2; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="res/grass.png" style="grid-row: 1/1; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/grass.png" style="grid-row: 1/1; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="res/grass.png" style="grid-row: 1/1; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/corner-right.png" style="grid-row: 2/2; grid-column: 6/6; width: 100%; height: 100%">
                        <img src="res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="res/floors/corner-left.png" style="grid-row: 2/2; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/dirt-left.png" style="grid-row: 3/3; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 6/6; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 6/6; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="res/floors/rock-bottom.png" style="grid-row: 4/4; grid-column: 6/6; width: 100%; height: 100%; -ms-transform: rotateY(-180deg); transform: rotateY(-180deg);">
                        <img src="res/floors/rock-pick.png" style="grid-row: 5/5; grid-column: 6/6; width: 100%; height: 100%;">
                        <img src="res/floors/rock-pick.png" style="grid-row: 6/6; grid-column: 5/5; width: 100%; height: 100%;">
                        <img src="res/floors/rock-big-pick.png" style="grid-row: 7/7; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/rock-top_0.png" style="grid-row: 3/3; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="res/floors/rock-top_1.png" style="grid-row: 3/3; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="res/floors/rock-top_0.png" style="grid-row: 3/3; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="res/floors/rock-bottom.png" style="grid-row: 5/5; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="res/floors/dirt-left.png" style="grid-row: 4/4; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="res/floors/rock-bottom.png" style="grid-row: 6/6; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/rock-bottom.png" style="grid-row: 7/7; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="res/floors/rock-big-pick.png" style="grid-row: 8/8; grid-column: 2/2; width: 100%; height: 100%;">
                        <img src="res/floors/rock-pick.png" style="grid-row: 7/7; grid-column: 3/3; width: 100%; height: 100%;">
                        <img src="res/floors/rock-big-pick.png" style="grid-row: 6/6; grid-column: 1/1; width: 100%; height: 100%;">
                        <img src="res/floors/dirt-left.png" style="grid-row: 3/3; grid-column: 6/6; width: 100%; height: 100%; -ms-transform: rotateY(180deg); transform: rotateY(180deg);">
                    </div>
                </div>

                <?=Environment::generateLogBridge(-690, -50, 16, "grid-column: 4/4; width: 1px; height: 1px; z-index: 11;")?>
                <div style="grid-column: 4/4; width: 1px; height: 1px; position: relative; display: grid; grid-template-rows: 48px 48px 48px; grid-template-columns: 48px; top: -275px; left: -900px; image-rendering: pixelated;">
                    <?=Environment::generateTree(1, 3, 3, "width: 100%; height: 100%;")?>
                </div>
            </div>


            <div class="sectionAccueil">
                <div id="bio" style="position: relative; width: 100%; height: auto; top: -30px; background: rgb(23,25,23); background: linear-gradient(180deg, rgba(23,25,23,1) 5%, rgba(23,25,23,0) 50%, rgba(23,25,23,1) 95%);">
                    <video id="bgVideo" preload="true" autoplay  loop muted style="position: relative;  height: auto; z-index: -1; width: 100%;">
                        <source src="res/BIO-background.mp4" type="video/mp4" >
                    </video>

                    <div style="position: absolute; border-left: solid 5px white; height: 300px; width: 1px; top: 250px; left: 175px;"></div>
                    <p style="position: absolute; top: 175px; left: 190px; font-size: 200%"><?=getenv("BIO_LINE_0")?></p>
                    <p style="position: absolute; top: 230px; left: 190px; font-size: 200%"><?=getenv("BIO_LINE_1")?></p>
                    <p style="position: absolute; top: 290px; left: 190px; font-size: 200%"><?=getenv("BIO_LINE_2")?></p>
                    <p style="position: absolute; top: 350px; left: 190px; font-size: 200%"><?=getenv("BIO_LINE_3")?></p>
                    <p style="position: absolute; top: 410px; left: 190px; font-size: 200%"><?=getenv("BIO_LINE_4")?></p>
                    <p style="position: absolute; top: 470px; left: 190px; font-size: 200%"><?=getenv("BIO_LINE_5")?></p>
                </div>
            </div>


            <div><p id="titleSectionDevInProgress"><u><b>En cours de développement !</b></u></p></div>


            <div id="vitrineDevIsProgress">
                <!-- SuperMarioBros 3 -->
                <div id="SuperMariobros3" class="sectionsDevInProgress">
                    <!-- Images illustration -->
                    <div class="illustrationSection" id="illustrationSection0">
                        <iframe id="superMarioBrosIllustrationImage0"
                                src="https://www.youtube.com/embed/qsRPmR4ChBw?start=5"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                style="width: 100%; height: 100%; grid-column: 1/1; grid-row:1/1;">
                        </iframe>
                        <img id="superMarioBrosIllustrationImage1" src="https://eapi.pcloud.com/getpubthumb?code=XZSiDJZdUfzK0lMLrfNr88Iyw9zXfhax63V&linkpassword=undefined&size=620x345&crop=0&type=auto"
                             style="width: 100%; height: 100%; grid-column: 1/1; grid-row: 1/1;">
                    </div>

                    <!-- little information -->
                    <section class="informationSections">
                        <p style="font-size: 120%"><u><b>SuperMarioBros 3</b></u></p>
                        <p>Une copie du jeu SuperMarioBros 3 est en cours de développement !</p>
                        <p>Ce jeux est disponible en tant que bêta.</p>
                        <p>Codé uniquement sur le langage Python et grâce à la librairie pygame.</p>
                        <p>Plus de détails sur ce projets, vous pouvez vous y rendre dans
                            <u><a href="projets/index.php">projets</a></u> ou bien sur le
                            <u><a href="https://github.com/NaulaN/SuperMarioBros3-pygame">Github</a></u> du code source
                        </p>
                    </section>

                    <!-- Logo for access the project -->
                    <section style="text-align: center;">
                        <img style="width: 10%; cursor: pointer;"
                             onclick="window.location.href = 'https://github.com/NaulaN/SuperMarioBros3-pygame'"
                             src="res/logos/github.png"
                             alt="Github logo">
                    </section>
                </div>

                <!-- Escarbot project -->
                <div class="sectionsDevInProgress">
                    <!-- Image illustration -->
                    <div class="illustrationSection">
                        <img src="https://camo.githubusercontent.com/6b78d5078db1fa1b404e34f301dc43ad51adb91980acf9ac6134fda3ed2b67a8/68747470733a2f2f656170692e70636c6f75642e636f6d2f6765747075627468756d623f636f64653d585a526964305a544470586a4a744774584862324d6a784a4236773537764d42345630266c696e6b70617373776f72643d756e646566696e65642673697a653d31303738783139302663726f703d3026747970653d6175746f">
                    </div>

                    <!-- little information -->
                    <section class="informationSections">
                        <p style="margin-top: -3%; font-size: 120%"><u><b>Escarbot (Bot Discord)</b></u></p>
                        <p>Un bot discord multi-usage !</p>
                        <p>En cours de migration vers le langage Java pour cause de compatibilité et de support.</p>
                        <p>Sera pour le coup codé en Java mais, il est toujours en Python</p>
                        <p>Plus de détails, dans
                            <u><a href="projets/index.php">projets</a></u> ou bien sur le
                            <u><a href="https://github.com/NaulaN/Escarbot-java">Github</a></u> du code source
                        </p>
                    </section>

                    <!--Logo for access the project-->
                    <section style="text-align: center">
                        <a href="https://github.com/NaulaN/Escarbot-java">
                            <img src="res/logos/github.png" style="width: 10%; cursor: pointer;"
                                 alt="Github logo">
                        </a>
                    </section>
                </div>
            </div>
        </main>

        <footer id="footerCopyright">
            <p><b>© 2019-2022 CHRZ Development</b><b>, Pixel art concus par CHRZASZCZ Naulan¹</b></p>

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
                    <h1><a href="projets/index.php">Projets</a></h1>
                    <ul>
                        <li><a href="projets/index.php#SuperMarioBros3">SuperMarioBros3</a></li>
                        <li><a href="projets/index.php#Escarbot">Escarbot</a></li>
                        <li><a href="projets/index.php#AventuraBuild">AventuraBuild</a></li>
                        <li><a href="projets/index.php#CHRZ-Radio">CHRZ Radio</a></li>
                    </ul>
                </div>

                <div>
                    <h1>Competence</h1>
                </div>

                <div>
                    <h1>Contact</h1>
                </div>
            </div>

            <p>¹: Exception pour: les oiseaux, les papillons, ces sprites sheet viennent du jeu Stardew Valley</p>
        </footer>

        <script src="script.js"></script>
    </body>
</html>