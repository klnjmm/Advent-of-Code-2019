<?php

namespace Klnjmm\Day03;

class WirePath implements WirePathInterface
{
    /**
     * @var string
     */
    private $wirePath;


    /**
     * WirePath constructor.
     */
    public function __construct(string $wirePath)
    {
        $this->wirePath = $wirePath;
    }

    public function toGridPoints()
    {
        $lastPosition = [0,0];
        $gridPoints = [implode(',', $lastPosition)];

        $paths = explode(',', $this->wirePath);
        foreach ($paths as $path) {
            $direction = $path[0];
            $steps = substr($path, 1);

            if ($direction === 'U') {
                for ($step = 0; $step < $steps; $step++) {
                    $lastPosition[1]++;
                    $gridPoints[] = implode(',', $lastPosition);
                }
            } elseif ($direction === 'D') {
                for ($step = 0; $step < $steps; $step++) {
                    $lastPosition[1]--;
                    $gridPoints[] = implode(',', $lastPosition);
                }
            } elseif ($direction === 'R') {
                for ($step = 0; $step < $steps; $step++) {
                    $lastPosition[0]++;
                    $gridPoints[] = implode(',', $lastPosition);
                }
            } elseif ($direction === 'L') {
                for ($step = 0; $step < $steps; $step++) {
                    $lastPosition[0]--;
                    $gridPoints[] = implode(',', $lastPosition);
                }
            }
        }
        return $gridPoints;
    }
}
