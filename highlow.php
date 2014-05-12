<?php

//Computer guesses a random number between 1 and 100
$number = mt_rand(1, 100);
$guesses = 0;

//Prompt user for first guess
fwrite(STDOUT, "Guess my number!\n");

//Get input from user
$user_guess = fgets(STDIN);

//Evaluate

while ($user_guess != $number)  
{
	if ($user_guess < $number) 
	{
		fwrite(STDOUT, "HIGHER...\n");
	} 
	elseif ($user_guess > $number) 
	{
	fwrite(STDOUT, "LOWER...\n");
	} 

	$user_guess = fgets(STDIN);
	$guesses++;

}

echo "You got it in $guesses tries!!\n";