<?php
  require_once "src/WordCheck.php";
  class WordCheckTest extends PHPUnit_Framework_TestCase
  {
    function test_spliter(){
      $test_WordCheck = new WordCheck;
      $input= "i am a guy";
      $input_word = "guy";
      $result = $test_WordCheck->prep($input, $input_word);
      $this->assertEquals(["i", "am", "a", "guy"], $result);
    }
    function test_lower(){
      $test_WordCheck = new WordCheck;
      $input= "I am a guy";
      $input_word = "guy";
      $result = $test_WordCheck->prep($input, $input_word);
      $this->assertEquals(["i", "am", "a", "guy"], $result);
    }
    function test_lower_single(){
      $test_WordCheck = new WordCheck;
      $input= "I am a guy";
      $input_word = "GUY";
      $result = $test_WordCheck->prepword($input, $input_word);
      $this->assertEquals("guy", $result);
    }
    function test_check(){
      $test_WordCheck = new WordCheck;
      $input= ["i", "am", "a", "guy"];
      $input_word = "guy";
      $result = $test_WordCheck->countword($input, $input_word);
      $this->assertEquals( 1, $result);
    }
  }
 ?>
