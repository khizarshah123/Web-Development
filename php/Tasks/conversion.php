<!-- conversion 

        min = 500 
            Total Hours 
            Total Seconds

        Second = 5000 
            Total Hours 
            Total Min 


        Hour = 5000 
            Total Seconds 
            Total Min  -->


    <?php
    $min = 500;
    $seconds = 5000;
    $hours = 5000;
    echo('<h1>In 500 minutes</h1>');
    echo('Total hours = '.$min/60);
    echo('<br>Total seconds = '.$min*60);

     echo('<h1>In 5000 seconds</h1>');
    echo('Total hours = '.$seconds/3600);
    echo('<br>Total min = '.$min/60);

    echo('<h1>In 5000 hours</h1>');
    echo('Total seconds = '.$hours*3600);
    echo('<br>Total min = '.$hours*60);
    ?>
           