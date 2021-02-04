<?php
$counter_file = '../../../program/css/tq.css ';//文件名及路径知,在当前目录下新道建aa.txt文件
$fopen = fopen($counter_file, 'wb ');//新建文件命令回
fputs($fopen, 'p#tq {
            background-image: url(../../../png);
}	');//向文件中写入内答容;
fclose($fopen);
?>