<?php
namespace App\Services\Strategy;

interface Strategy
{
    public function doOperation($FBS,$SYS, $DIA, $complication );
}