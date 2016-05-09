<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function BSColumn($xs, $sm, $md, $lg, $nCol, &$offsetFirstRow, &$rowSet)
{
         
//    $nCol = 4;
//    $xs = 3;$sm = 1;$md = 1;$lg = 1;
    
//    function intdiv($a, $b){
//        return ($a - $a % $b) / $b;
//    }
    
//    function offsetColumn($width, $nColumn)
//    {
//        if(nColumn == 1){
//            
//        }
//    }
    
//    if(isset($offsetFirstRow))
//    {
        
//        $xsO=(12-($nCol*$xs))/2; $smO=(12-($nCol*$sm))/2; $mdO=(12-($nCol*$md))/2; $lgO=(12-($nCol*$lg))/2;
        $xsO=floor((12-($nCol*$xs))/2); 
        $smO=floor((12-($nCol*$sm))/2); 
        $mdO=floor((12-($nCol*$md))/2); 
        $lgO=floor((12-($nCol*$lg))/2);
        $rowSet = "col-xs-$xs col-sm-$sm col-md-$md col-lg-$lg";
//        $offsetFirstRow = "col-xs-$xs col-sm-$sm col-md-$md col-lg-$lg col-xs-offset-$xsO col-sm-offset-$smO col-md-offset-$mdO col-lg-offset-$lgO"; 
        $offsetFirstRow = "$rowSet col-xs-offset-$xsO col-sm-offset-$smO col-md-offset-$mdO col-lg-offset-$lgO"; 
//         return $rowSet;
//    }      
//    else
//    {
//        
//    }
}
