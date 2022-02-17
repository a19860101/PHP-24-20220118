<?php
    class User {
        public $publicName = 'public';
        private $privateName = 'private';
        protected $protectedName = 'protected';
        public $mail = 'john@gmail.com';

        public function go(){
            return $this->name.' Go';
        }
        public function test(){
            // return $this->privateName;
            return $this->protectedName;
        }
    }

    class AdminUser extends User{
        public function test2(){
            return $this->protectedName;
        }
    }

    $x = new User;
    $y = new AdminUser;
    // $x->name = 'Mary';
    // var_dump($x);

    // echo $x->publicName;
    // echo $y->publicName;
    // echo $x->privateName;
    // echo $y->privateName;
    // echo $x->test();
    // echo $y->test();
    // echo $x->protectedName;
    // echo $y->protectedName;

    echo $y->test2();
    // var_dump($y);

