<?php

require __DIR__ . '/../vendor/autoload.php';

use Wcs\Controller\ItemController;

$affichage = new ItemController();
$affichage->index();
