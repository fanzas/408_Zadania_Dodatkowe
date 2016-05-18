<?php

function podajNumer($start, $stop, $jump){
    for($i = $start; $i <= $stop; $i = $i + $jump){
        echo($i."<br>");
    }
}
