<?php


namespace App\Services\Factory;


class Level0 implements LevelPatient
{

    public function draw()
    {
        return "<svg height='415' width='360'>
          <circle cx='180' cy='180' r='175' stroke='black' stroke-width='1' fill='#006400' />
        </svg>";
    }
}