<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include("../src/10head.php") ?>
</head>

<body>
<?php include("../src/20header.php") ?>

<!-- CAROUSEL -->
<div class="carousel" id="carousel">
    <div class="slide">
        <div class="background" style="background-image: url(img/instr1.JPG)"></div>
        <div class="oval">
            <span>Music touches our innermost being and in that way produces new life,<br>a life that gives exaltation to the whole being, raising it to that  perfection in which lies the fulfillment of man’s life. <br><br>Hazrat Inayat Khan</span>
        </div>
    </div>
    <div class="next-btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    <div class="previous-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
</div>

<!-- VIDEO PLAYER -->
<div class="row">
    <div class="twelve columns">
        <video class="video" controls>
            <source src="media/elide.vp8" type="video/vp8">
            <source src="media/elide.h264" type="video/mp4">

        </video>
    </div>

</div>

<?php include("../src/30footer.php") ?>
<?php include("../src/40scripts.php") ?>
<!-- Custom scripts goes here -->
<script src="js/main.js"></script>
</body>
</html>