<?php

    session_start();

    //remover indices do array da sessão
    //unset()

    //destruir a variavel sessao
    session_destroy();
    header('Location: index.php');
?>