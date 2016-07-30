/**
Usha Vishwakarma 
This scripts displays the date and day and month which salary will pe paid off
*/

<?php
date_default_timezone_set('UTC');

function firstDayOftheMonth($month){
    return date('j',mktime(1,1,1,$month,1,date('Y')));
}

function lastDayOfTheMonth($month){
    return date('j',mktime(-1,-1,-1,$month+1,1,date('Y')));
}

function daysInMonth($month){
	$calendar = CAL_GREGORIAN;
    return cal_days_in_month($calendar, $month, date('Y'));
}

function getDay($day, $month){
    return date('l', mktime(0, 0, 0, $month, $day, date('Y')));
}

// Set year and month variables.
$months = 12;

echo "<strong>Month Name, 1st Expenses Day, 2nd Expenses Day, Salary Day</strong><br />";

// Loop through months
for($month=1; $month <= $months; $month++){
    echo "<strong>" . date('F', mktime(1, 1, 1, $month, 1, date('Y'))) . "</strong><br />";
    // Get No# days for each month of the year.
    $days = daysInMonth($month);
    // Loop through all days of the month.
    for($d=1; $d <= $days; $d++){
        // Get textual days
        $day = getDay($d, $month);
        if($d==firstDayOftheMonth($month) || $d==lastDayOfTheMonth($month) || $d==15){
            echo $d . " " . $day . " " . date('Y')." , ";
        }
    }

     echo "<hr />";
}

?>