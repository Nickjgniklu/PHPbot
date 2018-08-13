<?php
file_put_contents("/sys/devices/virtual/misc/gpio/mode/gpio12","1");//write pinmode output
$start = microtime();//store starting time of program
file_put_contents("time2.txt",strval($start));
while(strval($start) == file_get_contents("time2.txt")){

 if($_GET['runFunction'] == "stop"){
 file_put_contents("/sys/devices/virtual/misc/gpio/pin/gpio12","0");//write pin low
 }

 if($_GET['runFunction'] == "forward"){
 file_put_contents("/sys/devices/virtual/misc/gpio/pin/gpio12","1");//write pin high
 usleep(2500);
 file_put_contents("/sys/devices/virtual/misc/gpio/pin/gpio12","0");//write pin low
 usleep(20000);

}
 if($_GET['runFunction'] == "backward"){
 file_put_contents("/sys/devices/virtual/misc/gpio/pin/gpio12","1");//write pin high
 usleep(500);
 file_put_contents("/sys/devices/virtual/misc/gpio/pin/gpio12","0");//write pin low
 usleep(20000);

}

}



?>
