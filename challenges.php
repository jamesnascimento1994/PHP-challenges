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

function arr($n=null) {
    $newArr = [];
    if ($n == NULL) {
      return $newArr;
    }
    $x = 0;
    while ($x < $n) {
        array_push($newArr, $x++);
    }
    return $newArr;
  }

// TESTS
echo arr();
echo arr(4);
echo arr(0);
?>
</body>
</html>