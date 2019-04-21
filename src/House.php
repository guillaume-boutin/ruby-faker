<?php

namespace App\Fakers;

use Faker\Provider\Base;

class House extends Base
{
    public function houseFurniture()
    {
        return static::randomElement(["chair", "armchair", "table", "dining table", "stool", "sofa", "couch", "bath", "bed", "cupboard", "drawers", "dresser", "floor lamp", "bedside table", "futon"]);
    }

    public function houseRoom()
    {
        return static::randomElement(["kitchen", "living room", "reception room", "bedroom", "master bedroom", "guest room", "drawing room", "conservatory", "porch", "hallway", "pantry", "sunroom", "bathroom", "ensuite bathroom", "cellar", "attic", "loft"]);
    }
}