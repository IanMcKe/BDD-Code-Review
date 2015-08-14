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

        function test_oneLetterOneWord()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "a";
            $input_string = "abacus";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_OneWordEverything()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "act";
            $input_string = "act";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_oneWordSubstring()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "act";
            $input_string = "acting";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(0, $result);
        }


        function test_multipleWordsNoSubstring()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "act";
            $input_string = "I act well";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_multipleWordsWithSubstring()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "act";
            $input_string = "acting act action activation";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_inproperInput()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "hi there";
            $input_string = "hi there scary man";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(-1, $result);
        }
    }
?>
