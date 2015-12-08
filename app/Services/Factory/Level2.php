<?php
/**
 * Created by PhpStorm.
 * User: 56023_000
 * Date: 07-Dec-15
 * Time: 00:13
 */

namespace App\Services\Factory;


class Level2 implements LevelPatient
{

    public function draw()
    {
        return "<svg height='415' width='360'>
          <circle cx='180' cy='180' r='175' stroke='black' stroke-width='1' fill='#EE9A00' />
        </svg>";
    }
}