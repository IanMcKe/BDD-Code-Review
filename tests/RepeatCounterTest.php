<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_oneLetterEverything()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "a";
            $input_string = "a";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(1, $result);
        }
    }
?>
