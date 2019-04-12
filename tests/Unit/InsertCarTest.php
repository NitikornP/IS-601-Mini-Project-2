<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCarTest()
    {
        $car = new Car();
        $car->id='51';
        $car->make='honda';
        $car->model='crv';
        $car->year='1997';
        $this->assertTrue($car->save());

    }
}
