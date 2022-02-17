<?php
    class User {
        public $name = 'John';
        public $mail = 'john@gmail.com';

        public function go(){
            return $this->name.' Go';
        }
    }

    class AdminUser extends User{

    }

    $x = new AdminUser;
    $x->name = 'Mary';
    var_dump($x);

