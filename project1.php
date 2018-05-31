<?php
$t1=$_POST['t1'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$opt=$_POST['opt'];
$result=0;

if($opt!="")
{
if($opt=='plus')
{
$result=$t1+$t2+$t3;
}
if($opt=='minus')
{
  $result=(($t1-$t2)-$t3);
}
if($opt=='average')
{
  $result=($t1+$t2+$t3)/3;
}
if($opt=='multiplication')
{
  $result=$t1*$t2*$t3;
}
if($opt=='custom1')
{
  $result=($t1*$t2)+$t3;
}
if($opt=='custom2')
{
  $result=($t1/$t3)*$t2;
}
if($opt=='custom3')
{
  $result=($t1/2)+($t2+$t3)/2;
}
echo "T1 : $t1<br> T2 : $t2<br>T3 : $t3<br>opt : $opt<br> Result : $result";
}
else {
echo "<h1>Please Select Some operation and continue...</h1>";
}

?>
