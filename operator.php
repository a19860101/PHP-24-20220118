<?php
    $x = 100;
    $y = 60;

    //算術運算子
    echo $x + $y ;
    echo "<br>";
    echo $x - $y ;
    echo "<br>";
    echo $x * $y ;
    echo "<br>";
    echo $x / $y ;
    echo "<br>";
    echo $x % $y ; //求餘數
    echo "<br>";
    
    // 比較運算子
    
    var_dump($x > $y);
    echo "<br>";
    var_dump($x >= $y);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    var_dump($x == $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";

    // (賦值)指定運算子

    echo $x = $y;
    echo "<br>";
    echo $x += $y;
    echo "<br>";
    echo $x -= $y;
    echo "<br>";
    echo $x *= $y;
    echo "<br>";
    echo $x /= $y;
    echo "<br>";
    echo $x %= $y;
    echo "<br>";
    echo $x;
    echo "<br>";

    // 邏輯運算子
    // && And
    // || Or
    // ! Not

    // 字串運算子
    $name = 'John';
    echo 'Hello '.$name;
    echo '<br>';

    // 三元運算子

    echo $x > 0 ? 'success':'error';