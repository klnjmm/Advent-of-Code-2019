<?php

namespace Klnjmm\Day03;

class MinimizeSignalDelay
{
    public function distance(WirePathInterface $wirePath1, WirePathInterface $wirePath2)
    {
        $gridPoints1 = $wirePath1->toGridPoints();
        $gridPoints2 = $wirePath2->toGridPoints();

        $intersections1 = array_intersect($gridPoints1, $gridPoints2);
        $intersections2 = array_intersect($gridPoints2, $gridPoints1);

        $allDistances = [];
        foreach ($intersections1 as $step1 => $point1) {
            foreach ($intersections2 as $step2 => $point2) {
                $gridPoint1 = explode(',', $point1);
                $gridPoint2 = explode(',', $point2);

                if ($gridPoint1[0] === $gridPoint2[0] && $gridPoint1[1] === $gridPoint2[1]) {
                    $allDistances[] = $step1 + $step2;
                }
            }
        }

        $validDistances = array_filter($allDistances);

        return min($validDistances);
    }
}
