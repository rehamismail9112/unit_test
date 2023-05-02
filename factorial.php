<?php
class Calculator {

    public function add ($a, $b){
        return $a + $b;
    }

    public function factorial ($n){
        if(!is_numeric($n) || $n < 0 || floor($n) != $n){
            return null;
        } elseif($n == 0) {
            return 1;
        } else {
            return $n * $this->factorial($n - 1);
        }
    }
}
?>