<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        if(strpos($text, "ครับ")!=FALSE)
        return 'Male';
        elseif(strpos($text, "ค่ะ")!=FALSE)
        return 'Female';
        else
        return 'Unknow';
    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        if(strpos($text,"ดีใจ")!==TRUE)
        return 'Positive';
        if(strpos($text,"เสียใจ")!==TRUE)
        return 'Negative';
        else
        return 'Neutral';
        

        
    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
       if(strpos($text,"สาส")!==FALSE)
        return 'getRudeWords';
    else {
            return 'getRudeWords';
        }
       
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        $result = [];
        $re = '/[ก-๛]+/u';
        preg_match_all($re, $text, $matches, PREG_SET_ORDER, 0);
        if (!empty($matches)) {
            array_push($result, 'TH');
        }
        return $result;
        $result1 = [];
        $re1 = '/[A-๛]+/u';
        preg_match_all($re, $text, $matches, PREG_SET_ORDER, 0);
        if (!empty($matches)) {
            array_push($result1, 'EN');
        }
        return $result1;
    }
    
}
