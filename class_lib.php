<?php
define("SLOW", 5);
define("MEDIUM", 10);
define("FAST", 15);

class Fan
{
    private $speed;
    private $on;
    private $radius;
    private $color;

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getOn()
    {
        return $this->on;
    }

    /**
     * @param mixed $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function __construct()
    {
        $this->speed = SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = 'blue';
    }
    public function toString() {
        if ($this->on) {
            return "speed: " .$this->speed . " color " . $this->color. " radius " . $this->radius. " fan is on";
        } else {
            return "speed: " .$this->speed . " color " . $this->color. " radius " . $this->radius. " fan is off";
        }
    }
}