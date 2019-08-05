<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class deletecartest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car= Car::find(2);
        $car->delete();
        $this->assertDatabaseMissing('cars', [
            'id' => 2,
        ]);
    }
}
