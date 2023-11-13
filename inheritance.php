<?php

// import data/person.php
require "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager1 = new manager();
$manager1->nama = "Novia";
$manager1->sayHello("Cindy");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vicePresident1 = new vicePresident();
$vicePresident1->nama = "Cindy";
$vicePresident1->alamat = "Manna";
$vicePresident1->sayHello("Cindy");
