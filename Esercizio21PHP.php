<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8    ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nomiStudenti = ["Mattia" ,  "Davide" , "Fabio"];
    $cognomiStudenti = ["Gori" ,  "Susini" , "Zavataro"];

    $studenti = [];
    for ($i=0; $i < 3 ; $i++) { 
        $stud = [
            "nome" => $nomiStudenti[rand(0,2)], 
            "cognome" => $cognomiStudenti[rand(0,2)], 
            "voti" => [rand(2,10), rand(2,10), rand(2,10),]
        ];
        
        array_push($studenti, $stud); 
    }

    ?>


    <table style="border-collapse: collapse; width: 100%; text-align: center;">
    <tr>
        <th style="padding: 10px; background-color: cyan; color: white">Nome</th>
        <th style="padding: 10px; background-color: yellow; color: white">Cognome</th>
        <th style="padding: 10px; background-color: red; color: white">Media Voti</th>
        <th style="padding: 10px; background-color: green; color: white">Voto Massimo</th>
    </tr>

    <?php
    
    foreach ($studenti as $studente) {

        $mediaVoti = number_format(array_sum($studente["voti"]) / count($studente["voti"]), 2);  //ARRAY_SUM calcola la somma di tutti i voti dentro l'array

        $votoMassimo = $studente["voti"][0];
        foreach ($studente["voti"] as $voto) {
            if ($voto > $votoMassimo) {
                $votoMassimo = $voto;
            }
        }

        echo "<tr>";
        echo "<td style='padding: 10px'> $studente[nome] </td> <td style='padding: 10px'> $studente[cognome] </td> <td style='padding: 10px'> $mediaVoti </td> <td style='padding: 10px'> $votoMassimo </td>";
        echo "</tr>";
    }

    ?>
    </table>

</body>
</html>
