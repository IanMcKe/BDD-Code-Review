<?php
    class RepeatCounter
    {
        function countRepeats($user_word, $user_string)
        {
            $input_check = explode(" ", $user_word);
            if(count($input_check) == 1){
                //remove punctuation from $user_word
                $user_word_chars = str_split($user_word);
                $punctuation = array("?",".",",","!",":",";","(",")","[","]","{","}","/","'",'"',"*","$","#");
                foreach($user_word_chars as $character){
                    if(in_array($character, $punctuation)){
                        $punctuation_char_key = array_search($character, $user_word_chars);
                        unset($user_word_chars[$punctuation_char_key]);
                    }
                }
                $formatted_word = implode($user_word_chars);

                //remove punctuation from $user_string and push results into new array
                $string_array = explode(" ", $user_string);
                $formatted_string = array();
                foreach($string_array as $word){
                    $user_string_chars = str_split($word);
                    foreach($user_string_chars as $character){
                        if(in_array($character, $punctuation)){
                            $punctuation_char_key = array_search($character, $user_string_chars);
                            unset($user_string_chars[$punctuation_char_key]);
                        }
                    }
                    $formatted_part = implode($user_string_chars);
                    array_push($formatted_string, strtolower($formatted_part));
                }

                //set $user_word to lower case and count matches
                $lower_case_word = strtolower($formatted_word);

                $result = 0;
                foreach($formatted_string as $match){
                    if ($lower_case_word == $match){
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
