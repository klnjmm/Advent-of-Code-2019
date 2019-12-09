<?php

namespace Klnjmm\Day03;

class ManhattanDistance
{
    public function distance(WirePathInterface $wirePath1, WirePathInterface $wirePath2)
    {
        $gridPoints1 = $wirePath1->toGridPoints();
        $gridPoints2 = $wirePath2->toGridPoints();

        $intersections = array_intersect($gridPoints1, $gridPoints2);

        $distances = array_map(function ($point) {
            $arrayPoint = explode(',', $point);

            return abs(0 - $arrayPoint[0]) + abs(0 - $arrayPoint[1]);
        }, $intersections);

        $validDistances = array_filter($distances);

        return min($validDistances);
    }
}
