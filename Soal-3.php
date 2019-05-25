<?php
function CountVowels($String) {
    return substr_count($String, 'a')+substr_count($String, 'e')+substr_count($String, 'i')+substr_count($String, 'o')+substr_count($String, 'u');
}

echo CountVowels('makan skuy bang');
//Echos 17