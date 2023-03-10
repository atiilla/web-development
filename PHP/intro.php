<?php // PHP introduction ?>
<?php
/*
What is PHP?
- PHP is a server side scripting language
- PHP is a open source language
- PHP is a free to use
- PHP scripts are executed on the server
- PHP is a widely used language
- PHP is hypertext preprocessor

What can PHP do?
- PHP can generate dynamic page content
- PHP can create, open, read, write, delete, and close files on the server
- PHP can collect form data
- PHP can send and receive cookies
- PHP can add, delete, modify data in your database
- PHP can be used to control user-access
- PHP can encrypt data

What is a PHP File?
- A PHP file can contain text, HTML, CSS, JavaScript, and PHP code
- PHP code are executed on the server, and the result is returned to the browser as plain HTML
- PHP files have extension ".php"

Is PHP cross-platform?
- PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
- PHP is compatible with almost all servers used today (Apache, IIS, etc.)
- PHP supports a wide range of databases
*/
?>

<?php
// PHP Syntax
// in PHP statements end with a semicolon (;)
$msg = "Hello World!\n"; // variable declaration;
echo $msg; // output variable
?>

<?php
// PHP case sensitivity
// PHP is case-sensitive for class names, function names, and user-defined functions
// PHP is case-insensitive for variable names
$name = "John";
$NAME = "Doe";
$Name = "Smith";
echo "My name is $name $NAME $Name\n";
?>

<?php
// PHP Comments
// This is a single line comment
# This is also a single line comment
/*
This is a multiple lines comment block
that spans over multiple
lines
*/
?>

