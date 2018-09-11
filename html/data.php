<?php

//load the data from test.js via an file_get_contents('test.js') into a variable called $animalsJSON

//convert the $animalsJSON into a PHP variable with json_decod and store it into $animals.  be sure to give it a second variable of true to decode it into associative arrays rather than php standard objects
//we don't need to do this normally, we're having fun with php!  loading in data via json!

//to do something different, let's sort the data, use this code
```
function sortFunction($a, $b) {
  return $a["name"] <=> $b["name"];
}
usort($animals, "sortFunction");
```
//very similar to the JS sort function, don't you think?

//encode the data back into json with json_encode into the variable $sortedAnimals
  
//print the $sortedAnimals variable


?>
