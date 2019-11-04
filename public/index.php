<?php

use App\Bike;

require_once '../vendor/autoload.php';

$pedestrWay = new App\PedestrianWay();

$alpha = new App\Car();
$lapierre = new App\Bike;

var_dump ($pedestrWay);

$pedestrWay->addvehicule($alpha);
var_dump ($pedestrWay);




