<?php

class Solution
{
    /*
     * If you copy paste these methods into the bottles class, you should pass all the tests.
     * */
    public function verse($number)
    {
        $one_less = $number - 1;
        switch ($number) {
            case 2:
                $verse = "2 bottles of beer on the wall, 2 bottles of beer.\nTake one down and pass it around, 1 bottle of beer on the wall.";
                break;
            case 1:
                $verse = "1 bottle of beer on the wall, 1 bottle of beer.\nTake it down and pass it around, no more bottles of beer on the wall.";
                break;
            case 0:
                $verse = "No more bottles of beer on the wall, no more bottles of beer.\nGo to the store and buy some more, 99 bottles of beer on the wall.";
                break;
            default:
                $verse = $number . " bottles of beer on the wall, " . $number . " bottles of beer.\nTake one down and pass it around, " . $one_less . " bottles of beer on the wall.";
                break;
        }
        return $verse;
    }

    public function verses($start, $stop)
    {
        $current = $start;
        $result = [];
        while ($current >= $stop) {
            array_push($result, $this->verse($current));
            $current -= 1;
        }
        return implode("\n\n", $result);
    }
}