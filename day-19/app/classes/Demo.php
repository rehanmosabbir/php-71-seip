<?php

namespace App\classes;
class Demo {
    public function wordCharacterCount($data){
        $stringLength = strlen($data['given_string']);
        $wordCount = str_word_count($data['given_string']);

        $result = [
            'string_length' => $stringLength,
            'word_count'=> $wordCount
        ];
        return $result;
    }
}