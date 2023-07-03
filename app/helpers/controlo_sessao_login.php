<?php
if ( session_status() !== PHP_SESSION_ACTIVE ) {
    session_name("Taxis_UTEC");
    session_start();
}
if ( !isset($_SESSION['infoUser']) ) {
    header("Location: " . URL . 'paginas/login');
}
?>