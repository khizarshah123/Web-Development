<?php
$s1 = 30;
$s2 = 50;
$s3= 80;
$s4= 90;
$s5= 99;    //name ,course ,topic
$s6= 45;

$obtainedmarks = $s1+$s2+$s3+$s4+$s5+$s6; 
$totalmarks = 400;
$percentage = $obtainedmarks/$totalmarks*100;


if($percentage<=60)
    { 
        
echo('<h1>-----------------------------------------------------Marksheet--------------------------------------------------<h1>');
echo('Subjects');
echo('<br><br>s1 = '.$s1);
echo('<br>s2 = '.$s2);
echo('<br>s3 = '.$s3);
echo('<br>s4 = '.$s4);
echo('<br>s5 = '.$s5);
echo('<br>s6 = '.$s6);

echo('<br><br>Obtained marks = '.$obtainedmarks);
echo('<br>Total marks = '.$totalmarks);
echo('<br>Percentage= '.$percentage.'%');
echo('<br>Result = Pass');

if($percentage>=95 && $percentage<=100)
{
    echo('<br>A+ Grade');
}
else if($percentage>=81 && $percentage<=90)
    {
      echo('<br>A Grade');
    }

else if($percentage>=75 && $percentage<=80)
    {
      echo('<br>B+ Grade');
    }
else if($percentage>=70 && $percentage<=74)
    {
      echo('<br>B Grade');
    }
else if($percentage>=60 && $percentage<=69)
    {
      echo('<br>C Grade');
    }
    }
else
    {
        echo('<br>Result = Fail');
    }
    
?>

