<?php

// import data/person.php
require "data/person.php";
// buat object baru dari kelas person
$person1 = new Person("Novia Al Qodri", "Bengkulu");
// panggil function
$person1->sayHello("Bengkulu");
// panggil self keyword
$person1->info() . PHP_EOL;
