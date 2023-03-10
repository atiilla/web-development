<?php
// String functions

// strlen() - returns the length of a string
$str = "Hello World!";
echo strlen($str)."\n";

// str_word_count() - counts the number of words in a string
echo str_word_count($str)."\n";

// strrev() - reverses a string
echo strrev($str)."\n";

// strpos() - searches for a specific text within a string
// returns the position of the first match
echo strpos($str, "World")."\n";

// str_replace() - replaces some characters with some other characters in a string
echo str_replace("World", "Dolly", $str)."\n";

// str_repeat() - repeats a string a specified number of times
echo str_repeat($str, 2)."\n";

// str_split() - splits a string into an array
print_r(str_split($str))."\n";

// str_shuffle() - shuffles a string
echo str_shuffle($str)."\n";

// str_compare() - compares two strings
echo strcmp($str, "Hello World!")."\n";

// str_contains() - checks if a string contains a specific string
echo str_contains($str, "Hello")."\n";

// str_starts_with() - checks if a string starts with a specific string
echo str_starts_with($str, "Hello")."\n";

// str_ends_with() - checks if a string ends with a specific string
echo str_ends_with($str, "World!")."\n";

// strrev() - reverses a string
echo strrev($str)."\n";

// strtolower() - converts a string to lowercase
echo strtolower($str)."\n";

// strtoupper() - converts a string to uppercase
echo strtoupper($str)."\n";

// trim() - removes whitespace or other predefined characters from both sides of a string
echo trim($str)."\n";

// ltrim() - removes whitespace or other predefined characters from the left side of a string
echo ltrim($str)."\n";

// rtrim() - removes whitespace or other predefined characters from the right side of a string
echo rtrim($str)."\n";

// substr() - returns a part of a string
echo substr($str, 0, 5)."\n";

// strip_tags() - strips HTML and PHP tags from a string
echo strip_tags($str)."\n";

// htmlspecialchars() - converts special characters to HTML entities
echo htmlspecialchars($str)."\n";
?>