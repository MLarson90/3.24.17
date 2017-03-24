<?php
  class WordCheck
  {

  function prep($input, $input_word){
    $string_lower = strtolower($input);
    $split_str = explode(" ", $string_lower);
    return $split_str;
  }
  function noPunc($input){
    $notAllowed = array("?","!",",","/","`","~","@","#","$","%",".");
    $sentence = $input;
    return str_replace($notAllowed, " " , $sentence);
  }
  function prepword($input, $input_word){
    $lower_single = strtolower($input_word);
    return $lower_single;
  }
  function countword($input, $input_word){
    $counter= 0;
    foreach ($input as $inputs) {
      if($inputs == $input_word){
        $counter += 1;
      }
    }
    return $counter;
  }


  }

 ?>
