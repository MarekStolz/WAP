<?php
$A = new Point2D();
$B = new Point2D(1, -5);
$A->setX(1);
echo "Vzdálenost A->B je " . $A->getDistance($B) . ".\n";
class Point2D
{
    private $x;
    private $y;
    public function __construct($x = 0, $y = 0)
    {
        $this->setX($x);
        $this->setY($y);
    }
    public function setX($value)
    {
        $this->x = floatval($value);
    }
    public function setY($value)
    {
        $this->y = floatval($value);
    }
    public function getX(): float
    {
        return $this->x;
    }
    public function getY(): float
    {
        return $this->y;
    }
    public function getDistance(Point2D $other)
    {
        return sqrt(
            pow($this->x - $other->getX(), 2)
                + pow($this->y - $other->getY(), 2)
        );
    }
}