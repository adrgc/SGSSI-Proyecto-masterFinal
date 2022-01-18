<?php
if (!isset($_SESSION)) {
    session_start();
}
    $json = file_get_contents("https://oauth2.googleapis.com/tokeninfo?id_token=" . $_POST['idtoken']);
    $data = json_decode($json);
    $_SESSION['email'] = $data->email;
    $_SESSION['google'] = 'yes';

