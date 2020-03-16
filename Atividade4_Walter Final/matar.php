<?php
    session_start();
    $_SESSION['entrou'] = 1;
    session_destroy();
    header("Location: http://localhost/Atividade4_Walter%20Final/");
?>