<?php
    class RepeatCounter
    {
        function countRepeats($user_word, $user_string)
        {
            $input_check = explode(" ", $user_word);
            if(count($input_check) == 1){
                $lower_case_word = strtolower($user_word);
                $string_array = explode(" ", strtolower($user_string));
                $result = 0;
                foreach($string_array as $word){
                    if ($lower_case_word == $word){
                        ++$result;
                    }
                }
            } else {
                $result = -1;
            }

            return $result;
        }
    }
?>
