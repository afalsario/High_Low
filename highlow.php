<?php

if ($argc < 3) {
	echo "You need to enter MIN and MAX values!\n";
	exit(1);
}

//Computer guesses a random number between 1 and 100
define('MIN', $argv[1]);
define('MAX', $argv[2]);

$number = mt_rand(MIN, MAX);
$guesses = 1;

//Prompt user for first guess
fwrite(STDOUT, "Guess what number I'm thinking of...\n");

//Get input from user
$user_guess = fgets(STDIN);

//Evaluate

while ($user_guess != $number)  
{
	if ($user_guess < $number) 
	{
		fwrite(STDOUT, "WRONG!!!! Higher...\n");
	} 
	else
	{
		fwrite(STDOUT, "WRONG!!!! Lower...\n");
	} 
	$user_guess = fgets(STDIN);
	$guesses++;
}
//Output  "correct" statement and 
//display number of guesses
if ($guesses == 1) 
{
	echo "You got it in 1 try!\n";
}
else 
{
	echo "You got it in $guesses tries!\n";
}

