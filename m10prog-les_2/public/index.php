<?php

class Pencil
{
    public string $color;
    public float $length;
    public float $sharpness;

    function __construct($color = '', $sharpness = 0)
    {
        $this->length = 20;
        $this->sharpness = $sharpness;
        $this->color = $color;
    }

    function sharpen($sharpnessIncrease)
    {
        for ($i = 0; $i < $sharpnessIncrease; $i++) {
            $this->length -= 0.2;
            $this->sharpness++;
        }

        if ($this->length <= 0) {
            $this->length = 0;
            $this->sharpness = 0;
        }

        if (!empty($this->color)) {
            echo "Color: {$this->color} <br> Sharpness: {$this->sharpness}% <br> Length: " . round($this->length, 1) . "cm";
        } else {
            echo "Sharpness: {$this->sharpness}% <br> Length: " . round($this->length, 1) . "cm";
        }
    }
}

class BicPencil extends Pencil
{
    function __construct($color = '', $sharpness = 0)
    {
        $this->length = 20;
        $this->sharpness = $sharpness;
        $this->color = $color;
    }
}

echo "Pencil: <br>";
$pencil = new Pencil();
echo $pencil->sharpen(98);

echo "<br> <br>";

echo "Bic Pencil: <br>";
$bicpencil = new BicPencil("Gray");
echo $bicpencil->sharpen(2);