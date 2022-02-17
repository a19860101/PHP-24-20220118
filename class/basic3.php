<?php
    class User {
        public $name = 'john';
        //建構子
        function __construct(){
            echo '建構子';
        }
        //靜態方法
        static function go(){
            return 'GO';
        }
    }

    $john = new User;
    $mary = new User;

    echo User::go();
    // echo $john->go();
