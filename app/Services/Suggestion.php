<?php
/**
 * Created by PhpStorm.
 * User: 56023_000
 * Date: 07-Dec-15
 * Time: 04:24
 */

namespace App\Services;


class Suggestion
{




    public static function getSuggestion($level)
    {
        $normal = "3อ.(อาหาร,ออกกำลังกาย,อารมณ์) สีขาว
อาหาร ผัก ผลไม้ครึ่งหนึ่ง อย่างอื่นครึ่งหนึ่ง
. รับประทานอาหารไม่ขัดสี เช่นข้าวกล้อง 5-8 ทัพพี
-ผักวันละ 3 ทัพพี (กรณีของผักใบเขียวรับประทานได้ไม่จำกัดจำนวน เช่น ผักกาก คะน้า,ผักบุ้ง,ถั่วฝักยาว)
-ผลไม้(ควรหลีกเลี่ยงผลไม้ที่มีรสจัด)
-ถั่วเมล็ดพืช วันละประมาณครึ่ง ถึง 1 ทัพพี
-ควรหลีกเลี่ยงเนื้อสัตว์ติดมัน,เครื่องในสัตว์,อาหารทะเล
ออกกำลังกาย อาทิตย์ละ 3 ครั้ง ครั้งละ 30 นาที
-ควรออกกำลังกายอย่างสม่ำเสมอ อย่างน้อยสัปดาห์ละ 3 วัน วันละอย่างน้อย 30 นาที เช่น
การเดิน การวิ่งเหยาะ ไทเก็ก ปั่นจักรยาน เป็นต้น หลีกเลี่ยงการวิ่งกระแทก
-ควบคุมน้ำหนัก BMI
อารมณ์  สงบ เยือกเย็น
-ทำจิตใจให้แจ่มใสอยู่เสมอ หาวิธีคลายเครียดหรือทำกิจกรรมร่วมกับครอบครัว เชาน ปลูกต้นไม้ เล่นดนตรี วาดรูป ท่องเที่ยว รวมทั้งยังต้องพักผ่อนให้พอ 6-8 ชั่วโมง
ลดอบายมุข
-ลดอ้วน ลดพุง ให้ได้
-ลด/เลิกบุหรี่ และเครื่องดื่มแอลกอฮอล์
-ตรวจวัดความดันโลหิตปีละครั้ง และตรวจประเมินโอกาเสี่ยงและระดับน้ำตาลในเลือดซ้ำทุก 1 ปี ";

        $risk = "*ปฎิบัติตัวเช่นเดียวกับสีขาว
ส่วนเพิ่มเติม
-วัดความดันทุกเดือน ตรวจวัดเบบาหวานทุก 1-3 เดือน
-ลดการบริโภคน้ำตาลสำหรับผู้ป่วยเบาหวาน
-ลดการบริโภคอาหารมัน เค็มสำหรับผู้ป่วย ความดันโลหิตสูง";

        $patientLevel0 = "*ปฎิบัติตัวเช่นเดียวกับสีขาว
ส่วนเพิ่มเติม
-รับประทานอาหารอย่างต่อเนื่อง
-นัดพบแพทย์ทุก 2-3 เดือน
ลดการบริโภคน้ำตาลสำหรับผู้ป่วยเบาหวาน
-ลดการบริโภคอาหารมัน เค็มสำหรับผู้ป่วย ความดันโลหิตสูง";

        $patientLevel1 = "*ปฎิบัติตัวเช่นเดียวกับสีขาวและสีเขียวอ่อน
ส่วนเพิ่มเติม
-จัดทำสมุดประจำตัว
-กรณีเป็นเบาหวาน ป้องกันภาวะแทรกซ้อน เช่น การตรวจตา ตรวจเท้า ตรวจปัสสาวะอย่างน้อยปีละ1 ครั้ง
-กรณีความดันโลหิตสูง ป้องกันภาวะแทรกซ้อนจากโรคหัวใจและสมอง ไจวาย เช่น การตรวจตา ตรวจการทำงานของไต หัวใจ
อย่างน้อยปีละ 1 ครั้ง";

        $patientLevel2 = "*ปฎิบัติตัวเช่นเดียวกับสีขาว สีเขียวอ่อน และสีเหลือง
-พบแพทย์ตามนัดทุก 4 สัปดาห์ หรือเมื่อมีอาหารผิดปกติ
-ได้รับการเยี่ยมบ้าน";

        $patientLevel3 = "*ปฎิบัติตัวเช่นเดียวกับสีขาว สีเขียวอ่อน และสีเหลือง
-พบแพทย์ตามนัด ทุก 4 สัปดาห์ หรือเมื่อมีอาการผิดปกติ / ได้รับการติดตามเยี่ยมบ้าน";

        $danger = "ระบบส่งต่อ  Stemi Fast track /Stroke Fast Tack
ช่วงวิกฤต
-ขึ้นกับพยาธิสภาพ
-ผลการรักษาจากการผ่าตัด
-อาการและอาการแสดงของผู้ป่วย ก่อนและหลังผ่าตัด
-ปฎิบัติตามคำสั่งของแพทย์ผู้เชี่ยวชาญแต่ละสาขาโดยเคร่งครัด
หลังวิกฤต
-Home Health Care
-จิดตอาสา";


        if ($level == "กลุ่มปกติ") {
            return $normal;
        } elseif ($level == "กลุ่มเสี่ยง") {
            return $risk;
        } elseif ($level == "ผู้ป่วยระดับ 0") {
            return $patientLevel0;
        } elseif ($level == "ผู้ป่วยระดับ 1") {
            return $patientLevel1;
        } elseif ($level == "ผู้ป่วยระดับ 2") {
            return $patientLevel2;
        } elseif ($level == "ผู้ป่วยระดับ 3") {
            return $patientLevel3;
        } elseif ($level == "ผู้ป่วยรุนแรง") {
            return $danger;
        }
        return null;
    }
}