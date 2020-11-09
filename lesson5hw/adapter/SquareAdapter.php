<?php


class SquareAdapter implements ISquare
{

    function squareArea(float $sideSquare)
    {
        // TODO: Implement squareArea() method.
        $area = $sideSquare**2;
        return $area;
    }
}