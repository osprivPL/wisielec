<?php /** @noinspection ALL */
const SLOWA = array(3 => array("kot", "dom", "las", "miś", "dąb"),
    4 => array("ryba", "pies", "kawa", "mama", "słoń", "stół", "tata", "lato", "zima", "ptak", "koza", "wino", "okno"),
    5 => array("rower", "ogród", "drzwi", "pomoc", "kwiat", "lampa", "łóżko", "piłka"),
    6 => array("apteka", "jabłko", "szkoła", "drzewo", "wiosna", "świnia", "ogórek", "słońce", "cukier", "kanapa", "kwiaty"),
    7 => array("fryzjer", "samolot", "krzesło", "traktor", "telefon", "fotelik", "rodzina", "podróże", "książka", "tęczowy"),
    8 => array("człowiek", "śniegowy", "tygodnik", "komputer", "szklanka", "kwiatowy", "kuchnia", "ceramika", "jedzenie", "sierpień"),
    9 => array("samochody", "telewizor", "kalendarz", "słoneczny", "pracowity", "truskawka", "dzieciaki", "dziecięcy", "nauczyciel", "gospodarz",),
    10 => array("ceramiczna", "miesiączka", "mieszkanie", "biblioteka", "księgarnia", "niedzielny", "przyjaciel"),
    11 => array("przedszkole", "przedszkola", "miesięcznik", "telewizyjny", "komputerowy"));

function generateAns($wordLength): string
{
    $slowaXliterowe = SLOWA[$wordLength];
    $slowo = $slowaXliterowe[rand(0, count($slowaXliterowe) - 1)];
    return $slowo;
}