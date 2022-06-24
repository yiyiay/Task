<?php

 class team
{
    // Properties
    public $name; //name of the team
    public $strength; //Strength of the team - set by the programmer
    public $pts; //points
    public $p; //played match count
    public $w; //win count
    public $d; //draw count
    public $l; //lost count
    public $gd; //goal difference - calculated thus need to keep goal counts
    public $gf; //goals for - atılan goller
    public $ga; //goals against - yenilen goller

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }

    //strength get/set
    function get_strength()
    {
        return $this->strength;
    }
    function set_strength($strength)
    {
        $this->strength = $strength;
    }

    //points get/set/update
    function get_pts()
    {
        return $this->pts;
    }
    function set_pts()
    {
        $this->pts = 0;
    }
    function update_pts($result)
    {
        $this->pts += $result;
    }

    //p
    function update_p()
    {
        $this->p++;
    }
    function set_p()
    {
        $this->p = 0;
    }
    function get_p()
    {
        return $this->p;
    }

    //w
    function update_w()
    {
        $this->w++;
    }
    function set_w()
    {
        $this->w = 0;
    }
    function get_w()
    {
        return $this->w;
    }

    //d
    function update_d()
    {
        $this->d++;
    }
    function set_d()
    {
        $this->d = 0;
    }
    function get_d()
    {
        return $this->d;
    }

    //l
    function update_l()
    {
        $this->l++;
    }
    function set_l()
    {
        $this->l = 0;
    }
    function get_l()
    {
        return $this->l;
    }

    //gd
    function update_gd()
    {
        $this->gd = $this->gf-$this->ga;
    }
    function set_gd()
    {
        $this->gd = 0;
    }
    function get_gd()
    {
        return $this->gd;
    }

    //gf
    function update_gf($goals)
    {
        $this->gf += (int)$goals;
        //$this->update_gd(); // here is a catch, even $goals is 0, it is sent to both update functions. meaning 1 update call is enough
    }
    function set_gf()
    {
        $this->gf = 0;
    }
    function get_gf()
    {
        return $this->gf;
    }

    //ga
    function update_ga($goals)
    {
        $this->ga += (int)$goals;
    }
    function set_ga()
    {
        $this->ga = 0;
    }
    function get_ga()
    {
        return $this->ga;
    }
}


