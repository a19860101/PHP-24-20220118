<?php
    class User {
        public $name;
        public $nickname;
        public $tacticalAbility;
        public $passiveAbility;
        public $ultimateAbility;

        function run(){
            return 'run';
        }
        function jump(){
            return 'jump';
        }
        function attack($method){
            switch($method){
                case 'tactical':
                    $attack = 10;
                    break;
                case 'ultimate':
                    $attack = 60;
                    break;
            }
            return $attack;
        }

    }

    $ash = new User;
    $ash->name = '艾許';
    $ash->nickname = '敏銳煽動者';
    $ash->tacticalAbility = '電弧絆索';
    $ash->passiveAbility = '攻防戰';
    $ash->ultimateAbility = '相移裂縫';
    // echo $ash->run();
    echo $ash->attack('tactical');
    // var_dump($ash);

    $fuse = new User;
    $fuse->name = '轟哥';
    $fuse->nickname = '浮誇的爆炸專家';
    $fuse->tacticalAbility = '榴彈槍';
    $fuse->passiveAbility = '榴彈兵';
    $fuse->ultimateAbility = 'Motherlode';
    // var_dump($fuse);
    echo $fuse->jump();
