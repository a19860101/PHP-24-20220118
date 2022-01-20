<?php
    //判斷式

    $x = 0;

    //if
    if($x > 0){
        echo 'Success';
    }

    //if...else
    if($x > 0){
        echo 'Success2';
    }else{
        echo 'Error2';
    }

    $result = $x > 0 ? 'Success2':'Error2';
    echo $result;

    //if...elseif
    if($x > 0){
        echo '正數';
    }elseif($x < 0){
        echo '負數';
    }else{
        echo 'Error3';
    }

    // switch

    $a = 'efen';

    switch($a){
        case 'Sun':
            echo '星期日';
            break;
        case 'Mon':
            echo '星期一';
            break;
        case 'Tue':
            echo '星期二';
            break;
        case 'Wed':
            echo '星期三';
            break;
        case 'Thu':
            echo '星期四';
            break;
        case 'Fri':
            echo '星期五';
            break;
        case 'Sat':
            echo '星期六';
            break;
        default:
            echo '請重新輸入!!';
            
    }