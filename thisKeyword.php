<?php

// import data/person.php
require "data/person.php";

// buat object dari kelas person
$person1 = new person("Novia Al Qodri", "Bengkulu");

// tambahkan value nama di object
$person1->nama = "Novia Al Qodri";

// panggil function sayHelloNull dengan parameter
$person1->sayHelloNull("Faturrahman Attallah");

// buat object dari kelas person
$person2 = new person("Faturrahman Attalah", "Baturaja");

// tambahkan value nama di object
$person2->nama = "fatur";

// panggil function sayHelloNull dengan parameter null
$person2->sayHelloNull(null);
