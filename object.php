<?php

// import data/person.php
require "data/person.php";
// buat object baru dari kelas person
$person1 = new person("Novia Al Qodri", "Bengkulu");
// manipulasi properti nama, alamat, negara
$person1->nama = "Novia Al Qodri";
// menampilkan hasil
echo "nama = {$person1->nama}";
