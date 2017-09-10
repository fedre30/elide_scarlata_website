<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include("../src/10head.php") ?>
</head>

<body>
    <?php include("../src/20header.php") ?>

    <! CAROUSEL -->
    <div class="carousel" id="carousel">
        <div class="slide">
            <div class="background" style="background-image: url(img/Leslie_elide.jpg)"></div>
            <div class="oval">
                <span>Lorem ipsum je sais pas quoi dire cordialement !</span>
            </div>
        </div>
        <div class="slide">
            <div class="background" style="background-image: url(img/enfants.jpeg)"></div>
            <div class="oval">
                <span>Lorem ipsum il fait ici cordialement!</span>
            </div>
        </div>
        <div class="slide">
            <div class="background" style="background-image: url(img/instr1.JPG)"></div>
            <div class="oval">
                <span>Lorem ipsum j'aime bien faire du vélo cordialement !</span>
            </div>
        </div>
        <div class="slide">
            <div class="background" style="background-image: url(img/Gaia.jpeg)"></div>
            <div class="oval">
                <span>Lorem ipsum c'est trop l'éclate cordialement !</span>
            </div>
        </div>

        <div class="next-btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
        <div class="previous-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    </div>

    <! YT PLAYER -->
    <div id="player"></div>

    <?php include("../src/30footer.php") ?>
    <?php include("../src/40scripts.php") ?>
    <!-- Custom scripts goes here -->
    <script src="js/main.js"></script>
</body>
</html>