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
function multiply($a, $b) {
    return $a * $b;
}

// TESTS
// echo multiply(4,5);
// echo multiply(6,3); 
// echo multiply(2,1);

/* 
Challenge Two: Define a method hello that returns "Hello, Name!" to a given name, or says Hello, World! if name is not given (or passed as an empty String). Assuming that name is a String and it checks for user typos to return a name with a first capital letter (Xxxx).
Challenge Source: https://www.codewars.com/kata/57e3f79c9cb119374600046b/php
*/

function hello($name = ''): string {
    if ($name) {
        return 'Hello, '.strtoupper(substr($name, 0, 1)).''.strtolower(substr($name, 1).'!');
    } else {
        return 'Hello, World!';
    }
}

// TESTS
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
// echo arr();
// echo arr(4);
// echo arr(0);

/* 
Challenge Four: Return the number (count) of vowels in the given string. We will consider a, e, i, o, u as vowels for this Kata (but not y). The input string will only consist of lower case letters and/or spaces.
Challenge Source: https://www.codewars.com/kata/54ff3102c1bad923760001f3
*/

function getCount($str) {
  
    return strlen(preg_replace("/[^aeiou]/i", "", $str));
}

// TESTS
// echo getCount("abracadabra");

/* 
Challenge Five: Your task is to make a function that can take any non-negative integer as an argument and return it with its digits in descending order. Essentially, rearrange the digits to create the highest possible number.
Challenge Source: https://www.codewars.com/kata/5467e4d82edf8bbf40000155
*/

function descendingOrder(int $n): int {
    // Replace with your code
    $parseFloat = floatval($n);
    $toString = strval($parseFloat);
    $length = 1;
    $splitStr = str_split($toString, $length);
    rsort($splitStr);
    $joined = implode($splitStr);
    $sign = $n <=> 0;
    return $joined * $sign;
  }

  // TESTS
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
// toJadenCase("How can mirrors be real if our eyes aren't real");

/* 
Challenge Seven: Define a function that takes one integer argument and returns logical value true or false depending on if the integer is a prime. Per Wikipedia, a prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself.

Challenge Source: https://www.codewars.com/kata/5390bac347d09b7da40006f6
*/

function is_prime(int $n): bool {

    for ($x = 2; $x * $x <= $n; $x++) {
      if ($n % $x === 0) return false;
    }
    return $n > 1;
  }

  // TESTS
//   echo is_prime(1);
//   echo is_prime(2);
//   echo is_prime(-1);

/* 
Challenge Eight: In this kata, you will write a function that returns the positions and the values of the "peaks" (or local maxima) of a numeric array. For example, the array arr = [0, 1, 2, 5, 1, 0] has a peak at position 3 with a value of 5 (since arr[3] equals 5). The output will be returned as an object with two properties: pos and peaks. Both of these properties should be arrays. If there is no peak in the given array, then the output should be {pos: [], peaks: []}. Example: pickPeaks([3, 2, 3, 6, 4, 1, 2, 3, 2, 1, 2, 3]) should return {pos: [3, 7], peaks: [6, 3]} (or equivalent in other languages). All input arrays will be valid integer arrays (although it could still be empty), so you won't need to validate the input. The first and last elements of the array will not be considered as peaks (in the context of a mathematical function, we don't know what is after and before and therefore, we don't know if it is a peak or not). Also, beware of plateaus !!! [1, 2, 2, 2, 1] has a peak while [1, 2, 2, 2, 3] and [1, 2, 2, 2, 2] do not. In case of a plateau-peak, please only return the position and value of the beginning of the plateau. For example: pickPeaks([1, 2, 2, 2, 1]) returns {pos: [1], peaks: [2]} (or equivalent in other languages)
Challenge Source: https://www.codewars.com/kata/5279f6fe5ab7f447890006a7
*/

function checkPlateau($arr) {
  $value = $arr[0];
  for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] > $value) return false;
    if ($arr[$i] < $value) return true;
  }
}

function pickPeaks(array $arr) {
    // Replace with your code
    $output = array('pos' => array(), 'peaks' => array());
      
    for ($i=1;$i<count($arr)-1;$i++) {
      
      if ($arr[$i-1] < $arr[$i]) {
        if ($arr[$i] > $arr[$i+1]) {
        array_push($output['pos'], $i);
        array_push($output['peaks'], $arr[$i]);
      } else {
          if ($arr[$i] === $arr[$i+1]) {
            if (checkPlateau(array_slice($arr, $i))) {
              array_push($output['pos'], $i);
              array_push($output['peaks'], $arr[$i]);
            }
          }
        } 
      }
    }
  return $output;
}

// TESTS
// echo pickPeaks([1,2,3,6,4,1,2,3,2,1]);
// echo pickPeaks([3,2,3,6,4,1,2,3,2,1,2,3]);
// echo pickPeaks([3,2,3,6,4,1,2,3,2,1,2,2,2,1]);
// echo pickPeaks([2,1,3,1,2,2,2,2,1]);
// echo pickPeaks([2,1,3,1,2,2,2,2]);
// echo pickPeaks([2,1,3,2,2,2,2,5,6]);
// echo pickPeaks([2,1,3,2,2,2,2,1]);
// echo pickPeaks([1,2,5,4,3,2,3,6,4,1,2,3,3,4,5,3,2,1,2,3,5,5,4,3]);
// echo pickPeaks([]);
// echo pickPeaks([1,1,1,1]);

/* 
Challenge Nine: Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').
Challenge Source: https://www.codewars.com/kata/515de9ae9dcfc28eb6000001
*/

function solution($str) {
  return $str === "" ? [] : str_split(
    strlen($str) % 2 === 0 ? $str : $str . '_', 2
  );
}
// TESTS 
// echo solution('abc');
// echo solution('abcdef');

/* 
Challenge Ten: Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case).
Challenge Source: https://www.codewars.com/kata/517abf86da9663f1d2000003
*/

function toCamelCase($str){
  return preg_replace_callback('/(\-|\_)([a-z])/i', function($match) {
    return strtoupper($match[2]);
  }, $str);
}

// TESTS
// echo toCamelCase("the-stealth-warrior");
// echo toCamelCase("The_Stealth_Warrior");

/* 
Challenge Eleven: Trolls are attacking your comment section!

A common way to deal with this situation is to remove all of the vowels from the trolls' comments, neutralizing the threat.

Your task is to write a function that takes a string and return a new string with all vowels removed.

For example, the string "This website is for losers LOL!" would become "Ths wbst s fr lsrs LL!".

Note: for this kata y isn't considered a vowel.
Challenge Source: https://www.codewars.com/kata/52fba66badcd10859f00097e/php
*/

function disemvowel($string) {
  return preg_replace('/[aeiou]/i', "", $string);
}

// TESTS
echo disemvowel("This website is for losers LOL");
?>
</body>

</html>