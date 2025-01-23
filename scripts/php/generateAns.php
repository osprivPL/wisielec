<?php /** @noinspection ALL */
const SLOWA = array(3 => array("kot", "pies", "dom", "las", "miś", "dąb"),
    4 => array("ryba", "kawa", "mama", "tata", "lato", "zima", "ptak", "koza", "wino", "drzwi"),
    5 => array("rower", "jabłko", "drzewo", "pomoc", "wiosna", "słoń", "kwiat", "stół", "świnia", "lampa"),
    6 => array("krzesło", "ogórek", "słońce", "łóżko", "cukier", "piłka", "okno", "szklanka", "traktor", "kwiaty"),
    7 => array("komputer", "telewizor", "kalendarz", "telefon", "człowiek", "fotelik", "kanapa", "rodzina", "książka", "przyjaciel"),
    8 => array("samolot", "fryzjer", "apteka", "biblioteka", "kuchnia", "truskawka", "szkoła", "mieszkanie", "ogród", "sierpnia"),
    9 => array("samochody", "ceramika", "dzieciaki", "jedzenie", "przedszkole", "podróże", "nauczyciel", "gospodarz", "śniegowy", "tęczowy"),
    10 => array("ceramiczna", "dziecięcy", "przedszkola", "kwiatowy", "słoneczny", "księgarnia", "pracowity", "niedzielny", "tygodnik", "miesięcznik"),
    11 => array("miesiączka", "przedszkolak", "człowieczeństwo", "przyjacielski", "telewizyjny", "komputerowy"));

function generateAns($wordLength):string{
    return SLOWA[$wordLength][rand(0, count(SLOWA[$wordLength])-1)];
}