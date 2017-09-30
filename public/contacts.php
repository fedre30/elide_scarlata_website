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
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="lastname">
            <label for="lastname">Last name</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div class="email">
            <label for="email">E-mail</label>
            <input type="email" name="reply-mail" id="email">
        </div>
        <div class="message">
            <label for="message">Message</label>
            <textarea name="message" placeholder="Write something.." id="message"></textarea>
        </div>

        <div class="submit">
            <button type="button" id="sendMail">Send</button>
        </div>

        <div id="status"></div>
    </form>
</div>
<?php include("../src/30footer.php") ?>
<?php include("../src/40scripts.php") ?>

<script src="js/contacts.js"></script>
</body>
</html>