<?php
file_put_contents("/sys/devices/virtual/misc/gpio/mode/gpio13","1");//write pinmode output
$start = microtime();//store starting time of program
file_put_contents("time1.txt",strval($start));
while(strval($start) == file_get_contents("time1.txt")){

 if($_GET['runFunction'] == "stop"){
 file_put_contents("/sys/devices/virtual/misc/gpio/pin/gpio13","0");//write pin low
 }

 if($_GET['runFunction'] == "backward"){
 file_put_contents("/sys/devices/virtual/misc/gpio/pin/gpio13","1");//write pin high
 usleep(2500);
 file_put_contents("/sys/devices/virtual/misc/gpio/pin/gpio13","0");//write pin low
 usleep(20000);

}
 if($_GET['runFunction'] == "forward"){
 file_put_contents("/sys/devices/virtual/misc/gpio/pin/gpio13","1");//write pin high
 usleep(500);
 file_put_contents("/sys/devices/virtual/misc/gpio/pin/gpio13","0");//write pin low
 usleep(20000);

}

}



?>
