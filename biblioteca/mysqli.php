<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "est_official");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}

?>