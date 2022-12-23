<?php

require 'ChevilleRonde.php';
require 'TrouRond.php';
require 'ChevilleCarree.php';
require 'ChevilleCarreeAdapter.php';

$chevilleRonde = new ChevilleRonde(5);

$Trou = new TrouRond(3);

$chevilleCarre = new ChevilleCarree(15);

$adater = new ChevilleCarreeAdapter($chevilleCarre);

if($Trou->Correspond($adater)){
    echo 'ça marche';
}
else {
    echo 'ça marche pas';
}