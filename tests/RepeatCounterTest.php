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

        function test_correctCounting()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "hello";
            $input_string = "hello hello hello";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(3, $result);
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

        function test_capitalization()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "patrick";
            $input_string = "Patrick Stewart is good at acting";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_punctuation()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "acts";
            $input_string = "He acts, like William Shatner";

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_quotes()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "hello";
            $input_string = '"hello hello hello"';

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(3, $result);
        }
    }
?>
