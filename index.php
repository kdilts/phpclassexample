<?php

//////////////////////////////////////////////////
// class definition for a cat
class cat {
	// private variables that describe a cat
	private $catName;
	private $catAge;

	// constructor to make a cat object from this cat class
	public function __construct($newCatName, $newCatAge) {
		$this->catName = $newCatName;
		$this->catAge = $newCatAge;
	}

	// accessor functions that allow you to read a cat object's private variables
	public function getCatName(){
		return $this->catName;
	}

	public function getCatAge(){
		return $this->catAge;
	}

	// mutator functions that allow you to change a cat object's
	public function setCatName($newCatName){
		$this->catName = $newCatName;
	}

	public function setCatAge($newCatAge){
		$this->catAge = $newCatAge;
	}

	// meow function will cause a cat object to report its name and age
	public function meow(){
		echo "I am a cat. My name is " . $this->getCatName() . ". I am " . $this->getCatAge() . " years old!";
	}
}
// end of cat class definition
//////////////////////////////////////////////////

// lets make a cat object from our class blueprint
$myCat = new cat("Fred", 6);
// lets see what happens when our cat meows
$myCat->meow();
// now lets pretend a year has gone by and set our cat's age to be correct again
$myCat->setCatAge(7);
// lets see what happens when he meows again
$myCat->meow();

// can you make another cat?
// can you create a dog class and make a couple dogs?

?>