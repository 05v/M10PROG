<?php

class Pencil
{
    private $wood;
    private $graphite;
    private $clay;
    private $rubber;
    private $sharpness;

    function sharpen(): string
    {
        return $this->sharpness;
    }
}
