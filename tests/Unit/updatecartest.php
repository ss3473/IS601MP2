<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class updatecartest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Car::find(1);
        $car->Year=2000;
        $car->save();
        $this->assertDatabaseHas('cars', [
            'id' => 1,
            'Year' => 2000
        ]);
    }
}
