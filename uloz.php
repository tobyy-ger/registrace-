<?php
if ($_POST["heslo1"] !== $_POST["heslo2"]) {
    header("Location: index.php?chyba=1");
    exit;
}

$jmeno = htmlspecialchars($_POST["jmeno"]);
$prijmeni = htmlspecialchars($_POST["prijmeni"]);
$vek = intval($_POST["vek"]);
$email = htmlspecialchars($_POST["email"]);
$akce = $_POST["akce"];
$poznamka = htmlspecialchars($_POST["poznamka"]);
$datum = date("d.m.Y");

$radek = "$jmeno $prijmeni|$vek|$email|$akce|$datum|$poznamka\n";
file_put_contents("data.txt", $radek, FILE_APPEND);

header("Location: vypis.php");
