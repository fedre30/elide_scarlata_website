<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include("../src/10head.php") ?>
</head>

<body>
<?php include("../src/20header.php") ?>

<div class="form">
    <form>
        <div class="name">
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div class="lastname">
            <label>Last name</label>
            <input type="text" name="lastname">
        </div>
        <div class="email">
            <label>E-mail</label>
            <input type="email">
        </div>
        <div class="message">
            <label>Message</label>
            <textarea name="message" placeholder="Here your message"></textarea>
        </div>

        <div class="submit"><input type="submit" value="Submit"></div>
    </form>
</div>
<?php include("../src/30footer.php") ?>
<?php include("../src/40scripts.php") ?>
</body>
</html>