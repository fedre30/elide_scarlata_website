<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include("../src/10head.php") ?>
</head>

<body>
<?php include("../src/20header.php") ?>

<div class="container">

    <div class="row">
        <div class="twelve columns">
            <h2>Photos</h2>
        </div>

        <div class="row photos">
            <div class="four columns">
                <img src="media/elide2.jpg" alt="elide singing" width="100%">
            </div>

            <div class="four columns">
                <img src="media/elide1.jpg" alt="elide singing" width="100%">
                <img src="media/elide3.jpg" alt="elide singing" width="100%">
            </div>
            <div class="four columns">
                <img src="media/elide4.jpg" alt="elide singing" width="100%">
                <img src="media/elideorchestra.jpg" alt="elide singing" width="100%">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="twelve columns">
            <h2>Audio</h2>
        </div>

        <div class="twelve columns">
            <audio controls="controls">
                <source src="media/laudatedominum.opus" type="audio/ogg">
                <source src="media/laudatedominum.mp3" type="audio/mp3">
            </audio>
        </div>
    </div>



    <div class="row">
        <div class="twelve columns">
            <h2>Video</h2>
        </div>
        
        <div class="twelve columns">
            <video width="320" height="240" controls>
                <source src="" type="video/mp4">
            </video>
        </div>
    </div>
</div>

<div id="myModal" class="modal">
    <span class="closeButton" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
    <img class="modal-content" id="img01">
</div>


<?php include("../src/30footer.php") ?>
<?php include("../src/40scripts.php") ?>
<script src="js/medias.js"></script>

</body>
</html>