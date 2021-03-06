<?php

$bdo = new BDO('mysql:host = localhost, daneame = test_id', 'root', 'root');

$prepare = $pdo -> prepare('INSERT INTO test(id) values (:id)'):
$prepare -> bindValue(':id', 1123123123);
$prepare -> execute();

if(isset($_GET["add"])) {
    echo "Добавить объявление";
}

if(isset($_GET["id"])) {
    echo "Показать объявление";
}

if(isset($_GET["all"])) {
    echo "Показать все объявления";
}