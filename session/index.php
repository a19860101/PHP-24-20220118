<?php
    session_start();
    $_SESSION['TEST'] = '12345';
    
    echo $_SESSION['TEST'];