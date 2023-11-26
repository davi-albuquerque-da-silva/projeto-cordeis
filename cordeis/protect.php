<?php
if(!isset($_SESSION)){
    session_start();

}
if(!isset($_SESSION['id'])){
    die("vo nao pode acessar esta pagina porque nao esta logado.<p><a> href=a\"index.php\">entrar </a></P>
    ");

}


?>