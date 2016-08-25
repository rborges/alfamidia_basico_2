<?php

$v1 = TRUE;
$v2 = TRUE;

$tabela;



while (count($tabela) < 8) {

    if ($v1 AND $v2) {

        $tabela[] = ["V1 AND V2" => "$v1 AND $v2"];

        $v1 = mudaBool($v1);
    } elseif ($v1 OR $v2) {

        $tabela[] = ["V1 OR V2" => "$v1 OR $v2"];

        $v2 = mudaBool($v2);
    } elseif ($v1 XOR $v2) {

        $tabela[] = ["V1 XOR V2" => "$v1 XOR $v2"];

        $v1 = mudaBool($v1);
    } elseif ($v1 && $v2) {

        $tabela[] = ["V1 && V2" => "$v1 && $v2"];

        $v2 = mudaBool($v2);
    } elseif ($v1 || $v2) {

        $tabela[] = ["V1 || V2" => "$v1 || $v2"];

        $v1 = mudaBool($v1);
        $v2 = mudaBool($v2);
    }
}

function mudaBool($a) {

    return !$a;
}

echo "<ul>";

foreach ($tabela as $tab) {

    foreach ($tab as $key => $value) {

        echo "<li> {$key} => {$value}</li>";
    }
}

echo "</ul>";
