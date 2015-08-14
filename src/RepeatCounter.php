<?php
    class RepeatCounter
    {
        function countRepeats($user_word, $user_string)
        {

            $string_array = explode(" ", $user_string);
            $result = 0;
            foreach($string_array as $word){
                if ($user_word == $word){
                    ++$result;
                }
            }
            return $result;
        }
    }
?>
