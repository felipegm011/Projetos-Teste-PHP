<?php
    session_start();
    $_SESSION['entra'] = 1;
    session_destroy();
    header("Location: http://localhost/Atividade3_Walter/");

?>