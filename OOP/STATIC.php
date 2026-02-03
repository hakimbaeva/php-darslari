<?php
 class Calculator {
    public  static function  qoshish($a,$b) {
        return $a + $b;
    }
         public  static function  olish($a,$b) {
        return $a - $b;
         }
         public static function text($a) {
        return strtoupper($a);
    }
    }
                  
 
 echo Calculator::qoshish(15,15). "<br>";                                                                                                                                                                                                                                                                                                                                                  
 echo Calculator::olish(12,6);
echo Calculator::text("salom");
 
 




?>