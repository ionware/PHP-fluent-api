<?php

class Customer{

	protected $name = [];
	protected $age;
	protected $address;
	protected $country;
	protected $state;

	public function name($surname, $firstname, $othername)
	{
		$this->name['surname'] = $surname;
		$this->name['firstname'] = $firstname;
		$this->name['othername'] = $othername;

		return $this;
	}

	public function age($age)
	{
		$this->age = $age;
		return $this;
	}

	public function address($address)
	{
		$this->address = $address;
		return $this;
	}

	public function country($country)
	{
		$this->country = $country;
		return $this;
	}

	public function state($state)
	{
		$this->state = $state;
		return $this;
	}

	public function save()
	{
		//You can save this to the database.
		$customer = implode($this->name, " "). " from {$this->country}, {$this->state} lives at {$this->address}. {$this->age}yrs old.";

		var_dump($customer);
	}
}