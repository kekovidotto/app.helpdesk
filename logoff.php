<?php
    session_start();

    session_destroy();
    header('location:index.php');
    // remover indicer do array de sessao
    // unset()

    // destruit a variavel de sessao
    //session_destroy()
?>