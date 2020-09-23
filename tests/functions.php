<?php

require '..' . DIRECTORY_SEPARATOR . 'functions.php';

use PHPUnit\Framework\TestCase;

class WhoWinsTest extends TestCase {

    public function testSuccessDraw() {
        $expected = "Draw!";
        $input1 = 10;
        $input2 = 10;
        $case = whoWins($input1, $input2);
        $this->assertEquals($expected, $case);
    }

    public function testSuccessBustBoth() {
        $expected = "Both bust!";
        $input1 = 22;
        $input2 = 22;
        $case = whoWins($input1, $input2);
        $this->assertEquals($expected, $case);
    }

    public function testSuccessBust1() {
        $expected = "Player one bust! Two wins!";
        $input1 = 22;
        $input2 = 5;
        $case = whoWins($input1, $input2);
        $this->assertEquals($expected, $case);
    }

    public function testSuccessBust2() {
        $expected = "Player two bust! One wins!";
        $input1 = 16;
        $input2 = 22;
        $case = whoWins($input1, $input2);
        $this->assertEquals($expected, $case);
    }

}