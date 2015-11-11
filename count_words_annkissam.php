<?php
//Program Goal:
//Write a function that will count the words in a given passage(string)
//and return the 'word' & # of occurences for each word in the passage

function countWordsInPassage($passage) {
    //make sure string is all lowercase before counting
    $passage = strtolower($passage);
    //array_count_values returns # of word occurences, returns as key value pair
    //str_word_count, counts # of words in string
    $words = array_count_values(str_word_count($passage, 1));
    //print_r($words);
    foreach ($words as $key => $val) {
        if ($val == 1) {
            print "The word '$key', is found $val time in the passage.\n";
        }

        if ($val > 1) {
            print "The word '$key', is found $val times in the passage\n";

        }

    }

}
//function calls
countWordsInPassage("This is a new new new day!\n");
countWordsInPassage("To be, or not to be.\n");
countWordsInPassage("I've got a lovely bunch of coconuts. I've got a lovely bunch of coconuts.\n");