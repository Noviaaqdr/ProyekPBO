<?php

// import data/person.php
require_once "data/Person.php";
// buat define
define("TITLE", "Responsi PBO Novia");
// buat const app version
const APP_VERSION = "1.0.0";
// tampilkan hasil
echo TITLE . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo person::AUTHOR . PHP_EOL;
