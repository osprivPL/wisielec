<?php

function printArr(&$arr): void
{
    foreach ($arr as $key => $value) {
        echo $value.' ';
    }
}

function printSession(): void{
    foreach ($_SESSION  as $key => $value) {
        echo $key.' '.$value.'<br>';
    }
}
