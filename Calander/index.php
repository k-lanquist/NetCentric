<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //get data to pass to calendar function
            $time = time();
            $today = date('j', $time);
            $days =  $today ;
           
           
            echo generate_calendar(date('Y', $time), date('n', $time), $days);

            function generate_calendar($year, $month, $days){
              
            //Use gmnktime to get firts of month and pass it to gmstrftime. explode into list
            $first_of_month = gmmktime(0, 0, 0, $month, 1, $year);
            list($month, $year, $month_name, $weekday) = explode(',', gmstrftime('%m, %Y, %B, %w', $first_of_month));
            
           

            //HTML code from Gareth Downes-Powell: https://www.dmxzone.com/go/5728/creating-a-simple-calendar-in-php/page2.htm
            echo "<table width='280' border='1'>";
            echo "<tr>";
            echo "<td align='center'>$month_name  $year </td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td>";
                echo "<table width='280'  border='0' cellspacing='2' cellpadding='2'>";
                  echo "<tr align='center'>";
                    echo "<td width='40'>Sun</td>";
                    echo "<td width='40'>Mon</td>";
                    echo "<td width='40'>Tue</td>";
                    echo "<td width='40'>Wed</td>";
                    echo "<td width='40'>Thur</td>";
                    echo "<td width='40'>Fri</td>";
                    echo "<td width='40'>Sat</td>";
                  echo "</tr>";
                echo "</table>";
              echo "</td>";
            echo "</tr>";
          echo "</table>";

          //Create another table in the same styling
          echo "<table width='290'  border='1' cellspacing='2' cellpadding='2'>";
          //Find the amount of days in month
          $count = cal_days_in_Month(CAL_GREGORIAN, $month, $year)  + 1;
          //First for loop places blank spaces untill reach first day
          for ($i =0 ;$i <7; $i++ ){
             //weekday = numercal value of first day (sun = 0)
             if ($i == $weekday){
                 //Place 1 to 31
                 for ($t = 1;$t <$count; $t++ ){
                  echo "<td width='40' align='center'>$t";
                  
                 //close the row when a week is reached
                 if (($t+$weekday) % 7 == 0) {
                    echo "</tr>";
                    
                  }
                 }
              break;
             }

             //place spaces until first day
             else{
                 echo "<td width='40'>";
             }
          }
          echo"</table>";

        }         
         
                
?>
       
    </body>
</html>
