<?php
    // 函式
    // function test(){
    //     $a = ['apple','banana'];
    //     echo implode(',',$a);
    // }

    // test();
    
    function test($array){
        return implode(',',$array);
    }
    $a = ['apple','banana'];
    $b = ['紅茶','綠茶'];
    // test($b);

    // function square($w,$h){
    //     echo $w*$h;
    // }

    // square(5,12);

    function square($x){
        return $x*$x;
    }

    // echo square(12);

    var_dump(test($b));

    