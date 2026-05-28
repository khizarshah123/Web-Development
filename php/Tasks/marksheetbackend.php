
<?php
 
if(isset($_POST['submitbtn'])){
    echo "Submit btn is clicked<br>";
    
       $name = $_POST['name'];
       $fname = $_POST['fname'];
       $s1 = $_POST['sub1'];
       $s2 = $_POST['sub2'];
       $s3 = $_POST['sub3'];
       $s4 = $_POST['sub4'];
       $s5 = $_POST['sub5'];
       $s6 = $_POST['sub6'];

       $obtainedmarks = $s1+$s2+$s3+$s4+$s5+$s6;
       $totalmarks = 500;
       $percentage = $obtainedmarks/$totalmarks*100;

       echo('<br>Name = '.$name);
       echo('<br>Fname = '.$fname);
       echo('<br>Subject 1 marks = '.$s1);
       echo('<br>Subject 2 marks = '.$s2);
       echo('<br>Subject 3 marks = '.$s3);
       echo('<br>Subject 4 marks = '.$s4);
       echo('<br>Subject 5 marks = '.$s5);
       echo('<br>Subject 6 marks = '.$s6);
       echo('<br><br>Obtained marks = '.$obtainedmarks);
       echo('<br>Percentage = '.$percentage.'%');


       if($percentage>=90){
              echo('Grade = A+<br>');
       }else if( $percentage >=81 && $percentage<=89){
              echo('<br>Grade = A Pass');
       }else if( $percentage >=73 && $percentage<=80){
              echo('<br>Grade = B+ Pass');
       }else if( $percentage >=65 && $percentage<=72){
              echo('<br>Grade = B Pass');
       }else if( $percentage >=60 && $percentage<=64){
              echo('<br>Grade = C+ Pass');
       }else if( $percentage >=55 && $percentage<=59){
              echo('<br>Grade = C Pass');
       }else if( $percentage<50){
              echo('<br> FAIL');
       }
       
}else{
 echo('submit btn is not clicked');
}
?>