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
    public function testSentiment_Positive(): void
    {
        $result = AI::getSentiment('ดี');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }
    
}