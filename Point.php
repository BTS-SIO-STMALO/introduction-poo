<?php
class Point {
    private $x;
    private $y;

    public function __construct(int $x, int $y = 16) {
        $this->x = $x;
        $this->y = $y;
    }
}
