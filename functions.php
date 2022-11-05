<?php 

/** functions */

// function foo(){
// 	echo "Hello world";
// }

//  function foo(){
// 	return "Hello world";
// }

/** This will give error */
// echo foo();

// if(false){
// 	 function foo(){
// 		return "Hello world";
// 	}
// }

// foo();
// bar();

// Function within a function
function foo(){
	echo 'foo';

	// This function does not get executed when we call foo()
	// We have to invoke this to execute
	// But we have to call foo() before bar() or else it will give an error
	function bar(){
		echo 'bar';
	}
}

// Type hinting in PHP
function demo(): int {
	return '1';
}

function super(): void {
	return;
}

// If function also wants to return null value 
function hey(): ?int {
	return null;
}

// Starting from PHP 8, we can have multiple type hinting
function multiples(): int|float|array {
	return 1.20;
}

$x = demo();
var_dump($x);