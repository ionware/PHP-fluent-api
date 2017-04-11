<?php

//Building fluent API works because Object is pass around by 
//Reference, and not by Value like other primitive data types.
//Assigning an Object as value without Constructing it with
//the new keyword causes the passed object to be pass as a
//Reference the to Object(the one first constructed) in memory.

//The following example illustrates this

class Food{

	private $item;

	public function __construct($foodItem)
	{
		$this->item = $foodItem;
	}

	public function __get($prop)
	{
		return $this->$prop;
	}

	public function __set($prop, $value)
	{
		$this->$prop = $value;
	}
}

//Let's construct an instance of the Food Object.
$food = new Food("Pepper Soup");

//Create another variable with Value of $food Object
$food2 = $food;

//Overwrite the item property of food2
$food2->item = "Fried Rice";
print_r($food->item. "\n");
//Overwrite item property on food variable
$food->item = "Roasted Banana";
print_r($food2->item. "\n");

//We can see that changing each variable's item property
//causes the item property of the other variable to change as
//well. Pass by Reference now makes sense. Both $food and $food2
//Are pointing to the same Object in the memory.

/*
 Constructing Fluent API thus is possible by returning $this
 After Each method of the class finishes its operation.
 Since this refers to the same Object the method is acting
 Upon. NOTE: Every call to "return $this" includes the Object's
 State and Behavior(properties and methods) except those of type
 "static". 

 Refer to the Class/Customer.php and runner.php for example.
*/