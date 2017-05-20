</style>
</head>
<body>

<h2 style=" margin-left: 608px; color:brown; ">iPrefer</h2>

<?php
$monthNames = Array("January", "February", "March", "April", "May", "June", "July",
                     "August", "September", "October", "November", "December"); 

if (!isset($_GET["month"]))
{
    $_GET["month"]=date("n");
    }

    if (!isset($_GET["year"]))
    {
        $_GET["year"]=date("Y");
    }


    $current_month=$_GET["month"] ;
    $current_year=$_GET["year"] ;


    $prevous_month=$current_month-1;
    $next_month=$current_month+1;

    $prevous_year=$current_year-1;
    $next1_year=$current_year+1;


    $prev_year=$current_year;
    $next_year=$current_year;

    if( $prevous_month == 0 )
    {

        $prevous_month= 12;
        $prev_year=$current_year-1;
    }

    if( $next_month == 13 )
    {

        $next_month=1;
        $next_Year=$current_year+1;
    }

    echo "<table style='margin-top: 50px; margin-left: 586px;'>


    <tr>
    <td colspan=1 align='center' style='color:pink'><button> <a href=". "?year=" . $prevous_year." ><<</a></button></td>

    <td colspan=1 align='center'> <button><a href="."?month=".$prevous_month."&year=".$prev_year."><</a></button></td>

    <td colspan=3 align='center'><button > <a href= "."?month=".date('m')."&year=".date('Y').">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Today Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>

    <td colspan=1 align='center'><button> <a href=". "?month=".$next_month. "&year=" . $next_year.">></a></button></td>

    <td colspan=1 align='center'><button> <a href=" ."?year=" . $next1_year.">>></a></button></td>

    </tr>

    <tr>
    <td></td><td></td><td colspan=3 align=center style='color:green'>".date('d').", ".$monthNames[$current_month-1].", ". $current_year."</td>
    </tr>

    <tr>
    <td align='center' style='color:red'>Sun</td>
    <td align='center' style='color:blue'>Mon</td>
    <td align='center' style='color:blue'>Tue</td>
    <td align='center' style='color:blue'>Wed</td>
    <td align='center' style='color:blue'>Thu</td>
    <td align='center' style='color:blue'>Fri</td>
    <td align='center' style='color:blue'>Sat</td>
    </tr>";



    $time = mktime(0,0,0,$current_month,1,$current_year);

    $totle_day = date("t",$time);

    $thismonth = getdate ($time);

    $startday = $thismonth['wday'];


    for ($i=0; $i<($totle_day+$startday); $i++)
     {

       if(($i % 7) == 0 )

             echo "<tr>";

       if($i < $startday)

            echo "<td></td>";

       else 

            echo "<td align='center' >". ($i - $startday +1) . "</td>";

       if(($i % 7) == 6 )

            echo "</tr>";
    }


    echo "</table>";



    ?>

    </body>
    </html>