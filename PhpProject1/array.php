<?php
// this is example of numerical array in which count funtion is also used 
$a = array(6,8,24,52,4,2,4,24);
for($i=0;$i< count($a);$i++)
{
echo"<br>$a[$i]</br>";}
// array_sum () 
echo"<b><br> FROM THIS IT IS OTHER FUNTION USE FOR SUM<br></br>";
$b= array(1,41,66,26,24,54,24,24);
$c= array_sum($b);
echo " THE SUM IS: <br>$c<br>";

//array_product ()
echo"<b> FROM THIS IT IS OTHER FUNTION USE FOR product<b><br>";
$d= array(1,41,66,26,24,54,24,24);
$e= array_product($d);
echo " THE product IS: <br>$e<br>";

////array_reverse
echo"FROME HERE THERE IS OTHER FUNCTION CALLED ARRAY_REVERSE<br>";
$f=array("heelo","all","how","are","you");
$g = array_reverse($f);
echo"<pr>";
print_r($g);
echo"</pr><br>";

//in_array ( )
echo"FROME HERE THERE IS OTHER FUNCTION CALLED IN_ARRAY<br>";
$h = array('hi','all','I','am','fine');
$j = in_array("hi",$h);
echo"$j<br>";

//array_rand()
echo"FROM HEARE WE ARE GONNA SEE ARRAY_RAND FUNTION<br>";
$k=array("aakil","rahul","mayur","akash","hitarth","aamir","faisal","umer","prasanth","tarun");
$l = array_rand($k);
echo"$k[$l]<br>";


//array_unque()
echo"from now we gonna see araay_unique funtion <br>";
 $m = array("AAKIL","AAKIL","RAHUL","RAHUL");
 echo"<pre>";
 print_r(array_unique($m));
 echo"<pre>";
       
 //array_merge()
 echo"from now we gonna see araay_merge funtion <br>";
 $n = array("aaki","aamir","nasrin");
 $o =array("anam","marewali","family");
 $p =array_merge($n,$o);
 echo"<pre>";
 print_r($p);
 echo"</pre>";
 
 //array_search()
 echo"FROM now we goona see the example of array_search()<br>";
 $q=array("aakil","rahul","mayur","akash","hitarth","aamir","faisal","umer","prasanth","tarun");
 $r=array_search("mayur",$q);
 echo "$r<br>";
 
 
 
 

