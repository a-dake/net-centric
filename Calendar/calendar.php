<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="themeCal.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
       $Months ='March';
       $Year = 2017;
       
       echo'<h1>'.$Months." ".$Year.'<h1>';
       calendar(3, 2017);
         
        function calendar($Month, $Year) {
            $JulianDate = gregoriantojd($Month, 1, $Year);
            $startDay = jddayofweek($JulianDate);
            $numDays = cal_days_in_Month(CAL_GREGORIAN, $Month, $Year);
            echo'<table>', '<tr>';
            for ($i = 0; $i < $startDay; $i++) {
                echo '<td>' . " " . '</td>';
            }
            $currentDay = $startDay;
            for ($i = 1; $i <= $numDays; $i++) {
                echo'<td>' . $i . '</td>';
                $currentDay++;
                if ($currentDay % 7 == 0) {
                    echo '</tr>';
                    echo '<tr>';
                }
            }
            echo '</tr>', '</table>';
        }
        ?>
    </body>
</html>
