<?php

    class Operacion_M{
        public static function sumar($num1, $num2){
            if (empty($num1)) {
                echo "Los campos no deben estar vacios";
            }elseif (empty($num2)) {
                echo 'Los campos no deben estar vacios';
            }else {
                $s = $num1 + $num2;
                return $s; 
            }
             
        }
        public static function restar($num1, $num2){
            if (empty($num1)) {
                echo 'Los campos no deben estar vacios';
            }elseif (empty($num2)) {
                echo 'Los campos no deben estar vacios';
            }else {
                $r = $num1 - $num2;
                return $r; 
            }
            
        }
        public static function multiplicar($num1, $num2){
            if (empty($num1)) {
                echo 'Los campos no deben estar vacios';
            }elseif (empty($num2)) {
                echo 'Los campos no deben estar vacios';
            }else {
                $m = $num1 * $num2;
                return $m;
            }
            
        }
        public static function dividir($num1, $num2){            
            if ($num2 == 0) {
                return "La división entre 0 no es posible";
            }elseif (empty($num1)) {
                echo 'Los campos no deben estar vacios';
            }elseif (empty($num2)) {
                echo 'Los campos no deben estar vacios';
            }else {
                $d = $num1 / $num2;
                return $d;
            }
            
        }
    }
    