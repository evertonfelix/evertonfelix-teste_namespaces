<?php
session_start();

require __DIR__."/autoload.php";

use EvertonFelix\App\Ola;


print (new Ola())->ola();
