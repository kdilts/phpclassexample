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
		// ensure that string input to this function is safe
		$newCatName = trim($newCatName);
		$newCatName = filter_var($newCatName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		// store the string as the cat object's new name
		$this->catName = $newCatName;
	}

	public function setCatAge($newCatAge){
		// ensure that the integer input to this function is safe
		$newCatAge = filter_var($newCatAge, FILTER_SANITIZE_NUMBER_INT);

		// store the integer as the cat object's new age
		$this->catAge = $newCatAge;
	}

	// meow function will cause a cat object to report its name and age
	public function meow(){
		echo "I am a cat. My name is " . $this->getCatName() . ". I am " . $this->getCatAge() . " years old!<br>";
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
// can you create a dog class and make a couple dog objects?
// think about the things a dog should have. a name, an age, and maybe a breed?
// try to make the dog bark

?>