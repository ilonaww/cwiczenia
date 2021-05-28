<?php 
session_start():
trait Czytotenurl
{
    public function CzyToAktualnyUrl($url){
        if(strpos($_SERVER['PHP_SELF'], $url)==false)
        {
            return false;
        }else{
            return true;
        }
    }
}