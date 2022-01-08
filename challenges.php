<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
/* 
Challenge One:  This code does not execute properly. Try to figure out why.
Challenge Source: https://www.codewars.com/kata/50654ddff44f800200000004/solutions/php      
*/

// Starter Code
// function multiply(a, b) {
//     return a * b;
// }

// Solution
// function multiply($a, $b) {
//     return $a * $b;
// }

// // TESTS
// echo multiply(4,5);
// echo multiply(6,3); 
// echo multiply(2,1);

/* 
Challenge Two: Define a method hello that returns "Hello, Name!" to a given name, or says Hello, World! if name is not given (or passed as an empty String). Assuming that name is a String and it checks for user typos to return a name with a first capital letter (Xxxx).
Challenge Source: https://www.codewars.com/kata/57e3f79c9cb119374600046b/php
*/

// function hello($name = ''): string {
//     if ($name) {
//         return 'Hello, '.strtoupper(substr($name, 0, 1)).''.strtolower(substr($name, 1).'!');
//     } else {
//         return 'Hello, World!';
//     }
// }

// // TESTS
// echo hello('jImMy');
// echo hello('');
// echo hello();

/* 
Challenge Three: We want an array, but not just any old array, an array with contents! Write a function that produces an array with the numbers 0 to N-1 in it.
Challenge Source: https://www.codewars.com/kata/571d42206414b103dc0006a1
*/

// function arr($n=null) {
//     $newArr = [];
//     if ($n == NULL) {
//       return $newArr;
//     }
//     $x = 0;
//     while ($x < $n) {
//         array_push($newArr, $x++);
//     }
//     return $newArr;
//   }

// // TESTS
// echo arr();
// echo arr(4);
// echo arr(0);

/* 
Challenge Four: Return the number (count) of vowels in the given string. We will consider a, e, i, o, u as vowels for this Kata (but not y). The input string will only consist of lower case letters and/or spaces.
Challenge Source: https://www.codewars.com/kata/54ff3102c1bad923760001f3
*/

// function getCount($str) {
  
//     return strlen(preg_replace("/[^aeiou]/i", "", $str));
// }

// // TESTS
// echo getCount("abracadabra");

/* 
Challenge Five: Your task is to make a function that can take any non-negative integer as an argument and return it with its digits in descending order. Essentially, rearrange the digits to create the highest possible number.
Challenge Source: https://www.codewars.com/kata/5467e4d82edf8bbf40000155
*/

// function descendingOrder(int $n): int {
//     // Replace with your code
//     $parseFloat = floatval($n);
//     $toString = strval($parseFloat);
//     $length = 1;
//     $splitStr = str_split($toString, $length);
//     rsort($splitStr);
//     $joined = implode($splitStr);
//     $sign = $n <=> 0;
//     return $joined * $sign;
//   }

//   // TESTS
//   echo descendingOrder(42145);
//   echo descendingOrder(145263);
//   echo descendingOrder(123456789);

/* 
Challenge Six: Jaden Smith, the son of Will Smith, is the star of films such as The Karate Kid (2010) and After Earth (2013). Jaden is also known for some of his philosophy that he delivers via Twitter. When writing on Twitter, he is known for almost always capitalizing every word. For simplicity, you'll have to capitalize each word, check out how contractions are expected to be in the example below. Your task is to convert strings to how they would be written by Jaden Smith. The strings are actual quotes from Jaden Smith, but they are not capitalized in the same way he originally typed them.

Challenge Source: https://www.codewars.com/kata/5390bac347d09b7da40006f6
*/

function toJadenCase($string) 
{
   //...
  return ucwords($string);
}

// TESTS
toJadenCase("How can mirrors be real if our eyes aren't real");
?>
</body>
</html>