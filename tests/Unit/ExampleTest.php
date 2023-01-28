<?php

namespace Tests\Unit;

use Exception;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_check_if_get_sum_method_works()
    {
        $num1 = 10;
        $num2 = 20;

        $result = getSum($num1, $num2);

        $this->assertEquals($result, 30);
    }

    public function test_get_score_returns_excellant()
    {
        $rate = 90;

        $result = getScore($rate);

        $this->assertEquals($result, "excellant");
    }

    public function test_get_score_returns_very_good()
    {
        $rate = 80;

        $result = getScore($rate);

        $this->assertEquals($result, "very good");
    }

    public function test_get_score_returns_good()
    {
        $rate = 70;

        $result = getScore($rate);

        $this->assertEquals($result, "good");
    }

    public function test_get_score_returns_accepted()
    {
        $rate = 60;

        $result = getScore($rate);

        $this->assertEquals($result, "accepted");
    }

    public function test_get_score_returns_failed()
    {
        $rate = 40;

        $result = getScore($rate);

        $this->assertEquals($result, "failed");
    }

    public function test_get_score_returns_error()
    {
        $rate = 105;

        $this->expectException(Exception::class);

        getScore($rate);
    }
}