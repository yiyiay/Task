<?php
include dirname(__FILE__)."/initialization.php";
include dirname(__FILE__)."/week.php";

$i = 1;

while($i<7) {
    echo "<p></p>&emsp;&emsp;Week ".($i-1)." - League Table<br>";
    echo "&emsp;Teams&emsp;|&emsp;PTS&emsp;|&emsp;P&emsp;|&emsp;W&emsp;|&emsp;D&emsp;|&emsp;L&emsp;|&emsp;GD&emsp;&emsp;<br>";
    echo "" . $arsenal->get_name() . "&emsp;&emsp;&emsp;" . $arsenal->get_pts() . "&emsp;&emsp;&emsp;" . $arsenal->get_p() . "&emsp;&emsp;&ensp;" . $arsenal->get_w() . "&emsp;&emsp;&ensp;" . $arsenal->get_d() . "&emsp;&emsp;&ensp;" . $arsenal->get_l() . "&emsp;&emsp;&ensp;" . $arsenal->get_gd() . "<br>";
    echo "" . $chelsea->get_name() . "&emsp;&emsp;&emsp;" . $chelsea->get_pts() . "&emsp;&emsp;&emsp;" . $chelsea->get_p() . "&emsp;&emsp;&ensp;" . $chelsea->get_w() . "&emsp;&emsp;&ensp;" . $chelsea->get_d() . "&emsp;&emsp;&ensp;" . $chelsea->get_l() . "&emsp;&emsp;&ensp;" . $chelsea->get_gd() . "<br>";
    echo "" . $liverpool->get_name() . "&emsp;&emsp;" . $liverpool->get_pts() . "&emsp;&emsp;&emsp;" . $liverpool->get_p() . "&emsp;&emsp;&ensp;" . $liverpool->get_w() . "&emsp;&emsp;&ensp;" . $liverpool->get_d() . "&emsp;&emsp;&emsp;" . $liverpool->get_l() . "&emsp;&emsp;&ensp;" . $liverpool->get_gd() . "<br>";
    echo "" . $manchester->get_name() . "&emsp;&emsp;&nbsp;" . $manchester->get_pts() . "&emsp;&emsp;&emsp;" . $manchester->get_p() . "&emsp;&emsp;&ensp;" . $manchester->get_w() . "&emsp;&emsp;&ensp;" . $manchester->get_d() . "&emsp;&emsp;&ensp;" . $manchester->get_l() . "&emsp;&emsp;&ensp;" . $manchester->get_gd() . "<br>";

    echo "<p></p>";
    echo "<br>";
    get_weekly_predictions($arsenal, $chelsea, $manchester, $liverpool, $i);
    echo "<p></p>";

    echo "<p></p>";
    echo "<br>";
    echo "&emsp;&emsp;Scores of the ".$i.". Week<br>";
    get_weekly_result($arsenal, $chelsea, $manchester, $liverpool, $i);
    echo "<p></p>";

    $i++;
}
echo "<p></p>&emsp;&emsp;Week ".($i-1)." - League Table<br>";
echo "&emsp;Teams&emsp;|&emsp;PTS&emsp;|&emsp;P&emsp;|&emsp;W&emsp;|&emsp;D&emsp;|&emsp;L&emsp;|&emsp;GD&emsp;&emsp;<br>";
echo "" . $arsenal->get_name() . "&emsp;&emsp;&emsp;" . $arsenal->get_pts() . "&emsp;&emsp;&emsp;" . $arsenal->get_p() . "&emsp;&emsp;&ensp;" . $arsenal->get_w() . "&emsp;&emsp;&ensp;" . $arsenal->get_d() . "&emsp;&emsp;&ensp;" . $arsenal->get_l() . "&emsp;&emsp;&ensp;" . $arsenal->get_gd() . "<br>";
echo "" . $chelsea->get_name() . "&emsp;&emsp;&emsp;" . $chelsea->get_pts() . "&emsp;&emsp;&emsp;" . $chelsea->get_p() . "&emsp;&emsp;&ensp;" . $chelsea->get_w() . "&emsp;&emsp;&ensp;" . $chelsea->get_d() . "&emsp;&emsp;&ensp;" . $chelsea->get_l() . "&emsp;&emsp;&ensp;" . $chelsea->get_gd() . "<br>";
echo "" . $liverpool->get_name() . "&emsp;&emsp;" . $liverpool->get_pts() . "&emsp;&emsp;&emsp;" . $liverpool->get_p() . "&emsp;&emsp;&ensp;" . $liverpool->get_w() . "&emsp;&emsp;&ensp;" . $liverpool->get_d() . "&emsp;&emsp;&emsp;" . $liverpool->get_l() . "&emsp;&emsp;&ensp;" . $liverpool->get_gd() . "<br>";
echo "" . $manchester->get_name() . "&emsp;&emsp;&nbsp;" . $manchester->get_pts() . "&emsp;&emsp;&emsp;" . $manchester->get_p() . "&emsp;&emsp;&ensp;" . $manchester->get_w() . "&emsp;&emsp;&ensp;" . $manchester->get_d() . "&emsp;&emsp;&ensp;" . $manchester->get_l() . "&emsp;&emsp;&ensp;" . $manchester->get_gd() . "<br>";

echo "<p></p>";
echo "<br>";
get_weekly_predictions($arsenal, $chelsea, $manchester, $liverpool, $i);
echo "<p></p>";

echo "<p></p>";
echo "<br>";