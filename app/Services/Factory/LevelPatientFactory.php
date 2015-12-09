<?php
namespace App\Services\Factory;

class LevelPatientFactory
{
    public function getLevelPatient($level){

        if($level == "กลุ่มปกติ"){
            return new Normal();
        }elseif($level == "กลุ่มเสี่ยง"){
            return new Risk();
        }elseif($level == "ผู้ป่วยระดับ 0"){
            return new Level0();
        }elseif($level == "ผู้ป่วยระดับ 1"){
            return new Level1();
        }elseif($level == "ผู้ป่วยระดับ 2"){
            return new Level2();
        }elseif($level == "ผู้ป่วยระดับ 3"){
            return new Level3();
        }
        elseif($level == "ผู้ป่วยรุนแรง"){
            return new Danger();
        }
        return null;


    }
}