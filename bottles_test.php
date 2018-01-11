<?php
require_once "bottles.php";

class BottlesTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->bottles = new Bottles();
    }

    public function testTheFirstVerse()
    {
        $expected = "99 bottles of beer on the wall, 99 bottles of beer.\nTake one down and pass it around, 98 bottles of beer on the wall.";
        $this->assertEquals($expected, $this->bottles->verse(99));
    }

    public function testAnotherVerse()
    {
        $expected = "89 bottles of beer on the wall, 89 bottles of beer.\nTake one down and pass it around, 88 bottles of beer on the wall.";
        $this->assertEquals($expected, $this->bottles->verse(89));
    }

    public function testVerseTwo()
    {
        $expected = "2 bottles of beer on the wall, 2 bottles of beer.\nTake one down and pass it around, 1 bottle of beer on the wall.";
        $this->assertEquals($expected, $this->bottles->verse(2));
    }

    public function testVerseOne()
    {
        $expected = "1 bottle of beer on the wall, 1 bottle of beer.\nTake it down and pass it around, no more bottles of beer on the wall.";
        $this->assertEquals($expected, $this->bottles->verse(1));
    }

    public function testVerseZero()
    {
        $expected = "No more bottles of beer on the wall, no more bottles of beer.\nGo to the store and buy some more, 99 bottles of beer on the wall.";
        $this->assertEquals($expected, $this->bottles->verse(0));
    }

    public function testAFewVerses() {
        $expected = "99 bottles of beer on the wall, 99 bottles of beer.\nTake one down and pass it around, 98 bottles of beer on the wall.";
        $expected2 = "98 bottles of beer on the wall, 98 bottles of beer.\nTake one down and pass it around, 97 bottles of beer on the wall.";
        $verses = $expected."\n\n".$expected2;
        $this->assertEquals($verses, $this->bottles->verses(99, 98));
    }

    public function testAFewMoreVerses()
    {
        $expected1 = "2 bottles of beer on the wall, 2 bottles of beer.\nTake one down and pass it around, 1 bottle of beer on the wall.";
        $expected2 = "1 bottle of beer on the wall, 1 bottle of beer.\nTake it down and pass it around, no more bottles of beer on the wall.";
        $expected3 = "No more bottles of beer on the wall, no more bottles of beer.\nGo to the store and buy some more, 99 bottles of beer on the wall.";
        $verses = $expected1."\n\n".$expected2."\n\n".$expected3;
        $this->assertEquals($verses, $this->bottles->verses(2, 0));
    }
}
