<?php

$my_String = "Esta frase tiene varias vocales acumuladas";
$vocals = ['a', 'e', 'i', 'o', 'u'];

function searchVocals(array $vocals, string $my_String): array {

    $allVocals = [];

    for($i = 0; $i < strlen($my_String); $i++) {

        foreach($vocals as $vocal) {

            if($vocal === $my_String[$i]){

                array_push($allVocals, strtolower($my_String[$i]));

            }
        }
    }

    return $allVocals;
}

$my_Count = searchVocals($vocals, $my_String);
print_r(array_count_values($my_Count));

?>