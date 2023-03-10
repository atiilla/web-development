<?php
// PHP Variables

# a variable starts with the $ sign, followed by the name of the variable
# a variable name must start with a letter or the underscore character
# a variable name cannot start with a number
# a variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
# variable names are case-sensitive ($age and $AGE are two different variables)

# PHP has three different variable scopes:
# local
# global
# static

# PHP Variables - Global Scope
# global variables can be accessed from anywhere in the PHP script
# global variables are declared outside a function, and are accessible inside and outside a function
# to access a global variable inside a function, use the global keyword
# to access a global variable from within a function, use the $GLOBALS[index] array

# PHP Variables - Static Scope
# static variables are only accessible within a function
# static variables are declared with the static keyword
# static variables are not deleted when the function execution is done
# static variables are created when the function is first called, and not each time the function is called

# PHP Variables - Local Scope
# local variables are only accessible within a function
# local variables are declared inside a function
# local variables are deleted when the function execution is done

# PHP Variables - Variable Data Types
# PHP supports the following data types:
# String
# Integer
# Float (floating point numbers - also called double)
# Boolean
# Array
# Object
# NULL
# Resource

# PHP Variables - Variable Data Types - String
# a string is a sequence of characters, like "Hello world!"
# a string can be any text inside quotes
# you can use single or double quotes to define a string

# PHP Variables - Variable Data Types - Integer 
# an integer is a number without a decimal point, like 123 or -123
# integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation

# PHP Variables - Variable Data Types - Float
# a float (floating point number) is a number with a decimal point or a number in exponential form
# a float can also be a scientific number with an "e" to indicate the power of 10

# PHP Variables - Variable Data Types - Boolean
# a boolean represents two possible states: TRUE or FALSE

# PHP Variables - Variable Data Types - Array
# an array stores multiple values in one single variable
# an array is a special variable, which can hold more than one value at a time
# an array is a variable that can hold more than one value at a time
# an array is a container that holds multiple values
# an array is a container that holds multiple values of different data types
# an array is a container that holds multiple values of different data types, under a single name

# PHP Variables - Variable Data Types - Object
# an object is a data type which stores data and information on how to process that data

# PHP Variables - Variable Data Types - NULL
# null is a special data type which can have only one value: null

# PHP Variables - Variable Data Types - Resource
# a resource is a special variable, holding a reference to an external resource

// Examples

// String
$name = "John\n";
echo $name;

// Integer
$age = 25;
echo $age."\n";

// Float
$height = 1.75;
echo $height."\n";

// Boolean
$married = true;
echo $married."\n";

// Array
$fruits = array("apple", "banana", "orange");
echo $fruits[0]."\n";

// Object
class Person{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
}
$person = new Person("John");
echo $person->name."\n";

// NULL
$null = null;
echo $null."\n";

// Resource
// a special variable, holding a reference to an external resource
// $resource = fopen("variables.php", "r");
// echo $resource."\n";


// PHP variables global scope

$globalVar = "global variable";
function globalScope(){
    // access global variable
    // global keyword is used to access a global variable from within a function
    global $globalVar;
    echo $globalVar."\n";
}

globalScope();

// PHP variables static scope
function staticScope(){
    // static keyword is used to keep a local variable from being deleted
    static $staticVar = 0;
    echo $staticVar."\n";
    $staticVar++;
}

staticScope();

// PHP variables local scope
function localScope(){
    $localVar = "local variable";
    echo $localVar."\n";
}

localScope();

?>