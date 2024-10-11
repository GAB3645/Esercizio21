<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $studenti = [];
    $nomiStudenti = ["Mattia" ,  "Davide" , "Fabio"];
    $cognomiStudenti = ["Gori" ,  "Susini" , "Zavataro"];

    for ($i=0; $i <= 2 ; $i++) { 
        $listaVoti = array(rand(2,10) , rand(2,10) , rand(2,10));
        $stud = ["nome" => $nomiStudenti[rand(0,2)], "cognome" => $cognomiStudenti[rand(0,2)], "voti" => $listaVoti];  
        array_push($studenti, $stud); 
    }


?>



    <table style="border-collapse : collapse;">

    <tr>
        <th style="border: 1px solid black;">Nome</th>
        <th style="border: 1px solid black;">Cognome</th>
        <th style="border: 1px solid black;">Media Voti</th>
        <th style="border: 1px solid black;">Voto Massimo</th>
    </tr>



    <?php


    for ($i=0; $i < sizeof($studenti); $i++) {  
        echo "<tr style='border: 1px solid black'>";
        echo "<td> {$studenti[$i]['nome']} </td> <td> {$studenti[$i]['cognome']}</td> <td> {$studenti[$i]['cognome']}</td>";
        echo "</tr>";
    }






 
    ?>







</table>


</body>
</html>