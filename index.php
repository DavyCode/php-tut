<html>
<head>
<title>Hello World</title>
<body>
<?php 

  echo "Hello, World!"; 

?>

 <!-- SGML short open style tag -->
<!-- <%...%> ASP style tag -->
<!-- <script language="PHP">...</script> html script tag -->


<?
// # This is a comment, and
// # This is the second line of the comment
// // This is a comment too. Each style comments only
//   print "An example with single line comments";
// ?>



<?
# First Example
// print <<<END
// This uses the "here document" syntax to output
// multiple lines with $variable interpolation. Note
// that the here document terminator must appear on a
// line with just a semicolon no extra whitespace!
// END;
# Second Example
// print "This spans
// multiple lines. The newlines will be
// output as well";
// ?>






<?
/* This is a comment with multiline
Author : Mohammad Mohtashim
Purpose: Multiline Comments Demo
Subject: PHP
*/
// print "An example with multi line comments";
?>


<?

// $four = 2 + 2; // single spaces

// $four =
// 2+
// 2; // multiple lines

// print $four
// ?>


<?
//case Sensitivity
// $capital = 67;
// print("Variable capital is $capital<br>");
// print("Variable CaPiTaL is $CaPiTaL<br>");
// ?>



<? //*** Braces for code block
// if (3 == 2 + 1)
// print("Good - I haven't totally lost my mind.<br>");
// if (3 == 2 + 1)
// {
// print("Good - I haven't totally");
// print("lost my mind.<br>");
// }

//*** print 20 + $x; Variables used before they are assigned have default values.

// $x = 40;
// print $x = 10 + $y = 78;


//***print "20" + 10;  // 30  //automatically converting types from one to another when necessary.

// $a = 'string';
// $b = "30";
// print $b;
// print $a;


// PHP has a total of eight data types which we use to construct our variables:
//  Integers: are whole numbers, without a decimal point, like 4195.
//  Doubles: are floating-point numbers, like 3.14159 or 49.1.
//  Booleans: have only two possible values either true or false.
//  NULL: is a special type that only has one value: NULL.
//  Strings: are sequences of characters, like 'PHP supports string operations.'
//  Arrays: are named and indexed collections of other values.
//  Objects: are instances of programmer-defined classes, which can package up both
// other kinds of values and functions that are specific to the class.
//  Resources: are special variables that hold references to resources external to PHP
// (such as database connections).

// print $c = 0xf; hex integers

//***Values of type NULL are always false.
// if(NULL === false)
//   print "true";   //prints true //Values of type NULL are always false.
// else
//   print "false";



// If the value is an array, it is false if it contains no other values, and it is true
// otherwise. 

// For an object, containing a value means having a member variable that
// has been assigned a value.

//  Valid resources are true (although some functions that return resources when they
// are successful will return FALSE when unsuccessful).

//  Don't use double as Booleans.


// print 'hello';

// print "hell\\'o";

// $channel =<<<_XML_
// <channel>
// <title>What's For Dinner<title>
// <link>http://menu.example.com/<link>
// <description>Choose what to eat tonight.</description>
// </channel>
// _XML_;

// echo <<<END
// This uses the "here document" syntax to output
// multiple lines with variable interpolation. Note
// that the here document terminator must appear on a
// line with just a semicolon. no extra whitespace!
// <br />
// END;

// print $channel;

//** */

/** Global variables*/

// $somevar = 15;
// function addit() {
// GLOBAL $somevar;
// $somevar++;
// print "Somevar is $somevar";
// }
// addit();
// print $somevar;  //16

/** Variables function parameters
 * variables declared as function parameters,  are destroyed on the function's exit
 */
 // multiply a value by 10 and return it to the caller
// function multiply ($value) {
//   $value = $value * 10;
//   return $value;
//   }
//   $retval = multiply (10); //100
//   Print "Return value is $retval\n";


/**STATIC VARIABLES
 * variable to be static simply by placing the keyword STATIC in front of
the variable name.
 * static variable will not lose its value when the function exits and will still hold that value
should the function be called again.
 */
// function keep_track() {
//   STATIC $count = 0;
//   $count++;
//   print $count;
//   print "
//   ";
//   }
//   keep_track(); //1
//   keep_track(); //2
//   keep_track(); //3


/**CONSTANT 
 * Cannot change
 * not undefined or redefined
 * cannot be defined by simple assignment
 * UPPER_CASE
 * caseSENSitive
 * Constants may be defined and accessed anywhere without regard to variable scoping rules.
 * To define a constant you have to use define() function
 * retrieve the value of a constant, you have to simply specify its name
 * Only scalar data (boolean, integer, float and string) can be contained in constants.
 */

//  define("X", 30);
// echo X;
// print X;
// $return =  constant("X"); //constant() function //
// /**As indicated by the name, this function will return the value of the constant.
// This is useful when you want to retrieve value of a constant, but you do not know its name,
// i.e., it is stored in a variable or returned by a function. */  //NOTE********************

// print $return;

// define("_0X", 30);
// $X = constant("_0X");
// print _0X;
// print $X;

// define("ARR", array(2,3,4,5,5));
// print ARR[0]; //2
// //print constant('ARR'); // Array //Only scalar data (boolean, integer, float and string) can be contained in constants
// $var = constant('ARR');
// print $var[3];

define('__THREE__', 'hello'); //invalid constant

/** MAGIC CONSTANTS 
 * __LINE__
 * __FILE__
 * __FUNCTION__
 * __CLASS__
 * __METHOD__
*/
// echo __LINE__; //mutable constant depend on the line used
// echo __FILE__; //absolute path returned & filename
// print __FUNCTION__; //returns function name
// print __CLASS__; //returns class name
// echo __METHOD__; // returns method class name



?>

</body>
</html>