<?php


class CircleAdapter implements ICircle
{

    function CircleArea(float $circumlength)
    {

        $area = $circumlength*$circumlength/(4*M_PI);
        return $area;
    }
}