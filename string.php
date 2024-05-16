<?php

$strings = ["Hello","world","php","programming"];

foreach($strings as $string){
    // vowel count

    $vowelCount = preg_match_all('/[aeiou]/i', $string, $matches);

    // reverse string

    $reversedString = strrev($string);

    // print output

    echo"original string : $string, vowel count : $vowelCount, reversed string : $reversedString\n";
}

?>