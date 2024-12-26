<?php
$imeProvera = isset($_POST["ime"]);
if($imeProvera == false)
{
    die("Niste uneli ime");
}
$imeDuzina = strlen($_POST["ime"]);
if($imeDuzina <3)
{
    die("Mora biti barem 3 karaktera");
}
$imena = ["marko", "toma", "petar"];
$osobe = array_map('strtolower', $imena);
$ime = strtolower($_POST["ime"]);

if($ime  == $osobe[0])
{
    echo "Uspesno ste uneli ime";
}

elseif ($ime == $osobe[1])
{
    echo "Uspesno ste uneli ime";
}

elseif ($ime == $osobe[2])
{
    echo "Uspesno ste uneli ime";
}

else {
    die("Nije pronadjeno ime na listi korisnika");
}