<?php
    class RepeatCounter
    {
        function countRepeats($user_word, $user_string)
        {
            $result = 0;
            
            if ($user_word == $user_string){
                ++$result;
            }

            return $result;
        }
    }
?>
