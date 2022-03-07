<?php
class karel
{
    public $x;
    public $y;
    public $direction;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->direction = "s";
    }
    public function step($i = 1)
    {
        switch ($this->direction) {
            case "n";
                $this->y -= $i;
                break;
            case "e";
                $this->x += $i;
                break;
            case "s";
                $this->y += $i;
                break;
            case "w";
                $this->x -= $i;
        }
    }
    public function turnleft($i = 1)
    {
        switch ($this->direction) {
            case "n";
                $this->direction = "w";
                break;
            case "e";
                $this->direction = "n";
                break;
            case "s";
                $this->direction = "e";
                break;
            case "w";
                $this->direction = "s";
                break;
        }
        if (--$i > 0) {
            $this->turnleft();
        }
    }

    public function toHTML()
    {
        switch ($this->direction) {
            case "n";
                return "&uarr;";
            case "e";
                return "&rarr;";
            case "s";
                return "&darr;";
            case "w";
                return "&larr;";
            default:
                return "x";
        }
    }
}
