<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller{

    public function palindrome(){
        $arr = ["abba","caac","abdc","fdedf"];
        $sum = 0 ;
        for ($i=0; $i<count($arr); $i++){
            $str = $arr[$i];
            $flag = false;
             for ($j=0; $j<strlen($str); $j++){

                 if ($str[$j]==$str[strlen($str)-1-$j]){
                     $flag = true;
                 }
             }
            if ($flag == true){ 
                $sum = $sum + 1;
            }
        }
        echo "Sum of palindromes = $sum";
    }
    public function secondsPassed(){

      $start = date_create('1732-04-14 00:00:00');
      $end = date_create('2022-06-7 00:00:00');
      echo " The number of seconds passed since 14 april 1732 are:";
      echo $end->getTimestamp() - $start->getTimestamp(); 
    } 
}
