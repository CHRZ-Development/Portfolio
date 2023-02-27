<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo getenv('WEBSITE_TITLE'); ?></title>

        <link rel="icon" href="<?php echo getenv('WEBSITE_ICON'); ?>">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <header id="topBanner">
            <!-- Little bar information -->
            <div id="bannerInfoUseful">
                <marquee id="textScrollTop"
                         behavior="scroll">
                    💻 Ce site est en cours de développement. 🔍 Un bug ? Un problème ? 📧 Contactez-moi sur
                    <a class="email-link" href="https://mail.google.com/mail/?view=cm&source=mailto&to=<?php echo getenv('CONTACT_MAIL'); ?>"><?php echo getenv('CONTACT_MAIL'); ?></a>
                </marquee>
            </div>

            <!-- Web site banner -->
            <div id="bannerCHRZ">
                <img style="width: 50vw;"
                     src="<?php echo getenv('WEBSITE_BANNER_IMG'); ?>"
                     alt="CHRZ development banner">
            </div>
        </header>


        <main>
            <div id="header">
                <div id="minigame">
                    <div id="floor">
                        <img id="corner-left"
                             src="<?php echo getenv('CORNER_LEFT'); ?>"
                             style="grid-row: 2/2;"
                             alt="corner-left">
                        <img class="dirt-left"
                             src="<?php echo getenv('DIRT_LEFT'); ?>"
                             style="grid-row: 3/3;"
                             alt="dirt-left">
                        <img id="corner-right"
                             src="<?php echo getenv('CORNER_RIGHT'); ?>"
                             alt="corner-right">
                        <img id="rock-corner"
                             src="<?php echo getenv('DIRT_LEFT'); ?>"
                             alt="rock-corner">
                        <img class="rock-bottom"
                             src="<?php echo getenv('ROCK_BOTTOM'); ?>"
                             style="grid-row: 4/4; width: 100%; height: 100%"
                             alt="rock-bottom">
                        <img id="rock-bottom-right"
                             class="rock-bottom"
                             src="<?php echo getenv('ROCK_BOTTOM'); ?>"
                             alt="rock-bottom-right">

                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_END_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 11/11; transform: rotateY(-180deg);"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 12/12;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 13/13;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 14/14;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 15/15;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 16/16;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 17/17;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 18/18;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 19/19;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 20/20;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 21/21;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 22/22;"
                             alt="wheat">
                        <img class="wheat"
                             src="<?php echo getenv('WHEAT_END_IMG'); ?>"
                             style="grid-row: 1/1; grid-column: 23/23;"
                             alt="wheat">
                    </div>

                    <div id="village">
                        <!-- House 0 -->
                        <img src="<?php echo getenv('HOUSE0_0'); ?>"
                             style="grid-column: 3/3; grid-row: 4/4;"
                             alt="HOUSE=0;Tile=0">
                        <img src="<?php echo getenv('HOUSE0_1'); ?>"
                             style="grid-column: 3/3; grid-row: 5/5;"
                             alt="HOUSE=0;Tile=1">
                        <img src="<?php echo getenv('HOUSE0_2'); ?>"
                             style="grid-column: 4/4; grid-row: 4/4;"
                             alt="HOUSE=0;Tile=2">
                        <img src="<?php echo getenv('HOUSE0_3'); ?>"
                             style="grid-column: 4/4; grid-row: 5/5;"
                             alt="HOUSE=0;Tile=3">
                        <img src="<?php echo getenv('HOUSE0_4'); ?>"
                             style="grid-column: 5/5; grid-row: 4/4;"
                             alt="HOUSE=0;Tile=4">
                        <img src="<?php echo getenv('HOUSE0_5'); ?>"
                             style="grid-column: 5/5; grid-row: 5/5;"
                             alt="HOUSE=0;Tile=5">
                        <img src="<?php echo getenv('HOUSE0_6'); ?>"
                             style="grid-column: 6/6; grid-row: 4/4;"
                             alt="HOUSE=0;Tile=6">
                        <img src="<?php echo getenv('HOUSE0_7'); ?>"
                             style="grid-column: 6/6; grid-row: 5/5;"
                             alt="HOUSE=0;Tile=7">
                        <img src="<?php echo getenv('HOUSE0_8'); ?>"
                             style="grid-column: 2/2; grid-row: 4/4;"
                             alt="HOUSE=0;Tile=8">
                        <img src="<?php echo getenv('HOUSE0_9'); ?>"
                             style="grid-column: 3/3; grid-row: 3/3;"
                             alt="HOUSE=0;Tile=9">
                        <img src="<?php echo getenv('HOUSE0_10'); ?>"
                             style="grid-column: 3/3; grid-row: 2/2;"
                             alt="HOUSE=0;Tile=10">
                        <img src="<?php echo getenv('HOUSE0_9'); ?>"
                             style="grid-column: 6/6; grid-row: 3/3; transform: rotateY(180deg)"
                             alt="HOUSE=0;Tile=9">
                        <img src="<?php echo getenv('HOUSE0_10'); ?>"
                             style="grid-column: 6/6; grid-row: 2/2; transform: rotateY(180deg)"
                             alt="HOUSE=0;Tile=10">
                        <img src="<?php echo getenv('HOUSE0_11'); ?>"
                             style="grid-column: 4/4; grid-row: 3/3;"
                             alt="HOUSE=0;Tile=11">
                        <img src="<?php echo getenv('HOUSE0_11'); ?>"
                             style="grid-column: 5/5; grid-row: 3/3;"
                             alt="HOUSE=0;Tile=11">
                        <img src="<?php echo getenv('HOUSE0_12'); ?>"
                             style="grid-column: 3/3; grid-row: 1/1;"
                             alt="HOUSE=0;Tile=12">
                        <img src="<?php echo getenv('HOUSE0_12'); ?>"
                             style="grid-column: 6/6; grid-row: 1/1; transform: rotateY(180deg)"
                             alt="HOUSE=0;Tile=12">
                        <img src="<?php echo getenv('HOUSE0_13'); ?>"
                             style="grid-column: 4/4; grid-row: 1/1;"
                             alt="HOUSE=0;Tile=13">
                        <img src="<?php echo getenv('HOUSE0_13'); ?>"
                             style="grid-column: 5/5; grid-row: 1/1; transform: rotateY(180deg)"
                             alt="HOUSE=0;Tile=13">
                        <img src="<?php echo getenv('HOUSE0_14'); ?>"
                             style="grid-column: 4/4; grid-row: 2/2;"
                             alt="HOUSE=0;Tile=14">
                        <img src="<?php echo getenv('HOUSE0_14'); ?>"
                             style="grid-column: 5/5; grid-row: 2/2; transform: rotateY(180deg)"
                             alt="HOUSE=0;Tile=14">

                        <!-- Tree 1 near to house 0 -->
                        <img src="<?php echo getenv('TREE_LOG_1'); ?>"
                             style="grid-column: 2/2; grid-row: 5/5; z-index: -1;"
                             alt="TREE_LOG=0;Tile=1">
                        <img src="<?php echo getenv('TREE_1'); ?>"
                             style="grid-column: 2/2; grid-row: 4/4; z-index: -1;"
                             alt="TREE=0;Tile=1">
                        <img src="<?php echo getenv('TREE_2'); ?>"
                             style="grid-column: 2/2; grid-row: 3/3; z-index: -1;"
                             alt="TREE=0;Tile=2">

                        <!-- Tree 2 near to house 0 -->
                        <img src="<?php echo getenv('TREE_LOG_1'); ?>"
                             style="position: relative; left: 45px; grid-column: 6/6; grid-row: 5/5; z-index: -1;"
                             alt="TREE_LOG=0;Tile=1">
                        <img src="<?php echo getenv('TREE_1'); ?>"
                             style="position: relative; left: 45px; grid-column: 6/6; grid-row: 4/4; z-index: -1;"
                             alt="TREE=0;Tile=1">
                        <img src="<?php echo getenv('TREE_1'); ?>"
                             style="position: relative; left: 45px; grid-column: 6/6; grid-row: 3/3; z-index: -1;"
                             alt="TREE=0;Tile=1">
                        <img src="<?php echo getenv('TREE_2'); ?>"
                             style="position: relative; left: 45px; grid-column: 6/6; grid-row: 2/2; z-index: -1;"
                             alt="TREE=0;Tile=2">

                        <!-- first moulin -->
                        <div class="moulins" style="grid-column: 10/10; grid-row: 1/1;"></div>

                        <div class="birds-brun-fly" style="z-index: 1;"></div>
                        <div class="birds-brun-fly" style="z-index: 1; top: -5px; animation: birds-fly-frames 375ms linear infinite, birds-fly-move 29s linear infinite;"></div>
                        <div class="birds-brun-fly" style="z-index: 1; top: 30px; animation: birds-fly-frames 250ms linear infinite, birds-fly-move 25s linear infinite;"></div>
                    </div>

                    <div class="palle-moulin" style="left: 442px; top: -440px;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle3.png" style="grid-column: 1/1; grid-row: 5/5;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle2.png" style="grid-column: 2/2; grid-row: 5/5;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle1.png" style="grid-column: 3/3; grid-row: 5/5;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle0.png" style="grid-column: 4/4; grid-row: 5/5;">

                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/moulin12.png" style="grid-column: 5/5; grid-row: 5/5;">

                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle2.png" style="grid-column: 5/5; grid-row: 8/8; transform: rotate(-90deg)">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle1.png" style="grid-column: 5/5; grid-row: 7/7; transform: rotate(-90deg)">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle0.png" style="grid-column: 5/5; grid-row: 6/6; transform: rotate(-90deg)">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle3.png" style="grid-column: 5/5; grid-row: 9/9; transform: rotate(-90deg)">

                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle3.png" style="grid-column: 9/9; grid-row: 5/5; transform: rotate(-180deg); position: relative; left: -3px;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle2.png" style="grid-column: 8/8; grid-row: 5/5; transform: rotate(-180deg); position: relative; left: -3px;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle1.png" style="grid-column: 7/7; grid-row: 5/5; transform: rotate(-180deg); position: relative; left: -3px;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle0.png" style="grid-column: 6/6; grid-row: 5/5; transform: rotate(-180deg); position: relative; left: -3px;">

                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle3.png" style="grid-column: 5/5; grid-row: 1/1; transform: rotate(90deg); position: relative; top: 3px;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle2.png" style="grid-column: 5/5; grid-row: 2/2; transform: rotate(90deg); position: relative; top: 3px;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle1.png" style="grid-column: 5/5; grid-row: 3/3; transform: rotate(90deg); position: relative; top: 3px;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/moulin/palle0.png" style="grid-column: 5/5; grid-row: 4/4; transform: rotate(90deg); position: relative; top: 3px;">
                    </div>

                    <div id="bucheronPerso"></div>

                </div>

                <div style="width: 96vw; display: flex; justify-content: center; align-items: center; column-gap: 5%">
                    <div id="iconSectionNavBar1">
                        <img id="iconNavBar1" src="https://github.com/NaulaN/CHRZ-development_website/blob/master/res/logos/beetleAnimated.gif?raw=true"
                             alt="Icon animated CHRZ Development">
                        <p><b>CHRZ Development</b></p>
                    </div>

                    <div id="icon-drop-down-navigation-bar"></div>

                    <div id="drop-down-menu">
                        <p><a href="./index.html">ACCEUIL</a></p>
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
                        <h1><u>CHRZASZCZ Naulan</u></h1>
                        <h2>Futur apprenti a l’IGN | Étudiant à IUT de Montreuil en 2ᵉ année</h2>
                    </div>
                </div>

                <div class="torch" style="grid-column: 4/4; left: -30px; top: -20px;">
                    <div class="hexagon  light-torch" style="position: relative; left: -5px; top: -10px; opacity: 25%;"></div>

                    <div class="first-torch" style="grid-column: 1/1; grid-row: 1/1; position: absolute; left: 20px; width: 48px; height: 48px"></div>
                    <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/torch-sticks.png" style="grid-column: 1/1; grid-row: 2/2; position: absolute; left: 20px;">
                    <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/torch-sticks-end.png" style="grid-column: 1/1; grid-row: 3/3; position: absolute; left: 20px;">
                </div>

                <div class="torch" style="grid-column: 4/4; left: -675px; top: -20px;">
                    <div class="hexagon  light-torch" style="position: relative; left: -5px; top: -10px; opacity: 25%;"></div>

                    <div class="first-torch" style="grid-column: 1/1; grid-row: 1/1; position: absolute; left: 20px; width: 48px; height: 48px"></div>
                    <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/torch-sticks.png" style="grid-column: 1/1; grid-row: 2/2; position: absolute; left: 20px;">
                    <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/torch-sticks-end.png" style="grid-column: 1/1; grid-row: 3/3; position: absolute; left: 20px;">
                </div>

                <div style="grid-column: 4/4; width: 1px; height: 1px; z-index: 9;">
                    <div class="platform" style="top: -225px; left: -895px;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/corner-left.png" style="grid-row: 3/3; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/grass.png" style="grid-row: 2/2; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/grass.png" style="grid-row: 1/1; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/grass.png" style="grid-row: 1/1; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/grass.png" style="grid-row: 1/1; grid-column: 6/6; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/buisson.png" style="grid-row: 1/1; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/corner-right.png" style="grid-row: 2/2; grid-column: 6/6; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/corner-left.png" style="grid-row: 2/2; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/dirt-left.png" style="grid-row: 3/3; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 6/6; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 6/6; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-bottom.png" style="grid-row: 4/4; grid-column: 6/6; width: 100%; height: 100%; -ms-transform: rotateY(-180deg); transform: rotateY(-180deg);">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-bottom.png" style="grid-row: 5/5; grid-column: 6/6; width: 100%; height: 100%; -ms-transform: rotateY(-180deg); transform: rotateY(-180deg);">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-pick.png" style="grid-row: 6/6; grid-column: 6/6; width: 100%; height: 100%;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-pick.png" style="grid-row: 6/6; grid-column: 5/5; width: 100%; height: 100%;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-big-pick.png" style="grid-row: 7/7; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-top_0.png" style="grid-row: 3/3; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-top_1.png" style="grid-row: 3/3; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-top_0.png" style="grid-row: 3/3; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-bottom.png" style="grid-row: 5/5; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/dirt-left.png" style="grid-row: 4/4; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-bottom.png" style="grid-row: 6/6; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-bottom.png" style="grid-row: 7/7; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-big-pick.png" style="grid-row: 8/8; grid-column: 2/2; width: 100%; height: 100%;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-pick.png" style="grid-row: 7/7; grid-column: 3/3; width: 100%; height: 100%;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-big-pick.png" style="grid-row: 6/6; grid-column: 1/1; width: 100%; height: 100%;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/dirt-left.png" style="grid-row: 3/3; grid-column: 6/6; width: 100%; height: 100%; -ms-transform: rotateY(180deg); transform: rotateY(180deg);">
                    </div>
                </div>

                <div style="grid-column: 4/4; width: 1px; height: 1px; z-index: 9;">
                    <div class="platform" style="top: -225px; left: -20px;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/buisson.png" style="grid-row: 2/2; grid-column: 1/1; width: 100%; height: 100%; -ms-transform: rotateY(-180deg); transform: rotateY(-180deg);">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/corner-left.png" style="grid-row: 3/3; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/grass.png" style="grid-row: 2/2; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/grass.png" style="grid-row: 1/1; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/grass.png" style="grid-row: 1/1; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/grass.png" style="grid-row: 1/1; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/corner-right.png" style="grid-row: 2/2; grid-column: 6/6; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/floor-top.png" style="grid-row: 2/2; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/corner-left.png" style="grid-row: 2/2; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/dirt-left.png" style="grid-row: 3/3; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 6/6; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 6/6; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 4/4; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-fill.png" style="grid-row: 5/5; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-bottom.png" style="grid-row: 4/4; grid-column: 6/6; width: 100%; height: 100%; -ms-transform: rotateY(-180deg); transform: rotateY(-180deg);">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-pick.png" style="grid-row: 5/5; grid-column: 6/6; width: 100%; height: 100%;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-pick.png" style="grid-row: 6/6; grid-column: 5/5; width: 100%; height: 100%;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-big-pick.png" style="grid-row: 7/7; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-top_0.png" style="grid-row: 3/3; grid-column: 3/3; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-top_1.png" style="grid-row: 3/3; grid-column: 4/4; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-top_0.png" style="grid-row: 3/3; grid-column: 5/5; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-bottom.png" style="grid-row: 5/5; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/dirt-left.png" style="grid-row: 4/4; grid-column: 1/1; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-bottom.png" style="grid-row: 6/6; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-bottom.png" style="grid-row: 7/7; grid-column: 2/2; width: 100%; height: 100%">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-big-pick.png" style="grid-row: 8/8; grid-column: 2/2; width: 100%; height: 100%;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-pick.png" style="grid-row: 7/7; grid-column: 3/3; width: 100%; height: 100%;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/rock-big-pick.png" style="grid-row: 6/6; grid-column: 1/1; width: 100%; height: 100%;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/dirt-left.png" style="grid-row: 3/3; grid-column: 6/6; width: 100%; height: 100%; -ms-transform: rotateY(180deg); transform: rotateY(180deg);">
                    </div>
                </div>

                <div style="grid-column: 4/4; width: 1px; height: 1px; z-index: 11;">
                    <div id="platform-profile">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border-end.png" style="grid-row: 1/1; grid-column: 1/1;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 2/2;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 3/3;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 4/4;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 5/5;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 6/6;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 7/7;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 8/8;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 9/9;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 10/10;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 11/11;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 12/12;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 13/13;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 14/14;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border1.png" style="grid-row: 1/1; grid-column: 15/15;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/floors/platform-border-end.png" style="grid-row: 1/1; grid-column: 16/16; -ms-transform: rotateY(-180deg); transform: rotateY(-180deg);">
                    </div>
                </div>

                <div style="grid-column: 4/4; width: 1px; height: 1px">
                    <div style="position: relative; display: grid; grid-template-rows: 48px 48px 48px; grid-template-columns: 48px; top: -275px; left: -900px;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/trees/tree-log-1.png" style="grid-column: 1/1; grid-row: 3/3; width: 100%; height: 100%; image-rendering: pixelated;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/trees/tree-1.png" style="grid-column: 1/1; grid-row: 2/2; width: 100%; height: 100%; image-rendering: pixelated;">
                        <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/trees/tree-2.png" style="grid-column: 1/1; grid-row: 1/1; width: 100%; height: 100%; image-rendering: pixelated;">
                    </div>
                </div>
            </div>


            <div class="sectionAccueil">
                <div id="bio" style="position: relative; width: 100%; height: auto; top: -30px; background: rgb(23,25,23); background: linear-gradient(180deg, rgba(23,25,23,1) 5%, rgba(23,25,23,0) 50%, rgba(23,25,23,1) 95%);">
                    <video id="bgVideo" preload="true" autoplay  loop muted style="position: relative;  height: auto; z-index: -1; width: 100%;">
                        <source src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/BIO-background.mp4" type="video/mp4" >
                    </video>

                    <div style="position: absolute; border-left: solid 5px white; height: 300px; width: 1px; top: 300px; left: 95px;"></div>

                    <p style="position: absolute; top: 200px; left: 50px; font-size: 300%">👋</p>
                    <p style="position: absolute; top: 260px; left: 100px; font-size: 300%">18ans</p>
                    <p style="position: absolute; top: 320px; left: 100px; font-size: 300%">💻 Passionné dans l'informatique</p>
                    <p style="position: absolute; top: 380px; left: 100px; font-size: 300%">
                        <img id="lorraine-flag"
                             src="https://www.flagsonline.fr/uploads/2019-11-21/1200-0/province_Lorraine_drapeau-flag-bandiere.jpg"
                             alt="lorraine-flag">
                        Lorrain avant tous
                    </p>
                    <p style="position: absolute; top: 440px; left: 100px; font-size: 300%">🎮 Game développeur sur mon temps libre</p>
                    <p style="position: absolute; top: 500px; left: 100px; font-size: 300%">
                        📧
                        <a class="email-link"
                           href="https://mail.google.com/mail/?view=cm&source=mailto&to=nchrzaszcz.pro@gmail.com">
                            nchrzaszcz.pro@gmail.com
                        </a>
                    </p>
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
                             src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/logos/github.png"
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
                            <img src="https://raw.githubusercontent.com/NaulaN/CHRZ-development_website/master/res/logos/github.png" style="width: 10%; cursor: pointer;"
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