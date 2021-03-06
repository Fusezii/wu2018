<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Female(): void
    {
        $result = AI::getGender('สวัสดีค่ะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_Male(): void
    {
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_Unknow(): void
    {
        $result = AI::getGender('สวัสดีฮะ');
        $expected_result = 'Unknow';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Positive(): void
    {
        $result = AI::getSentiment('ดีใจ');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Positive(): void
    {
        $result = AI::getSentiment('เสียใจ');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Positive(): void
    {
        $result = AI::getSentiment('น่าเบื่อ');
        $expected_result = 'Neutral';
        $this->assertEquals($expected_result, $result);
    }
    public functiom testGender_TH():void{
        if{'/[ก-๛]+/u'
        }
        return 'TH';
        else{
            return 'EN'
        }

    }

   
}