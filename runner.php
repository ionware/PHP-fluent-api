<?php

require "Class/Customer.php";

$customer = new Customer;

$customer->name("Adedokun", "Adedeji", "Stephen")
		->age(20)
		->address("Somewhere on the Earth")
		->country("Nigeria")
		->state("Oyo")
		->save();