<?php
    class Test {
        //物件屬性(變數)
        public $x = 10;
        public $y = 99;
        //物件方法(函式)
        public function asdf(){
            return 'Hello';
        }
    }


    $a = new Test;

    var_dump($a);

    $b = new Test;

    var_dump($b);