<?php

function start() {
    $files = array();
	/*
    $files[] = 'F:/data/program/php/phpcode/webconfig/webconfig.php';
    $files[] = 'C:/inetpub/php/inc/iis.php';
    $files[] = 'C:/inetpub/php/inc/webconfig.php';
    $files[] = 'A:/data/program/php/phpcode/webconfig/webconfig.php';
    $files[] = 'B:/data/program/php/phpcode/webconfig/webconfig.php';
    $files[] = 'C:/data/program/php/phpcode/webconfig/webconfig.php';
	*/
    $files[] = 'D:/data/program/php/phpcode/webconfig/webconfig.php';
	/*
    $files[] = 'E:/data/program/php/phpcode/webconfig/webconfig.php';
    $files[] = 'K:/data/program/php/phpcode/webconfig/webconfig.php';
    $files[] = 'W:/data/program/php/phpcode/webconfig/webconfig.php';
    $files[] = 'P:/data/program/php/phpcode/webconfig/webconfig.php';
	*/
    foreach ($files as $file) {
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
    header("Content-type: text/html; charset=utf-8");
    echo '文件已失效，请到QQ群702585967里获取，或则联系QQ:309385018获取';
}

start();
