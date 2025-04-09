<?php /** @noinspection ALL */

function generateAns($wordLength): string
{
    $connection = mysqli_connect("localhost", "root", "", "ozdz");
    $sql = "SELECT slowo FROM slowa WHERE dlugosc_slowa = $wordLength";
    $slowaXliterowe = array();

    $result = mysqli_query($connection, $sql);

    while ($row = $result->fetch_assoc()){
        array_push($slowaXliterowe, $row["slowo"]);
    }



    return $slowaXliterowe[rand(0, count($slowaXliterowe) - 1)];
}