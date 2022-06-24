<?php

function get_weekly_result($arsenal, $chelsea, $manchester, $liverpool, $weeknumber) {
        if ($weeknumber%3==0) {
            // Week 3 - 6
            // Ars - Liv
            // Man - Che
            // Che: 0.6
            // Ars: 0.4
            // Man: 0.7
            // Liv: 0.5

            $t1 = (int)((rand(10,99) * $arsenal->get_strength())/10); //Ars
            $t2 = (int)((rand(10,99) * $liverpool->get_strength())/10); //Liv

            if($t1>$t2) {
                $arsenal->update_w();
                $arsenal->update_pts(3);

                $liverpool->update_l();
                $liverpool->update_pts(0);
            }
            elseif($t2>$t1) {
                $arsenal->update_l();
                $arsenal->update_pts(0);

                $liverpool->update_w();
                $liverpool->update_pts(3);
            }
            else {
                $arsenal->update_d();
                $arsenal->update_pts(1);

                $liverpool->update_d();
                $liverpool->update_pts(1);
            }

            $arsenal->update_p();
            $arsenal->update_gf($t1);
            $arsenal->update_ga($t2);
            $arsenal->update_gd();

            $liverpool->update_p();
            $liverpool->update_gf($t2);
            $liverpool->update_ga($t1);
            $liverpool->update_gd();

            echo "&emsp;&emsp;&ensp;Arsenal vs Liverpool<br>";
            echo "&emsp;&emsp;&emsp;&emsp;$t1&emsp;&ensp;:&emsp;$t2<br>";

            $t1 = (int)((rand(10,99) * $manchester->get_strength())/10); //Man
            $t2 = (int)((rand(10,99) * $chelsea->get_strength())/10); //Che

            if($t1>$t2) {
                $manchester->update_w();
                $manchester->update_pts(3);

                $chelsea->update_l();
                $chelsea->update_pts(0);
            }
            elseif($t2>$t1) {
                $manchester->update_l();
                $manchester->update_pts(0);

                $chelsea->update_w();
                $chelsea->update_pts(3);
            }
            else {
                $manchester->update_d();
                $manchester->update_pts(1);

                $chelsea->update_d();
                $chelsea->update_pts(1);
            }

            $manchester->update_p();
            $manchester->update_gf($t1);
            $manchester->update_ga($t2);
            $manchester->update_gd();

            $chelsea->update_p();
            $chelsea->update_gf($t2);
            $chelsea->update_ga($t1);
            $chelsea->update_gd();

            echo "&emsp;&emsp;&ensp;Man. City vs Chelsea<br>";
            echo "&emsp;&emsp;&emsp;&emsp;$t1&emsp;&ensp;:&emsp;$t2<br>";
        }
        elseif ($weeknumber%3==1) {
            // Week 1-4
            // Ars - Che
            // Man - Liv
            // Che: 0.6
            // Ars: 0.4
            // Man: 0.7
            // Liv: 0.5

            $t1 = (int)((rand(10,99) * $arsenal->get_strength())/10); //Ars
            $t2 = (int)((rand(10,99) * $chelsea->get_strength())/10); //Che

            if($t1>$t2) {
                $arsenal->update_w();
                $arsenal->update_pts(3);

                $chelsea->update_l();
                $chelsea->update_pts(0);
            }
            elseif($t2>$t1) {
                $arsenal->update_l();
                $arsenal->update_pts(0);

                $chelsea->update_w();
                $chelsea->update_pts(3);
            }
            else {
                $arsenal->update_d();
                $arsenal->update_pts(1);

                $chelsea->update_d();
                $chelsea->update_pts(1);
            }

            $arsenal->update_p();
            $arsenal->update_gf($t1);
            $arsenal->update_ga($t2);
            $arsenal->update_gd();

            $chelsea->update_p();
            $chelsea->update_gf($t2);
            $chelsea->update_ga($t1);
            $chelsea->update_gd();

            echo "&emsp;&emsp;&ensp;Arsenal vs Chelsea<br>";
            echo "&emsp;&emsp;&emsp;&emsp;$t1&emsp;&ensp;:&emsp;$t2<br>";

            // Man: 0.7
            // Liv: 0.5
            $t1 = (int)((rand(10,99) * $manchester->get_strength())/10); //Man
            $t2 = (int)((rand(10,99) * $liverpool->get_strength())/10); //Liv

            if($t1>$t2) {
                $manchester->update_w();
                $manchester->update_pts(3);

                $liverpool->update_l();
                $liverpool->update_pts(0);
            }
            elseif($t2>$t1) {
                $manchester->update_l();
                $manchester->update_pts(0);

                $liverpool->update_w();
                $liverpool->update_pts(3);
            }
            else {
                $manchester->update_d();
                $manchester->update_pts(1);

                $liverpool->update_d();
                $liverpool->update_pts(1);
            }

            $manchester->update_p();
            $manchester->update_gf($t1);
            $manchester->update_ga($t2);
            $manchester->update_gd();

            $liverpool->update_p();
            $liverpool->update_gf($t2);
            $liverpool->update_ga($t1);
            $liverpool->update_gd();

            echo "&emsp;&emsp;Man City vs Liverpool<br>";
            echo "&emsp;&emsp;&emsp;&emsp;$t1&emsp;&ensp;:&emsp;$t2<br>";
        }
        else {
            // Week 2
            // Ars - Man
            // Che - Liv
            // Che: 0.6
            // Ars: 0.4
            // Man: 0.7
            // Liv: 0.5

            $t1 = (int)((rand(10,99) * $arsenal->get_strength())/10); //Ars
            $t2 = (int)((rand(10,99) * $manchester->get_strength())/10); //Man

            if($t1>$t2) {
                $arsenal->update_w();
                $arsenal->update_pts(3);

                $manchester->update_l();
                $manchester->update_pts(0);
            }
            elseif($t2>$t1) {
                $arsenal->update_l();
                $arsenal->update_pts(0);

                $manchester->update_w();
                $manchester->update_pts(3);
            }
            else {
                $arsenal->update_d();
                $arsenal->update_pts(1);

                $manchester->update_d();
                $manchester->update_pts(1);
            }

            $arsenal->update_p();
            $arsenal->update_gf($t1);
            $arsenal->update_ga($t2);
            $arsenal->update_gd();

            $manchester->update_p();
            $manchester->update_gf($t2);
            $manchester->update_ga($t1);
            $manchester->update_gd();


            echo "&emsp;&emsp;&ensp;Arsenal vs Man. City<br>";
            echo "&emsp;&emsp;&emsp;&emsp;$t1&emsp;&ensp;:&emsp;$t2<br>";

            $t1 = (int)((rand(10,99) * $chelsea->get_strength())/10); //Che
            $t2 = (int)((rand(10,99) * $liverpool->get_strength())/10); //Liv

            if($t1>$t2) {
                $chelsea->update_w();
                $chelsea->update_pts(3);

                $liverpool->update_l();
                $liverpool->update_pts(0);
            }
            elseif($t2>$t1) {
                $chelsea->update_l();
                $chelsea->update_pts(0);

                $liverpool->update_w();
                $liverpool->update_pts(3);
            }
            else {
                $chelsea->update_d();
                $chelsea->update_pts(1);

                $liverpool->update_d();
                $liverpool->update_pts(1);
            }

            $chelsea->update_p();
            $chelsea->update_gf($t1);
            $chelsea->update_ga($t2);
            $chelsea->update_gd();

            $liverpool->update_p();
            $liverpool->update_gf($t2);
            $liverpool->update_ga($t1);
            $liverpool->update_gd();

            echo "&emsp;&emsp;&ensp;Chelsea vs Liverpool<br>";
            echo "&emsp;&emsp;&emsp;&emsp;$t1&emsp;&ensp;:&emsp;$t2<br>";

        }
}

function get_weekly_predictions($arsenal, $chelsea, $manchester, $liverpool, $weeknumber) {
    echo "&emsp;&emsp;Win probability of Arsenal is %".(((($weeknumber-1)*$arsenal->get_w())-(($weeknumber-1)*$arsenal->get_l())+($arsenal->get_strength())*5)*10)." ";
    echo "&emsp;&emsp;Win probability of Chelsea is %".(((($weeknumber-1)*$chelsea->get_w())-(($weeknumber-1)*$chelsea->get_l())+($chelsea->get_strength())*5)*10)." ";
    echo "&emsp;&emsp;Win probability of Man. City is %".(((($weeknumber-1)*$manchester->get_w())-(($weeknumber-1)*$manchester->get_l())+($manchester->get_strength())*5)*10)." ";
    echo "&emsp;&emsp;Win probability of Liverpool is %".(((($weeknumber-1)*$liverpool->get_w())-(($weeknumber-1)*$liverpool->get_l())+($liverpool->get_strength())*5)*10)." ";

}

