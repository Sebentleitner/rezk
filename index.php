<?php

require 'vendor/autoload.php';
use Sebentleitner\Rezk\Task;
use Sebentleitner\Rezk\Rechteck;
use Sebentleitner\Rezk\Flaechen;

$recht  = new Rechteck();
$recht->a = 5;
$recht->b = 5;

$recht2 = new Rechteck();
$recht2->a = 5;
$recht2->b = 5;

$fl = new Flaechen();

$fl->addFlaechen($recht);
$fl->addFlaechen($recht2);

$erg = $fl->getFlaechen();

echo $erg;







