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
                <span>“Music is the shorthand of emotion.<br> Emotions which let themselves be described in words with such difficulty are directly conveyed<br> in music and in that it is its power and significance.” <br><br>Leo Tolstoj</span>
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
                <span>“Music touches our innermost being and in that way produces new life,<br>a life that gives exaltation to the whole being, raising it to that  perfection in which lies the fulfillment of man’s life.” <br><br>Hazrat Inayat Khan</span>
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