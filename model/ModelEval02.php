<?php

function ajouterEleve($aEleve)
{

    global $aData;
    $aData[] = $aEleve;

}

function lireNote($aEmma)
{

    global $aData;
    foreach ($aData as $value) 
    {
        if ($value['prenom'] == $aEmma) {
            echo "\n";
            echo $value['note'];
            echo "\n";
        }
    }

}

function supprimerEleve($aGabriel)
{
    global $aData;
    foreach ($aData as $key => $value) {
         if ($value['prenom'] == $aGabriel) {
             unset($aData[$key]);
         }
     } 
}

function modifierNote($aManon, $nManon)
{
    global $aData;
    foreach ($aData as $key => $value) {
         if ($value['prenom'] == $aManon) {
            $aData[$key] = ['prenom'=> $aManon, 'note'=> $nManon];
         }
     } 
}

function ecrireCSV(){
    global $aData;
    $fp = fopen('file.csv', 'w');
    foreach ($aData as $fields) 
    {
    fputcsv($fp, $fields);
    }

fclose($fp);
}