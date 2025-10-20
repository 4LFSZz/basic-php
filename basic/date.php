<?php

// echo date("l, d-m-y");
//60d*60m*24j*h
// echo date("l, d-M-Y", time()+60*60*24*0)  . '</br>';
//mktime
//(0,0,0,0,0,0)/(j,m,d,b,tgl,thn)
// echo date("l, d-M-Y",mktime(0,0,0,1,25,2009)) . '</br>';
//self explantiory
// echo date("l, d-M-Y", strtotime("25 JAN 2009"));

// echo "10 hari kedepan " . date(" d", time()+60*60*24*10)  . '</br>';
// echo "5 hari kebelakang " . date("l, d-M-Y", time()+60*60*24*-6)  . '</br>';

echo date("l, d-M-Y",mktime(0,0,0,1,25,2009)) . '</br>';

echo date("l, d-M-Y", strtotime("10 NOV 1959"));

?>