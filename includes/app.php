<?php

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

use Model\ActiveRecord;

// Conectar a la bd
$db = conectarDb();

ActiveRecord::setDB($db);
