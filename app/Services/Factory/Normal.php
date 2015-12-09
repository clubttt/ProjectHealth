<?php


namespace App\Services\Factory;


class Normal implements LevelPatient
{

    public function draw()
    {
        return "<svg height='415' width='360'>
          <circle cx='180' cy='180' r='175' stroke='black' stroke-width='1' fill='#E8E8E8' />
        </svg>";
    }
}