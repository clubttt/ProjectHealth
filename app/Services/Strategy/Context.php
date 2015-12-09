<?php
namespace App\Services\Strategy;

use App\Services\Strategy\Strategy;

class Context
{

    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy($FBS, $SYS, $DIA, $complication)
    {
        return $this->strategy->doOperation($FBS, $SYS, $DIA,$complication);
    }

}
