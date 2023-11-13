<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Novia Al Qodri");
var_dump($company);

$company->programmer = new BackendProgrammer("Novia Al Qodri");
var_dump($company);

$company->programmer = new FrontendProgrammer("Novia Al Qodri");
var_dump($company);

sayHelloProgrammer(new Programmer("Novia Al Qodri"));
sayHelloProgrammer(new BackendProgrammer("Novia Al Qodri"));
sayHelloProgrammer(new FrontendProgrammer("Novia Al Qodri"));
