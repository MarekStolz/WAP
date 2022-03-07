<?php
class Karel
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
